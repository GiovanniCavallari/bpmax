<?php
/**
 * @author Gustavo Calixto | gustavo.calixtosouza@gmail.com
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Measure extends Model
{
    protected $fillable = [
    	'decibels',
    	'device_id',
    	'points'
    ];

    public function user()
    {
        return $this->belongsToMany('App\User');
    }
}
