<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AirplaneType extends Model
{
   protected $table = 'airplanetype';
   public $timestamps=false;
   public function category(){
   	return $this->belongsTo('App\AirplaneCategory');
   }
}
