<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalBread extends Model
{
    use HasFactory;

    protected $table = 'animals_bread';

    protected $fillable = [
        'breed_name',
    ];
}
