<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\GardianImport;

class TimeDeSucesso extends Controller
{
    public function show(){

        return view ('timedesucesso');
    }

    public function import(){
        Excel::import(new GardianImport, storage_path('teste.xls'));

        return redirect('/timedesucesso')->with('msg', 'Importado com sucesso!');;


    }
}
