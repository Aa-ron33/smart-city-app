<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HealthcareRecord extends Model
{
    protected $fillable = [
        'user_id',
        'healthcare_id',
        'booking_id',
        'visit_date',
        'doctor_name',
        'diagnosis',
        'prescription',
        'notes',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function facility()
    {
        return $this->belongsTo(Healthcare::class, 'healthcare_id');
    }

    public function booking()
    {
        return $this->belongsTo(HealthcareBooking::class, 'booking_id');
    }
}