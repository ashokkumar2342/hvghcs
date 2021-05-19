<?php

namespace App\Http\Controllers\Admin;

use App\Helper\MyFuncs;
use App\Http\Controllers\Controller;
use App\Model\BlockMCType;
use App\Model\BlockMc;
use App\Model\District;
use App\Model\State;
use App\Model\Village;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use PDF;

class MasterController extends Controller
{
   public function index()
   { 
     try {
          $States= State::orderBy('name_e','ASC')->get();   
          return view('admin.master.states.index',compact('States'));
        } catch (Exception $e) {
            
        }
     
   }
   public function store(Request $request,$id=null)
   {  
       $rules=[
            'code' => 'required|unique:states,code,'.$id, 
            'name' => 'required', 
             
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
       $States= State::firstOrNew(['id'=>$id]);
       $States->code=$request->code;
       $States->name_e=$request->name;
       
       $States->save();
       $response=['status'=>1,'msg'=>'Submit Successfully'];
       return response()->json($response);
      }
    }
    public function edit($id)
     { 
       try {  
            $States= State::find($id);   
            return view('admin.master.states.edit',compact('States'));
          } catch (Exception $e) {
              
          }
       
     }

    public function delete($id)
    {
       $States= State::find(Crypt::decrypt($id));  
       $States->delete();
       return redirect()->back()->with(['message'=>'Delete Successfully','class'=>'success']);  
    }
//-------districts--------------districts--------------districts---------------districts----//



   public function districts(Request $request)
   {
      try {             
          $States= State::orderBy('name_e','ASC')->get();   
          return view('admin.master.districts.index',compact('States'));
        } catch (Exception $e) {
            
        }
   }
   public function districtsStore(Request $request,$id=null)
   {  
       $rules=[
            'states' => 'required', 
            'code' => 'required|unique:districts,code,'.$id, 
            'name' => 'required', 
            
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
         
        $district=District::firstOrNew(['id'=>$id]);
        $district->state_id=$request->states;
        $district->code=$request->code;
        $district->name_e=$request->name; 
        $district->save(); 
        
       $response=['status'=>1,'msg'=>'Submit Successfully'];
       return response()->json($response);
      }
    }
    public function DistrictsTable(Request $request)
    {
      $Districts= District::where('state_id',$request->id)->orderBy('name_e','ASC')->get();
      return view('admin.master.districts.district_table',compact('Districts'));
    }
    public function districtsEdit($id)
    {
       try {
          $Districts= District::find($id);
          $States= State::orderBy('name_e','ASC')->get();   
          return view('admin.master.districts.edit',compact('Districts','States'));
        } catch (Exception $e) {
            
        }
    }
    
    public function districtsDelete($id)
    {
       $District= District::find(Crypt::decrypt($id));  
       $District->delete();
       return redirect()->back()->with(['message'=>'Delete Successfully','class'=>'success']);  
    }
    public function DistrictsZpWard($districts_id)
    { 
      $DistrictName= District::find($districts_id);
      return view('admin.master.districts.zp_ward',compact('DistrictName')); 
    }  
    //------------block-mcs----------------------------//

    public function BlockMCS(Request $request)
   {
      try {
           
          $Districts= District::orderBy('name_e','ASC')->get();   
          $States= State::orderBy('name_e','ASC')->get();   
          $BlocksMcs= BlocksMc::orderBy('name_e','ASC')->get();   
          return view('admin.master.block.index',compact('Districts','States','BlocksMcs'));
        } catch (Exception $e) {
            
        }
   }
    
   public function BlockMCSStore(Request $request,$id=null)
   {   
       $rules=[
            'states' => 'required', 
            'district' => 'required', 
            'code' => 'required|unique:blocks_mcs,code,'.$id, 
            'name' => 'required', 
            
            // 'syllabus' => 'required', 
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
       $BlocksMc= BlocksMc::firstOrNew(['id'=>$id]);
       $BlocksMc->states_id=$request->states;
       $BlocksMc->districts_id=$request->district; 
       $BlocksMc->code=$request->code;
       $BlocksMc->name_e=$request->name;
        
       $BlocksMc->save();
        
       $response=['status'=>1,'msg'=>'Submit Successfully'];
       return response()->json($response);
      }
    }
    public function BlockMCSTable(Request $request)
    {  
       $BlocksMcs= BlocksMc::where('districts_id',$request->district_id)->orderBy('name_e','ASC')->get(); 
       return view('admin.master.block.block_table',compact('Districts','States','BlocksMcs'));
    }
    public function BlockMCSEdit($id)
    {
       try {
           
          $Districts= District::orderBy('name_e','ASC')->get();   
          $States= State::orderBy('name_e','ASC')->get();   
          $BlocksMcs= BlocksMc::find($id);  
          return view('admin.master.block.edit',compact('Districts','States','BlocksMcs'));
        } catch (Exception $e) {
            
        }
    }
    public function BlockMCSDelete($id)
    {
       $BlocksMc= BlocksMc::find(Crypt::decrypt($id));  
       $BlocksMc->delete();
       return redirect()->back()->with(['message'=>'Delete Successfully','class'=>'success']);  
    }
      
      
    //
    //------------village----------------------------//

    public function village(Request $request)
   {
      try {
          $Districts= District::orderBy('name_e','ASC')->get();   
          $States= State::orderBy('name_e','ASC')->get();   
          $BlocksMcs= BlocksMc::orderBy('name_e','ASC')->get();   
          $Villages= Village::orderBy('name_e','ASC')->get(); 
          return view('admin.master.village.index',compact('Districts','States','BlocksMcs','Villages'));
        } catch (Exception $e) {
            
        }
   }
   
   public function villageStore(Request $request,$id=null)
   {  
       $rules=[
            'states' => 'required', 
            'district' => 'required', 
            'block_mcs' => 'required', 
            'code' => 'required|unique:villages,code,'.$id, 
            'village_name' => 'required', 
            'chc_id' => 'required', 
            'phc_id' => 'required', 
             
            // 'syllabus' => 'required', 
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
         $BlocksMc= Village::firstOrNew(['id'=>$id]);
         $BlocksMc->states_id=$request->states;
         $BlocksMc->districts_id=$request->district; 
         $BlocksMc->blocks_id=$request->block_mcs; 
         $BlocksMc->code=$request->code;
         $BlocksMc->name_e=$request->village_name;
         $BlocksMc->house_holds=$request->house_holds;
         $BlocksMc->population=$request->population;
         $BlocksMc->chc_id=$request->chc_id;
         $BlocksMc->phc_id=$request->phc_id; 
         $BlocksMc->save();
        
       $response=['status'=>1,'msg'=>'Submit Successfully'];
       return response()->json($response);
      }
    }
    public function villageTable(Request $request)
    {
      $Villages= Village::where('blocks_id',$request->id)->orderBy('states_id','ASC')->orderBy('districts_id','ASC')->orderBy('blocks_id','ASC')->orderBy('code','ASC')->get();
      return view('admin.master.village.village_table',compact('Villages')); 
    }
    public function villageEdit($id)
    {
       try { 
          
          $village=Village::find($id); 
          return view('admin.master.village.edit',compact('Districts','States','BlocksMcs','village'));
        } catch (Exception $e) {
            
        }
    }
    public function villageUpdate(Request $request,$id=null)
   {   
       $rules=[
             
            'code' => 'required|unique:villages,code,'.$id, 
            'village_name' => 'required',
            'chc_id' => 'required', 
            'phc_id' => 'required', 
             
            // 'syllabus' => 'required', 
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
        $village=Village::find($id); 
        $village->code=$request->code; 
        $village->name_e=$request->village_name;
        $village->house_holds=$request->house_holds;
        $village->population=$request->population;
        $village->chc_id=$request->chc_id;
        $village->phc_id=$request->phc_id; 
        $village->save(); 
       $response=['status'=>1,'msg'=>'Update Successfully'];
       return response()->json($response);
      }
    }
    public function villageDelete($id)
    {
       $Village= Village::find($id); 
       $Village->Delete();
       $response=['status'=>1,'msg'=>'Delete Successfully'];
       return response()->json($response);
    }
     
     
      
    
     
     
//----------------------------------------------
    public function stateWiseDistrict(Request $request)
    {
       try{ 
          $admin=Auth::guard('admin')->user(); 
          $Districts=DB::select(DB::raw("call up_fetch_district_access ($admin->id, '$request->id')"));   
          return view('admin.master.districts.value_select_box',compact('Districts'));
        } catch (Exception $e) {
            
        }
    }
    
    public function DistrictWiseBlock(Request $request,$print_condition=null)
    {
       try{
          $admin=Auth::guard('admin')->user();
          if (empty($print_condition)) {
           $BlocksMcs=DB::select(DB::raw("call up_fetch_block_access ($admin->id, '$request->id')")); 
           }
           if (!empty($print_condition)) {
           $BlocksMcs=DB::select(DB::raw("call up_fetch_block_access_voterlistprint ($admin->id, '$request->id','$print_condition')")); 
           } 
          return view('admin.master.block.value_select_box',compact('BlocksMcs'));
        } catch (Exception $e) {
            
        }
    }
    
    public function BlockWiseVillage(Request $request)
    {
       try{  
          $admin=Auth::guard('admin')->user(); 
          $Villages=DB::select(DB::raw("call up_fetch_village_access ($admin->id, '$request->district_id','$request->id','0')"));  
          return view('admin.master.village.value_select_box',compact('Villages'));
        } catch (Exception $e) {
            
        }
    }
    
}
