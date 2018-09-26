<?php

namespace App\Http\Controllers\Admin;

use App\Wing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Redirect;

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

    public function submit(Request $request){
        // validation
        $this->validate($request, [
            'nome' => 'required',
        ]);

        $wing = new Wing();
        $wing = $wing -> create($request->all());

        \Session::flash('mensagem_sucesso', 'Ala cadastrada com sucesso!');
        return Redirect::to('admin/alas/listar');

    }

    public function editar($id){
        $wing   = Wing::findOrFail($id);
        $button = 'Editar';
        return view('admin.alas.form', [
            'button' => $button,
            'wing'   => $wing
        ]);
    }

    public function update(Request $request, $id){
        // validation
        $this->validate($request, [
            'nome' => 'required',
        ]);

        $wing = Wing::findOrFail($id);
        $wing -> update([
            'nome' => $request->nome,
            'description' => $request->description
        ]);

        \Session::flash('mensagem_sucesso', 'Informações editadas com sucesso!');
        return Redirect::to('admin/alas/'.$wing->id.'/editar');
    }
}
