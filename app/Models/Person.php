<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prescription;
use App\Models\Health;

class Person extends Model
{
    use HasFactory;
        protected $fillable = [
        'name',
        'birth',
        'address',
        'idcard',
        'phone',
        'email'
    ];
    public function prescriptions()
    {
        return $this->belongsToMany(Prescription::class);
    }

    public function healths()
    {
        return $this->hasMany(Health::class);
    }
}
