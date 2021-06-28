<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function covid(Request $request){
        if($request->num === "持っている"){
            return view('numberinput');
        }
        else if($request->num === "持っていない"){
            return view('covidcomf');
        }
    }
}
