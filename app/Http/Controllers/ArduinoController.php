<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Device;
use App\Measure;
use App\MeasuresAux;
use App\User;

class ArduinoController extends Controller
{
    public function index(Request $request){

    	try {
    		$dados = $request->all();       

    		$deviceID = Device::where('hash', $dados['hash'])->pluck('id')->toArray();

    		if (empty($deviceID)) {
    			return 'Dispositivo inválido';
    		}

            $users = User::query('id')->whereIn('rfid_tag',$dados['users'])->get()->toArray();

    		$measure = Measure::create([
    			'decibels'  => $dados['decibels'],
    			'points'    => 10,
    			'device_id' => $deviceID[0]
    		]);

            for ($i=0; $i < count($dados['users']); $i++) { 
                $measureUsers[$i]['measure_id'] = $measure['id'];
                $measureUsers[$i]['user_id']    = $dados['users'][$i];
            }

            $measureUsers = [];
            foreach ($users as $user) {
                $measureUsers[$i]['measure_id'] = $measure['id'];
                $measureUsers[$i]['user_id']    = $user['id'];
            }

    		MeasuresAux::insert($measureUsers);

    		return 'Dados inseridos com sucesso';
    	} catch (Exception $e) {
    		return 'Erro: ' . $e->getMessage() . ' na linha: ' . $e->getLine() . ' do arquivo: ' . $e->getFile();
    	}
    	

    }
}
