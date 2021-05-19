<?php

namespace App\Http\Controllers\Admin; 
use App\Http\Controllers\Controller;
use App\Model\BlocksMc;
use App\Model\District;
use App\Model\Form3;
use App\Model\State;
use App\Model\Village;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
    public function Store(Request $request)
   {  
       $rules=[
            'states' => 'required', 
            'district' => 'required', 
            'block' => 'required', 
            'village' => 'required', 
            'for_date' => 'required', 
            'household_covered' => 'required', 
            'highrisk_household' => 'required', 
      ];

      $validator = Validator::make($request->all(),$rules);
      if ($validator->fails()) {
          $errors = $validator->errors()->all();
          $response=array();
          $response["status"]=0;
          $response["msg"]=$errors[0];
          return response()->json($response);// response as json
      }
      else {
         $Form3= new Form3();
         $Form3->states_id=$request->states;
         $Form3->districts_id=$request->district; 
         $Form3->blocks_id=$request->block; 
         $Form3->village_id=$request->village;
         $Form3->fordate=$request->for_date;
         $Form3->household_covered=$request->household_covered;
         $Form3->highrisk_household=$request->highrisk_household;
         $Form3->screened_m=$request->screened_m;
         $Form3->screened_f=$request->screened_f;
         $Form3->screened_o=$request->screened_o;
         $Form3->ili_found=$request->ili_found; 
         $Form3->contact_covid_positive=$request->contact_covid_positive; 
         $Form3->home_isolated=$request->home_isolated; 
         $Form3->reported_vhq=$request->reported_vhq; 
         $Form3->age_less45=$request->age_less45; 
         $Form3->age_more45=$request->age_more45; 
         $Form3->comorbid_dm=$request->comorbid_dm; 
         $Form3->comorbid_ht=$request->comorbid_ht; 
         $Form3->comorbid_lung=$request->comorbid_lung; 
         $Form3->comorbid_cancer=$request->comorbid_cancer; 
         $Form3->comorbid_others=$request->comorbid_others; 
         $Form3->referred_isolation=$request->referred_isolation; 
         $Form3->rat_tested=$request->rat_tested; 
         $Form3->rat_positive=$request->rat_positive; 
         $Form3->rtpcr_tested=$request->rtpcr_tested; 
         $Form3->rtpcr_positive=$request->rtpcr_positive; 
         $Form3->care_isolation_vhq=$request->care_isolation_vhq; 
         $Form3->refered_higher_vhq=$request->refered_higher_vhq; 
         $Form3->save();
        
       $response=['status'=>1,'msg'=>'Submit Successfully'];
       return response()->json($response);
      }
    } 
}
