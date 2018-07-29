<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Device;
use App\Measure;
use App\MeasureAux;

class ArduinoController extends Controller
{
    //
    public function index(Request $request){

    	try {
    		$dados = $request->all();         

    		$deviceID = Device::where('hash', $dados['hash'])->pluck('id');

    		if (empty($deviceID)) {
    			return 'Dispositivo inválido';
    		}

    		$measure = Measure::create([
    			'decibels' => $dados['decibels'],
    			'points'   => 10,
    			'id_robo'  => $deviceID[0]
    		]);

    		$measureUsers = [];
    		foreach ($dados['users'] as $user) {
    			$measureUsers['id_measure'] = $measure['id'];
    			$measureUsers['id_user']    = $user;
    		}

    		MeasureAux::insert($measureUsers);

    		return 'Dados inseridos com sucesso';
    	} catch (Exception $e) {
    		return 'Erro: ' . $e->getMessage() . ' na linha: ' . $e->getLine() . ' do arquivo: ' . $e->getFile();
    	}
    	

    }
}
