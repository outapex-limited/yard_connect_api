<?php

namespace App\Traits\Equipment;

use App\Http\Requests\Equipment\AddLeaseEquipmentRequest;
use App\Http\Requests\Equipment\EditLeaseEquipmentRequest;
use App\Models\LeaseEquipment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

trait LeaseEquipmentTrait
{
    // register lease equipment
    public function createLeaseEquipment(AddLeaseEquipmentRequest $request)
    {

        // register lease equipment
        $user = Auth::user();

        // handle file images upload
        $files = array();
        if ($request->hasFile('files')) {
            $files = $request->file('images');
            foreach ($files as $file) {
                $file_name = time() . rand() . "." . $file->extension();
                $file->move(public_path('equipment'), $file_name);
                $file_path = public_path('equipment') . $file_name;
                array_push($files, $file_path);
            }
        }

        $leaseEquipmentData = array(
            'name' => $request->name,
            'description' => $request->description,
            'manufacturer_id' => $request->manufacturer_id,
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'industry_id' => $request->industry_id,
            'year' => $request->year,
            'location' => $request->location,
            'default_price' => $request->default_price,
            'pricing_type_id' => $request->pricing_type_id,
            'min_lease_period' => $request->min_lease_period,
            'units' => $request->units,
            'equipment_condition_id' => $request->equipment_condition_id,
            'equipment_status_id' => $request->equipment_status_id,
            'images' => json_encode($files, true),
        );

        $user->leaseEquipment->create($leaseEquipmentData);
    }

    // register lease equipment
    public function updateLeaseEquipment(EditLeaseEquipmentRequest $request)
    {

        // register lease equipment
        $user = Auth::user();

        $files = array();
        // handle file images upload
        if ($request->hasFile('files')) {
            $files = $request->file('images');
            foreach ($files as $file) {
                $file_name = time() . rand() . "." . $file->extension();
                $file->move(public_path('equipment'), $file_name);
                $file_path = public_path('equipment') . $file_name;
                array_push($files, $file_path);
            }
        }

        $leaseEquipmentData = array(
            'name' => $request->name,
            'description' => $request->description,
            'manufacturer_id' => $request->manufacturer_id,
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'industry_id' => $request->industry_id,
            'year' => $request->year,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'location' => $request->location,
            'default_price' => $request->default_price,
            'pricing_type_id' => $request->pricing_type_id,
            'min_lease_period' => $request->min_lease_period,
            'units' => $request->units,
            'equipment_condition_id' => $request->equipment_condition_id,
            'equipment_status_id' => $request->equipment_status_id,
            'images' => json_encode($files, true),
        );

        $user->leaseEquipment->create($leaseEquipmentData);
    }
}
