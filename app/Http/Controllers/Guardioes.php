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

    public function create(){
        return view('createG');

    }

    public function store(Request $request){

        $guardiao = new guardiao;

        $guardiao->nome = $request->name;
        $guardiao->cargo = $request->job;
        $guardiao->dataNascimento = $request->birth;
        $guardiao->estagio = $request->trainee;


        /**Image Upload**/
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/guardioes'), $imageName);

            $guardiao->image = $imageName;
        }

        $guardiao->save();

        return redirect('/guardioes')->with('msg', 'Guardião criado com sucesso!');
    }
}
