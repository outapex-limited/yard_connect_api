<?php

namespace App\Http\Resources\Helpers;

use App\Models\Industry;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ManufacturerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $industries = Industry::whereIn('id', json_decode($this->industry_ids))->get();

        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'industry' => IndustryResource::collection($industries),
        ];
    }
}
