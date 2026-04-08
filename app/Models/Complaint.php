<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    // Kolom yang boleh diisi
    protected $fillable = [
        'user_id',
        'judul_aduan',
        'jenis_aduan',
        'deskripsi',
        'status',
    ];

    // Relasi: complaint milik satu user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}