<?php

namespace App\Http\Controllers;

use App\Models\Champion;
use Illuminate\Http\Request;

class ChampionController extends Controller{
    public function index(){
        $champions = Champion::all();
        return $champions;
        return view('champions.champions');
    }

    public function create(){
        return view('champions.championsCreate');
    }

    public function show($nombre){
        $champion = Champion::where('name','like',$nombre)->get()->first();
        return  $champion;
        return view('champions.championsShow', compact('nombre'));
    }
}
