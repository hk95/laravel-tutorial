<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;

class HeroController extends Controller
{
    public  function getHeroes() {
        return Hero::all();
    }

    public  function getHero($id) {
        return Hero::where('id',$id)->get();
    }

    public function createHero(Request $request) {
        $hero = new Hero();
        $hero->id = $request->id;
        $hero->name = $request->name;
        $hero->save();
    }

    public function updateHero(Request $request, $id) {
        $hero = Hero::findOrFail($id);
        $hero->name = $request->name;
        $hero->save();
    }

     public function deleteHero($id) {
         $hero = Hero::findOrFail($id);
         $hero->delete();
    }
}
