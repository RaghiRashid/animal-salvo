<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalFound extends Model
{
    use HasFactory;

    protected $fillable = [
        'animal_color',
        'animal_image',
        'animal_breed',
        'animal_size',
        'animal_specie',
        'found_location_id',
        'gender'
    ];

    public function breed()
    {
        return $this->belongsTo(AnimalBread::class, 'animal_breed');
    }

    public function specie()
    {
        return $this->belongsTo(AnimalSpecie::class, 'animal_specie');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function foundLocation()
    {
        return $this->belongsTo(Location::class, 'found_location_id');
    }

    public function currentLocation()
    {
        return $this->belongsTo(Location::class, 'current_location_id');
    }
}
