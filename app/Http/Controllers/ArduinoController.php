<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Device;
use App\Measure;
use App\MeasuresAux;
use App\User;
/**
 * @author Gustavo Calixto <gustavo.calixtosouza@gmail.com>
 */
class ArduinoController extends Controller
{
    /**
     * Realiza a integração com o arduino, recebendo os dados para cadastrar no banco de dados do azure.
     * @param  Request $request [Requisição post]
     * @return [int]           [verificação se o robo está ligado ou desligado]
     */
    public function index(Request $request){

    	try {
    		$dados = $request->all();       

    		$deviceID = Device::query('id','power')->where('hash', $dados['hash'])->get()->toArray();

    		if (empty($deviceID)) {
    			return 'Dispositivo inválido';
    		}

            $users = User::query('id')->whereIn('rfid_tag',$dados['users'])->get()->toArray();

    		$measure = Measure::create([
    			'decibels'  => $dados['db'],
    			'points'    => 10,
    			'device_id' => $deviceID[0]['id']
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

    		return $deviceID[0]['power'];
    	} catch (Exception $e) {
    		return 'Erro: ' . $e->getMessage() . ' na linha: ' . $e->getLine() . ' do arquivo: ' . $e->getFile();
    	}
    }

    /**
     * Retorna para o arduino para verificar se ele está ligado ou desligado.
     * @return [int] [power]
     */
    public function power(Request $request){
        dd($request->get('hash'));
        return Device::where('hash',$request->get('hash'))->pluck('power')[0];
    }
}
