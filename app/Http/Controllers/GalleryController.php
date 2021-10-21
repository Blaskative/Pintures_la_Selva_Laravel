<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){

        $imatges= Galeria::paginate(9);

        return view("galeria.index",compact('imatges'));
    }
}
