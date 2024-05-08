<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalSpecie extends Model
{
    use HasFactory;

    protected $fillable = [
        'specie_name',
    ];
}
