<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Person;

class Prescription extends Model
{
    use HasFactory;
    protected $table = 'prescriptions';
    protected $fillable = [
        'name',
        'amount',
        'using'
    ];

    public function people() {
        return $this->belongsToMany(Person::class);
    }
}
