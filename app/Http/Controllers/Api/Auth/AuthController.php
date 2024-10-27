<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\SignUpRequest;
use App\Models\User;
use App\Traits\Auth\AuthenticationTrait;

class AuthController extends Controller
{
    use AuthenticationTrait;

    // handle user registration
    public function register(SignUpRequest $request)
    {
        return $this->signup($request);
    }

    // handle user login
    public function login(LoginRequest $request)
    {
        return $this->signin($request);
    }

    // handle user log out
    public function logout()
    {
        return $this->signout();
    }

    // get genders for onborading
    public function getGenders()
    {
        return $this->fetchGenders();
    }

    //get roles for onboading
    public function getRoles()
    {
        return $this->fetchRoles();
    }

    // handle user session
    public function getUser()
    {
        return $this->fetchUser();
    }
}
