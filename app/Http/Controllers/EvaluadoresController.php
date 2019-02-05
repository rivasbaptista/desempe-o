<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvaluadoresController extends Controller
{
    public function index(){
        return view('evaluador.index');
    }
}
