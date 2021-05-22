<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Form3 extends Model
{
      // protected $fillable=['id'];
      protected $table='form3';
      public $timestamps=false;

      public function states()
      {
      	 return $this->hasOne('App\Model\State','id','state_id');
      }
      public function Villages()
      {
      	 return $this->hasOne('App\Model\Village','id','village_id');
      }
}
