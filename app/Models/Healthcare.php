<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Healthcare extends Model
{
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

    // 1 fasilitas punya banyak layanan
    public function services()
    {
        return $this->hasMany(HealthcareService::class);
    }

    // 1 fasilitas punya banyak booking
    public function bookings()
    {
        return $this->hasMany(HealthcareBooking::class);
    }

    // 1 fasilitas punya banyak rekam medis
    public function records()
    {
        return $this->hasMany(HealthcareRecord::class);
    }
}