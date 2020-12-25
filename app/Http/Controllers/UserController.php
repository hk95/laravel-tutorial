<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Hero;

class UserController extends Controller
{
 public   function index(){
    return User::all();
   }
 public   function getHeroes(){
    return Hero::all();
   }

   public function add(Request $request) {

    $user = new User();
    $user->id = $request->id;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = $request->password;
    $user->save();

    return true;
}
   public function hero(Request $request) {

    $hero = new Hero();
    $hero->id = $request->id;
    $hero->name = $request->name;
    $hero->save();

    return redirect('/getHero');
}

public function update(Request $request, $id)
{
    $hero = Hero::findOrFail($id);
    $hero->name = $request->name;
    $hero->save();

    return 'updated';
}

public function delete($id)
{
    $hero = Hero::findOrFail($id);
    $hero->delete();

    return 'deleted!';
}
}
