<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
 public   function index(){
    return User::all();
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
}
