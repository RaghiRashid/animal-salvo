<?php

namespace App\Http\Controllers;

use App\Models\AnimalFound;
use App\Models\Location;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        return view('animal.home');
    }

    public function store(Request $request)
    {
        $request->validate([
            'animal_color'      => 'required',
            'gender'            => 'required',
            'animal_breed'      => 'required',
            'animal_size'       => 'required',
            'animal_specie'     => 'required',
            'found_location_id' => 'required',
        ]);

        $user = User::create($request->only(['name', 'email', 'phone_number']));

        dd($user);

        $location = Location::create($request->only([
            'street',
            'zip_code',
            'district',
            'city',
            'state',
            'number'
        ]));

        $animal = AnimalFound::create($request->only([
            'animal_color',
            'animal_image',
            'animal_breed',
            'animal_size',
            'animal_specie',
            'found_location_id',
            'user_id' => $user->id,
            'found_location_id' => $location->id,
            'gender'
        ]));

        return redirect('/animal');
    }
}
