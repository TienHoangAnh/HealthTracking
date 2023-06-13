<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prescription;

class Person extends Model
{
    use HasFactory;
    protected $table = 'people';

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

    public function health()
    {
        return $this->belongsTo(Health::class);
    }
}
