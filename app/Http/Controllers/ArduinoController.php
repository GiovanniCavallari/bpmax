<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Device;
use App\Measure;
use App\MeasuresAux;

class ArduinoController extends Controller
{
    public function index(Request $request){

    	try {
    		$dados = $request->all();       

    		$deviceID = Device::where('hash', $dados['hash'])->pluck('id');

    		if (empty($deviceID)) {
    			return 'Dispositivo inválido';
    		}

    		$measure = Measure::create([
    			'decibels'  => $dados['decibels'],
    			'points'    => 10,
    			'device_id' => $deviceID[0]
    		]);

    		$measureUsers = [];
            for ($i=0; $i < count($dados['users']); $i++) { 
                $measureUsers[$i]['measure_id'] = $measure['id'];
                $measureUsers[$i]['user_id']    = $dados['users'][$i];
            }

    		MeasuresAux::insert($measureUsers);

    		return 'Dados inseridos com sucesso';
    	} catch (Exception $e) {
    		return 'Erro: ' . $e->getMessage() . ' na linha: ' . $e->getLine() . ' do arquivo: ' . $e->getFile();
    	}
    	

    }
}
