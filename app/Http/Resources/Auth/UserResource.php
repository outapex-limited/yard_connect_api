<?php

namespace App\Http\Resources\Auth;

use App\Http\Resources\Helpers\BusinessProfileResource;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'username' => $this->username,
            'first_name' => $this->userProfile->first_name,
            'last_name' => $this->userProfile->last_name,
            'gender' => $this->userProfile->gender->name ?? '',
            'email' => $this->userProfile->email,
            'phone_number' => $this->userProfile->phone_number,
            'profile_picture' => $this->userProfile->profile_pic,
            'role' => $this->role->name ?? '',
            'business_profile' => $this->role->id == Role::IS_MERCHANT ? new BusinessProfileResource($this->businessProfile) : null,
            'status' => $this->accountStatus->name ?? '',
            'token' => $this->createToken($this->device_id)->plainTextToken,
        ];
    }
}
