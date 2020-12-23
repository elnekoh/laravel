<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChampionController extends Controller{
    public function index(){
        return view('champions.champions');
    }

    public function create(){
        return view('champions.championsCreate');
    }

    public function show($nombre){
        return view('champions.championsShow', compact('nombre'));
    }
}
