<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medic extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['patient', 'doctor'];

    public function patient(){
        return $this->belongsTo(patient::class);
    }

    public function doctor(){
        return $this->belongsTo(doctor::class);
    }
}
