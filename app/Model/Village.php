<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
      protected $fillable=['id'];
      public $timestamps=false;

      public function states()
      {
      	 return $this->hasOne('App\Model\State','id','states_id');
      }
      public function district()
      {
      	 return $this->hasOne('App\Model\District','id','districts_id');
      }
      public function blockMCS()
      {
             return $this->hasOne('App\Model\BlocksMc','id','blocks_id');
      }
      public function CHCList()
      {
         return $this->hasOne('App\Model\CHCList','id','chc_id');
      }
      public function PHCList()
      {
         return $this->hasOne('App\Model\PHCList','id','phc_id');
      }
}
