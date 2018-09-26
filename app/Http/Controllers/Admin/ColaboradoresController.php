<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Measure;
use App\User;
class ColaboradoresController extends Controller
{
    //
    public function pontuacao(){
    	//realiza a query no banco 
    	//recupera nomes e pontuação dos mais barulhentos
    	//organiza o retorno para inserir no chart.js
    	$pontuacoes = Measure::select('user_id')
    	->selectRaw("sum(points) as pontos")
    	->join('measures_auxes', 'measures_auxes.measure_id','=','measures.id')
    	->groupBy('user_id')
    	->get()
    	->toArray();

    	$ids = array_map(function($data){
    		return $data['user_id'];
    	}, $pontuacoes);

    	$users = User::select('name','id')
    	->whereIn('id',$ids)
    	->get()
    	->toArray();

    	$return['pontos'] = [];
    	$return['nomes'] = [];

    	foreach ($pontuacoes as $pontuacao) {
    		array_push($return['pontos'], round($pontuacao['pontos'], 2));
    		foreach ($users as $user) {
    			if ($user['id'] == $pontuacao['user_id']) {
    				array_push($return['nomes'], $user['name']);
    				break;
    			}
    		}
    	}

    	return response()->json($return);
    }
}
