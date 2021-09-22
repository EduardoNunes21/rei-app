<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guardiao;

class Guardioes extends Controller
{
    public function guardioes(){

        $guardioes = guardiao::all();

        return view ('guardioes', ['guardioes' => $guardioes]);


    }
}
