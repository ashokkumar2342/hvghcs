<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CHCList extends Model
{
  

	  
  
    protected $fillable = ['id'];
    protected $table = 'chc_list';
    public $timestamps = false;

    public function states()
      {
      	 return $this->hasOne('App\Model\State','id','states_id');
      }
      public function district()
      {
      	 return $this->hasOne('App\Model\District','id','districts_id');
      }

    
    
}
