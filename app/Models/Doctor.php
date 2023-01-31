<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    public function polyclinic(){
        return $this->belongsTo(Polyclinic::class, 'polyclinic_id', 'id');
    }
    public function patient()
    {
        return $this->hasMany(Patient::class);
    }
}
