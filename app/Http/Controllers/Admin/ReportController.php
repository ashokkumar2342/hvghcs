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

class ReportController extends Controller
{ 
    
    public function index()
    {
        try {
          $Districts= District::orderBy('name_e','ASC')->get();   
          $States= State::orderBy('name_e','ASC')->get();   
          $BlocksMcs= BlocksMc::orderBy('name_e','ASC')->get();   
          $Villages= Village::orderBy('name_e','ASC')->get(); 
          return view('admin.report.index',compact('Districts','States','BlocksMcs','Villages'));
        } catch (Exception $e) {
            
        }
         
    }
    public function reportGenerate(Request $request)
    {  
        $stateId=$request->states;
        $districtId=$request->district;
        $blockId=$request->block;
        $villageId=$request->village;
        $datas=Form3::where('state',$request->state)->get();
        $path=Storage_path('fonts/');
        $defaultConfig = (new \Mpdf\Config\ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir']; 
        $defaultFontConfig = (new \Mpdf\Config\FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata']; 
        $mpdf = new \Mpdf\Mpdf([
             'fontDir' => array_merge($fontDirs, [
                 __DIR__ . $path,
             ]),
             'fontdata' => $fontData + [
                 'frutiger' => [
                     'R' => 'FreeSans.ttf',
                     'I' => 'FreeSansOblique.ttf',
                 ]
             ],
             'default_font' => 'freesans',
             'pagenumPrefix' => '',
            'pagenumSuffix' => '',
            'nbpgPrefix' => ' कुल ',
            'nbpgSuffix' => ' पृष्ठों का पृष्ठ'
         ]); 
        $html = view('admin.report.generate',compact('voterReports')); 
        $mpdf->WriteHTML($html); 
        $mpdf->Output(); 
    } 
}
