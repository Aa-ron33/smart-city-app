<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HealthcareService extends Model
{
    protected $fillable = [
        'healthcare_id',
        'service_name',
        'description',
        'duration',
        'is_available',
    ];

    public function facility()
    {
        return $this->belongsTo(Healthcare::class, 'healthcare_id');
    }
}