<?php

namespace App\Http\Requests\Equipment;

use Illuminate\Foundation\Http\FormRequest;

class AddLeaseEquipmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'description' => 'required',
            'manufacturer_id' => 'required',
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'industry_id' => 'required',
            'year' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'location' => 'required',
            'default_price' => 'required',
            'pricing_type_id' => 'required',
            'min_lease_period' => 'required',
            'units' => 'required',
            'equipment_condition_id' => 'required',
            'equipment_status_id' => 'required',
            'files' => 'required',
            'files.*' => 'required|mimes:png,jpg,jpeg|max:2048'
        ];
    }
}
