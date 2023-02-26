<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employeefirstcst;
use App\Models\fees;
use App\Models\secondcstmodel;
use App\Models\thirdcstmodel;
use App\Models\forthcstmodel;
use App\Models\allresultmodel;

class student extends Controller
{
    public function student()
    {

        


      
        return view('student/from');
    }
    public function allstudent()
    {

        


      
        return view('allresult/studentin');
    }
    public function allresltsp(Request $req){
        $result = allresultmodel::where('roll', '=', $req->roll)->first();
if($result){
    return view('allresult/result', compact('result'));

}else{



    session()->flash('message', 'There are no results Found');
    return view('allresult/studentin');

}

        
    }
    public function details(Request $req)
    {

        
        $secondcst = secondcstmodel::where('roll', '=', $req->roll)->first();
    $thirdcst = thirdcstmodel::where('roll', '=', $req->roll)->first();
    $forthcst = forthcstmodel::where('roll', '=', $req->roll)->first();
    
if($secondcst){
    $fees= fees::where('teqnology', '=', 'secondcst')->first();
    $showdata=$secondcst;
    
}elseif($thirdcst){
    
    $fees= fees::where('teqnology', '=', 'thirdcst')->first();
    $showdata=$thirdcst;

}elseif($forthcst){
    
    $fees= fees::where('teqnology', '=', 'forthcst')->first();
    $showdata=$forthcst;

}else{
    $showdata=null;
}

if($showdata){
        preg_match_all('/\d{5}/im', $showdata->first, $firstd);
        preg_match_all('/\d{5}/im', $showdata->second, $secondd);
          preg_match_all('/\d{5}/im', $showdata->third, $thirdd);
         preg_match_all('/\d{5}/im', $showdata->fourth, $fourthd);
         preg_match_all('/\d{5}/im', $showdata->fifth, $fifthd);
         preg_match_all('/\d{5}/im', $showdata->sixth, $sixthd);
          preg_match_all('/\d{5}/im', $showdata->seventh, $seventhd);

        
        
         
          $progress=0;
          if ($firstd) {$progress += sizeof($firstd[0]);}
          if ($thirdd) {$progress += sizeof($thirdd[0]);}
          if ($secondd) {$progress += sizeof($secondd[0]);}
          if ($fourthd) {$progress += sizeof($fourthd[0]);}
          if ($sixthd) {$progress += sizeof($sixthd[0]);}
          if ($fifthd) {$progress += sizeof($fifthd[0]);}
          if ($seventhd) {$progress += sizeof($seventhd[0]);}
 
 
          $markshitprogress=0;
          if ($firstd[0]) {$markshitprogress +=$fees->markshitfees;}
          if ($thirdd[0]) {$markshitprogress += $fees->markshitfees;}
          if ($secondd[0]) {$markshitprogress += $fees->markshitfees;}
          if ($fourthd[0]) {$markshitprogress += $fees->markshitfees;}
          if ($sixthd[0]) {$markshitprogress += $fees->markshitfees;}
          if ($fifthd[0]) {$markshitprogress += $fees->markshitfees;}
          if ($seventhd[0]) {$markshitprogress += $fees->markshitfees;}
         
 
 
          $refarttk=($progress*$fees->refart);
          $duefees=$refarttk+$fees->fromfillup+$fees->centerfees+$markshitprogress;
          $fromfillupfees=$fees->fromfillup;
          $centerfeesa=$fees->centerfees;

        


      
        return view('student/details' , compact('showdata','duefees','refarttk','markshitprogress','fromfillupfees','centerfeesa'));
    }else {
        session()->flash('message', 'There are no data found!');
    return view('student/from');}

}
}
