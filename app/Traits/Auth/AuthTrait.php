<?php

namespace App\Traits\Auth;

use App\Http\Requests\Auth\SignUpRequest;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\Auth\UserResource;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

trait AuthenticationTrait
{
    // handle user registration
    public function signup(SignUpRequest $request)
    {

        try {

            DB::beginTransaction();

            // register user
            $user = new User();
            $user->username = $request->username;
            $user->role_id = $request->role_id;
            $user->user_status_id = $request->user_status_id ?? 1;
            $user->password = bcrypt($request->password);
            $user->login_ip = $request->login_ip;
            $user->save();

            // register user profile
            $userData = array(
                'gender_id' => $request->gender_id,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'country_code' => $request->phone_number,
                'phone_number' => $request->phone_number,
            );

            $user->userProfile()->create($userData);

            //send welcome email to user
            // Mail::to($user->userProfile)->send(new WelcomeMail($user));

            DB::commit();

            return new UserResource($user);
        } catch (\Exception $th) {

            DB::rollback();
            Log::info($th->getMessage());
            return response()->json($th->getMessage(), 400);
        }
    }

    // handle user login
    public function signin(LoginRequest $request)
    {

        $user = User::where('username', $request->username)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'message' => ['The provided credentials are incorrect.'],
            ]);
        }

        return new UserResource($user);
    }

    // handle user log out
    public function signout()
    {

        $username = Auth::user()->username;
        $user = User::where('username', $username)->first();
        $user->tokens()->delete();

        return response()->noContent();
    }

    // handle user session
    public function fetchUser()
    {
        return new UserResource(Auth::user());
    }
}
