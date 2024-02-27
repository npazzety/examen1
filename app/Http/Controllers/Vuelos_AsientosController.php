<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Vuelos_AsientosController extends Controller
{
    public function index(){
        return view("vueloAsientos");
    }
}
