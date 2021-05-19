<?php

namespace App\Http\Controllers\Admin; 
use App\Http\Controllers\Controller;
use App\Model\BlocksMc;
use App\Model\District;
use App\Model\State;
use App\Model\Village;
use Illuminate\Http\Request;

class Form3Controller extends Controller
{ 
    
    public function index()
    {
        try {
          $Districts= District::orderBy('name_e','ASC')->get();   
          $States= State::orderBy('name_e','ASC')->get();   
          $BlocksMcs= BlocksMc::orderBy('name_e','ASC')->get();   
          $Villages= Village::orderBy('name_e','ASC')->get(); 
          return view('admin.form3.index',compact('Districts','States','BlocksMcs','Villages'));
        } catch (Exception $e) {
            
        }
         
    } 
}
