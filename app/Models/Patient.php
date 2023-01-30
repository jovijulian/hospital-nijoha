<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    public function doctor(){
        return $this->belongsTo(Doctor::class, 'doctor_id', 'id');
    }
    public function polyclinic(){
        return $this->belongsTo(Polyclinic::class, 'polyclinic_id', 'id');
    }

}
