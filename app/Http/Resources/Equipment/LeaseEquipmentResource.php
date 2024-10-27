<?php

namespace App\Http\Resources\Equipment;

use App\Http\Resources\Helpers\CategoryResource;
use App\Http\Resources\Helpers\EquipmentConditionResource;
use App\Http\Resources\Helpers\EquipmentStatusResource;
use App\Http\Resources\Helpers\IndustryResource;
use App\Http\Resources\Helpers\ManufacturerResource;
use App\Http\Resources\Helpers\MerchantResource;
use App\Http\Resources\Helpers\PricingTypeResource;
use App\Http\Resources\Helpers\SubCategoryResource;
use App\Models\Industry;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LeaseEquipmentResource extends JsonResource
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
            'description' => $this->description,
            'merchant' => new MerchantResource($this->merchant),
            'manufacturer' => new ManufacturerResource($this->manufacturer),
            'category' => new CategoryResource($this->category),
            'sub_category' => new SubCategoryResource($this->subCategory),
            'industry' => new IndustryResource($this->industry),
            'year' => $this->year,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'location' => $this->location,
            'default_price' => $this->default_price,
            'pricing_type' => new PricingTypeResource($this->pricingType),
            'min_lease_period' => $this->min_lease_period,
            'units' => $this->units,
            'images' => json_decode($this->images, true),
            'condition' => new EquipmentConditionResource($this->condition),
            'status' => new EquipmentStatusResource($this->status),
        ];
    }
}
