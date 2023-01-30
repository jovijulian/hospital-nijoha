<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Polyclinic extends Model
{
    use HasFactory;
    public function doctor()
    {
        return $this->hasMany(Doctor::class);
    }
    public function patient()
    {
        return $this->hasMany(Patient::class);
    }
}