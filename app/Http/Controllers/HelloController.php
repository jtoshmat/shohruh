<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function sayHello(Request $request){

        $name = $request->firstname;

        if (isset($name)){
            $users = User::where('firstname',$name)->get();
        }else{
            $users = User::all();
        }


        return view("hello",compact('users'));
    }
}
