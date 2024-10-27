<?php

namespace App\Http\Controllers\Api\Equipment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Equipment\AddLeaseEquipmentRequest;
use App\Http\Requests\Equipment\EditLeaseEquipmentRequest;
use App\Http\Resources\Equipment\LeaseEquipmentCollection;
use App\Http\Resources\Equipment\LeaseEquipmentResource;
use App\Models\LeaseEquipment;
use App\Traits\Equipment\LeaseEquipmentTrait;

class LeaseEquipmentController extends Controller
{
    use LeaseEquipmentTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'status' => 200,
            'messsage' => 'Lease equipment successfully retrieved',
            'data' => LeaseEquipmentResource::collection(LeaseEquipment::all()),
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddLeaseEquipmentRequest $request)
    {
        return $this->createLeaseEquipment($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(LeaseEquipment $leaseEquipment)
    {
        return new LeaseEquipmentResource($leaseEquipment);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditLeaseEquipmentRequest $request, LeaseEquipment $leaseEquipment)
    {
        return $this->updateLeaseEquipment(($request));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LeaseEquipment $leaseEquipment)
    {
        //
        $leaseEquipment->delete();
    }
}
