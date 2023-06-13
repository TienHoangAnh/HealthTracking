<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Doctor;

class Check extends Model
{
    use HasFactory;
    protected $table = 'checks';
    protected $fillable = [
        'date',
        'address',
        'department',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
