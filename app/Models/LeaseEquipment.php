<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaseEquipment extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'name',
        'manufacturer_id',
        'category_id',
        'sub_category_id',
        'industry_id',
        'year',
        'images',
        'location',
        'default_price',
        'pricing_type_id',
        'min_lease_period',
        'units',
        'equipment_status_id',
        'equipment_condition_id'
    ];
}
