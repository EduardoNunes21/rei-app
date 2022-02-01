<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\GardianImport;
use Illuminate\Support\Facades\DB;

class TimeDeSucesso extends Controller
{
    public function show(){

        return view ('timedesucesso');
    }

    public function import(){
        Excel::import(new GardianImport, storage_path('teste.xls'));

        return redirect('/timedesucesso')->with('msg', 'Importado com sucesso!');;




       
    }

    public function media() {
        $dataA= DB::table('timedesucesso')->select(DB::raw('SUM(Av) AS total1'))->where('Resp', '=', 'Alexsandro Fabiano dos Passos')->get();
        return view('timedesucesso', ['data' => $dataA]);


        $dataD= DB::table('timedesucesso')->select(DB::raw('SUM(Av) AS total2'))->where('Resp', '=', 'Daniel da Silva Rosa')->get();
        return view('timedesucesso', ['daniel' => $dataD]);




    }
}
