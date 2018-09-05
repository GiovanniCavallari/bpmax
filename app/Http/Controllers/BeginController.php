<?php

namespace App\Http\Controllers;

use App\Measure;
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
        $measure = Measure::get()->last();
        
        if($measure->decibels < 45){
            $label = 'good-dblevel';
        }
        else if($measure->decibels >= 45 && $measure->decibels <= 55){
            $label = 'warning-dblevel';
        }
        else{
            $label = 'danger-dblevel';
        }

    	return view('ruidos', [
            'label'   => $label,
            'measure' => $measure
        ]);
    }

    public function dblevel(){
        $measure = Measure::get()->last();
        
        if($measure->decibels < 45){
            $label = 'good-dblevel';
        }
        else if($measure->decibels >= 45 && $measure->decibels <= 55){
            $label = 'warning-dblevel';
        }
        else{
            $label = 'danger-dblevel';
        }

        return '<div id="label-dblevel" class="label-dblevel '.$label.'">
                    <h1 class="title text-dblevel">'.$measure->decibels.' dB</h1>
                </div>';
    }
    
}
