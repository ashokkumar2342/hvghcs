<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PHCList extends Model
{
  

	  
  
    protected $fillable = ['id'];
    protected $table = 'phc_list';
    public $timestamps = false;

    public function states()
      {
      	 return $this->hasOne('App\Model\State','id','states_id');
      }
      public function district()
      {
      	 return $this->hasOne('App\Model\District','id','districts_id');
      }
      public function CHCList()
      {
         return $this->hasOne('App\Model\CHCList','id','chc_id');
      }

    
    
}
