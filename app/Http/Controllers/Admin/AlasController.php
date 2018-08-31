<?php

namespace App\Http\Controllers\Admin;

use App\Wing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	$wings = Wing::get();
    	return view('admin.alas.listar', ['wings' => $wings]);
    }

    public function cadastrar(){
    	$button = 'Cadastrar';
    	return view('admin.alas.form', [
    		'button' => $button
    	]);
    }
}
