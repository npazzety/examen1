<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;



class TipoAsientoController extends Controller
{
    public function show(){
        return view("inicio");
    }

    public function actualizar(Request $request){
        $tipoAsiento = new TipoAsiento();
        $tipoAsiento->descripcion = $request->input("descripcion");
        $tipoAsiento->precio = $request->input("precio");
        $tipoAsiento->estado = $request->input("estado");

        return redirect('menu.index');

    }

    public function delete($id){
        $tipoAsiento = TipoAsiento::find($id);
        return view('asientos.elimiar', compact('tipoAsientos'));
    }	

    public function destroy ($id){
        $tipoAsiento = TipoAsiento::find($id);
        $tipoAsiento->delete();
    }



}
