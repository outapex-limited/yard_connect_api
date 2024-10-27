<?php

namespace App\Http\Resources\Helpers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MerchantResource extends JsonResource
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
            'first_name' => $this->userProfile->first_name,
            'last_name' => $this->userProfile->last_name,
            'email' => $this->userProfile->email,
            'phone_number' => $this->userProfile->phone_number,
            'business_profile' => new BusinessProfileResource($this->businessProfile),
        ];
    }
}
