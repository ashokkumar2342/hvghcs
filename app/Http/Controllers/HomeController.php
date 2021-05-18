<?php
namespace App\Http\Controllers;
use App\Events\SmsEvent;
use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use App\Model\Category;
use App\Model\ClassType;
use App\Model\Gender;
use App\Model\ParentRegistration;
use App\Model\Religion;
use App\Model\SessionDate;
use App\Model\Voter;
use App\Model\StudentDefaultValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use setasign\Fpdi\PdfParser\StreamReader;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
    //  */
    public function __construct()
    {
       // $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mpdf = new \Mpdf\Mpdf();
        $fileContent = file_get_contents('http://www.africau.edu/images/default/sample.pdf','rb');
         $pagecount=  $mpdf->setSourceFile(StreamReader::createByString($fileContent));
        // $pagecount=  $pdf->setSourceFile(StreamReader::createByString($fileContent));
        // $pagecount = $mpdf->setSourceFile('http://www.africau.edu/images/default/sample.pdf');
        $tplId = $mpdf->importPage($pagecount);

        $mpdf->useTemplate($tplId, 0, 0, 300, 300);

        $mpdf->Output();
        dd($mpdf);
    }

    public function inbox(Request $request){  
          Log::info($request);
        // $inbox =new Inbox();
        // $inbox->phone =$request->PhNO;
        // $inbox->key_no =$request->Key;
        // $inbox->phrase =$request->Phrase;
        // $inbox->param =$request->Param;
        // $inbox->full_msg =$request->FullMsg;
    }

    public function saveapi()
           { 
             // $ch = curl_init();
             // curl_setopt($ch, CURLOPT_URL, "http://localhost:8000/getdata");
             // // SSL important
             // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
             // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
             // $output = curl_exec($ch); 
             // curl_close($ch);

             // $datas=json_decode($output);
             // dd($datas);
             $ipinfoAPI="http://localhost:8000/getdata";
            $json =file_get_contents($ipinfoAPI);
            $data= (array) json_decode($json);
            
             foreach ($datas as $data) {
               $Voter =new Voter();
               $Voter->name_e =$data->name;
               $Voter->mobile_no =$data->mobile;
               $Voter->save();
             }
            
               $phonebooks =Phonebook::get();
             return view('ayush',compact('phonebooks'));
           }
}