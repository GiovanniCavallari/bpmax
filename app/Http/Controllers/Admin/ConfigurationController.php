<?php

namespace App\Http\Controllers\Admin;

use App\Wing;
use App\Device;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Redirect;

class ConfigurationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	$devices = Device::join('wings','devices.wing_id','=','wings.id')
            ->select('devices.id', 'wings.nome', 'wings.id as id_wing')
            ->get();
    	return view('admin.config.listar', [
    		'devices' => $devices
    	]);
    }

    public function editar($id){
    	$device = Device::findOrFail($id);
    	return view('admin.config.editar', [
    		'device' => $device
    	]);
    }

    public function update(Request $request, $id){
    	$device = Device::findOrFail($id);
    	$device -> update([
    		'power' => $request->power,
    	]);

    	\Session::flash('mensagem_sucesso', 'Informações editadas com sucesso!');
    	return Redirect::to('admin/configuration/'.$device->id.'/editar');
    }

    public function cadastrar(){
        $wings = Wing::get();
        return view('admin.config.cadastrar', ['wings' => $wings]);
    }

    public function submit(Request $request){
        $device = new Device();
        $device = $device -> create([
            'wing_id' => $request->wing_id,
            'power'   => $request->power,
            'hash'    => md5(rand(1,100))
        ]);

        \Session::flash('mensagem_sucesso', 'Robô cadastrado com sucesso!');
        return Redirect::to('admin/configuration/listar');

    }
}
