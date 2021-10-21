<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeria;

class GaleriaController extends Controller
{
    public function index(Request $request) {
        if($request->categoria==0){
        
            $imatges= Galeria::paginate(9);
            return view("galeria.index",compact('imatges'));
        }else{
            $imatges= Galeria::where('apartat_id', '=', $request->categoria)->paginate(9);
            return view("galeria.index",compact('imatges'));
        }
        
     
    }
  
}
