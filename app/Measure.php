<?php
/**
 * @author Gustavo Calixto | gustavo.calixtosouza@gmail.com
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Measure extends Model
{
    //
    protected $fillable = ['decibels','id_robo','points'];

    public function user()
    {
        return $this->belongsToMany('App\User');
    }
}
