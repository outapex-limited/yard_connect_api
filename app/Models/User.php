<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasUuids, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'role_id',
        'username',
        'password',
        'account_status_id',
        'login_ip',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // define user - role relationships
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    // define user - status relationships
    public function accountStatus()
    {
        return $this->hasOne(AccountStatus::class, 'id', 'account_status_id');
    }

    // define user - userProfile relationships
    public function userProfile()
    {
        return $this->hasOne(UserProfile::class);
    }

    // define user - userProfile relationships
    public function businessProfile()
    {
        return $this->hasOne(BusinessProfile::class);
    }

    // define user - equipment relationships
    public function leaseEquipment()
    {
        return $this->hasMany(LeaseEquipment::class);
    }
}
