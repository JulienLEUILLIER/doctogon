<?php

namespace App\Models;

use App\Models\Appointment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'city',
        'email',
        'address',
        'phone',
    ];

    public function appointments() {
        return $this->hasMany(Appointment::class, 'doctor_id');
    }
}
