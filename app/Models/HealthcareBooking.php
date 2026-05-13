<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HealthcareBooking extends Model
{
    protected $fillable = [
        'user_id',
        'healthcare_id',
        'service_id',
        'booking_date',
        'booking_time',
        'queue_number',
        'status',
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

    public function service()
    {
        return $this->belongsTo(HealthcareService::class, 'service_id');
    }
}