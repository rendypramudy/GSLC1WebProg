<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function anim(){
        $animals = Animal::all();
        return view('animallist', compact('animals'));
    }
}
