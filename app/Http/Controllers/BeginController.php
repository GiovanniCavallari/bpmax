<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeginController extends Controller
{
    public function index(){
    	return view('welcome');
    }

    public function solucao(){
    	return view('solucao');
    }

    public function servicos(){
    	return view('servicos');
    }

    public function componentes(){
    	return view('componentes');
    }

    public function equipe(){
    	return view('equipe');
    }

    public function ruidos(){
    	return view('ruidos');
    }
    
}
