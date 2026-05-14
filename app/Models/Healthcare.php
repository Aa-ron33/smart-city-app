<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Healthcare extends Model
{
    protected $table = 'healthcare';

    protected $fillable = [
        'name',
        'type',
        'address',
        'phone',
        'latitude',
        'longitude',
        'operating_hours',
        'status',
    ];

    public function services()
    {
        return $this->hasMany(HealthcareService::class);
    }

    public function bookings()
    {
        return $this->hasMany(HealthcareBooking::class);
    }

    public function records()
    {
        return $this->hasMany(HealthcareRecord::class);
    }
}