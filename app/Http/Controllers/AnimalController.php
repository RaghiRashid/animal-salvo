<?php

namespace App\Http\Controllers;

use App\Models\AnimalBread;
use App\Models\AnimalFound;
use App\Models\AnimalSpecie;
use App\Models\Location;
use App\Models\User;
use Illuminate\Http\Request;

use function Psy\debug;

class AnimalController extends Controller
{
    public function index()
    {
        $species = AnimalSpecie::all();

        return view('animal.home')->with('species', $species);
    }

    public function store(Request $request)
    {
        $request->validate([
            'animal_image' => 'required|file|mimes:jpeg,png,gif|max:2048',
        ]);

        $image_path = $request->file('animal_image')->store('uploads', 'public');
        $request->image_path = $image_path;

        $user = User::where('email', $request->email)->first();

        if (empty($user))
        {
            $user = User::create($request->only(['name', 'email', 'phone_number']));
        }

        $location = Location::create($request->only([
            'street',
            'zip_code',
            'district',
            'number',
            'city',
            'state',
        ]));

        $animal = AnimalFound::create([
            'animal_color' => $request->animal_color,
            'animal_image' => $request->image_path,
            'gender' => $request->gender,
            'status'  => $request->status,
            'animal_breed' => $request->animal_breed,
            'animal_size' => $request->animal_size,
            'animal_specie' => $request->animal_specie,
            'location_id' => $location->id,
            'user_id' => $user->id,
        ]);

        return redirect('/animal');
    }

    public function show()
    {
        return view('animal.list');
    }

    public function getBreedsBySpecie($id)
    {
        $breeds = AnimalBread::where('specie_id', $id)->get();

        return response()->json($breeds);
    }
}
