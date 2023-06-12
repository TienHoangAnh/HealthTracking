<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\prescription;

class Person extends Model
{
    use HasFactory;
    protected $table = 'person';
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
}
