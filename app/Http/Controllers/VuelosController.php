<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class VuelosController extends Controller
{
    public function show(){
        return view("vuelos");
    }

    public function create(request $request){
        $vuelos = new vuelos();
        $vuelos->numerovuelo= $request->numerovuelo;
        
    }
 }

