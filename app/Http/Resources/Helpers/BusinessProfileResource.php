<?php

namespace App\Http\Resources\Helpers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BusinessProfileResource extends JsonResource
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
            'name' => $this->name,
            'website' => $this->website,
            'contact' => $this->contact,
            'email' => $this->email,
            'business_certificate' => $this->business_certificate_path,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'location' => $this->location,

        ];
    }
}
