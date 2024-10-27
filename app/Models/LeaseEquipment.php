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
        'description',
        'manufacturer_id',
        'category_id',
        'sub_category_id',
        'industry_id',
        'year',
        'images',
        'latitude',
        'longitude',
        'location',
        'default_price',
        'pricing_type_id',
        'min_lease_period',
        'units',
        'equipment_status_id',
        'equipment_condition_id'
    ];

    // define leaseequipment - merchant relationships
    public function merchant()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // define leaseequipment - manufacturer relationships
    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }

    // define leaseequipment - category relationships
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // define leaseequipment - subcategory relationships
    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    // define leaseequipment - industry relationships
    public function industry()
    {
        return $this->belongsTo(Industry::class, 'industry_id', 'id');
    }

    // define leaseequipment - pricing type relationships
    public function pricingType()
    {
        return $this->belongsTo(PricingType::class);
    }

    // define leaseequipment - status relationships
    public function status()
    {
        return $this->belongsTo(EquipmentStatus::class, 'equipment_status_id', 'id');
    }

    // define leaseequipment - condition relationships
    public function condition()
    {
        return $this->belongsTo(EquipmentCondition::class, 'equipment_condition_id', 'id');
    }
}
