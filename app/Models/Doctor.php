<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Check;

class Doctor extends Model
{
    use HasFactory;
    protected $table = 'doctors';
    protected $fillable = [
        'name',
        'department',
        'phone',
        'description',
        'photo'
    ];

    public function checks()
    {
        return $this->hasMany(Check::class);
    }
}
