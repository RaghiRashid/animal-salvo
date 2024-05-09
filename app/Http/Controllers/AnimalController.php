<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        return view('animal.home');
    }
    public function show()
    {
        return view('animal.list');
    }
}
