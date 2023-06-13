<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Health extends Model
{
    use HasFactory;
    protected $table = 'health';
    protected $fillable = [
        'weight',
        'height',
        'symptom'
    ];

    public function person(){
        return $this->hasMany(Health::class);
    }
}
