<?php

namespace App\Http\Controllers;
use App\Models\thirdcstmodel;
use App\Models\fees;


use Illuminate\Http\Request;

class thirdcst extends Controller
{
    public function thirdcstd()
    {
      
        return view('/employee/lllcst/thirdcst');
    }
    public function thirdcstmanual()
    {
      
        return view('/employee/lllcst/thirdcstmanual');
    }
    public function thirdcstresultmanual(Request $req)
    {

        $data = thirdcstmodel::where('roll', '=', $req->roll)->first();


      if(!$data){






        $showdata = new thirdcstmodel();


        if($req->roll){$showdata->roll=$req->roll;}else{$showdata->roll=null;};
        if($req->result){$showdata->result=$req->result;}else{$showdata->result=null;};
        if($req->first){$showdata->first=$req->first;}else{$showdata->first=null;};
        if($req->second){$showdata->second=$req->second;}else{$showdata->second=null;};
        if($req->third){$showdata->third=$req->third;}else{$showdata->third=null;};
        if($req->fourth){$showdata->fourth=$req->fourth;}else{$showdata->fourth=null;};
        if($req->fifth){$showdata->fifth=$req->fifth;}else{$showdata->fifth=null;};
        if($req->sixth){$showdata->sixth=$req->sixth;}else{$showdata->sixth=null;};
        if($req->seventh){$showdata->seventh=$req->seventh;}else{$showdata->seventh=null;};





        if($req->midresult){
            
            $fileName = time().'.'.$req->midresult->extension();

            $req->midresult->move(public_path('midresult'), $fileName);
            
            
            $showdata->midresult=$fileName;}else{$showdata->midresult=null;};
           
           
            if($req->admit){
            
                $admitname = time().'.'.$req->admit->extension();
    
            $req->admit->move(public_path('admit'), $admitname);
                
                
                $showdata->admit=$admitname;}else{$showdata->admit=null;};
        $showdata->save();

        session()->flash('message', 'Data saved successfully!');

        return redirect('thirdcstmanage');
            }else{

                session()->flash('message', 'Data already have!');

                return redirect('thirdcstmanual');

            }
    }
    

    public function thirdcstmanage()
    {
        $showdata =thirdcstmodel::all();

        $showdatacout = count($showdata);

        return view('employee/lllcst/thirdcstmanage', compact('showdata', 'showdatacout'));  
    }
    public function thirdcstpdf()
    {
      
        return view('/employee/lllcst/thirdcstpdf');
    }
    public function thirdcstfees()
    {
      
        $showdata = fees::where('teqnology', '=', 'thirdcst')->first();
        return view('employee/lllcst/thirdcstfees' ,compact('showdata'));
    }

    public function thirdcstfeesi(Request $input)
    {
        $showdata = fees::where('teqnology', '=', 'thirdcst')->first();
        if(!$showdata==null){
        $showdata->fromfillup = $input->fromfillup;
        $showdata->refart = $input->refart;
        $showdata->centerfees = $input->centerfees;
        $showdata->markshitfees = $input->markshitfees;
        $showdata->save();

        }else{

            $showdata1 = new fees();

            $showdata1->teqnology ="thirdcst";
            $showdata1->fromfillup = $input->fromfillup;
            $showdata1->refart = $input->refart;
            $showdata1->centerfees = $input->centerfees;
            $showdata1->markshitfees = $input->markshitfees;
            $showdata1->save();


        }
        
       
        


      
        return redirect('/thirdcstfees');
    }


    public function thirdcstpdfi(Request $req)
    {
        $data=$req->inputText;
        preg_match_all("/([\d]+)\s*\(([\d\.]+)\)/", $data, $matches);
        $rolls = $matches[1];
        $results = $matches[2];
        preg_match_all("/([\d]+)\s*{([^}]+)\}/", $data, $matches);
        $rolls_set = $matches[1];
        $result_set = $matches[2];
        for ($i = 0; $i < count($rolls); $i++) {
                $thirdcst = new thirdcstmodel();
                    $thirdcst->roll = $rolls[$i];
                    $thirdcst->result = $results[$i];
                    $thirdcst->save();           
                }
        for ($i = 0; $i < count($rolls_set); $i++) {
            $thirdcst = new thirdcstmodel();
            $thirdcst->roll = $rolls_set[$i];
           
            $input = $result_set[$i];

            // Define your categories
            
$first = array(66712,65712,65812,65711,21011,25711,25712,25911,25912,28511,26711);
$second = array(66621,65921,66622,65922,66623,65722,66823,25721,25722,25812,25913,25921,28521,28522,26811);
$third = array(66631,65931,66632,65913,66633,65811,66634,25811,25922,25931,28531,28532,28533,26831);
$fourth = array(66641,66643,66642,66645,66644,65841,66842,25831,28541,28542,28543,28544,26841,29041);
$fifth = array(66651,66653,66654,66652,66656,65851,66655,25841,28551,28552,28553,28554,28555,28556,68546);
$sixth = array(66661,66663,66662,66667,66664,65852,64054,25851,25852,28561,28562,28563,28564,28565,28566);
$seventh = array(66671,66674,66672,66675,65853,66673,66678,25853,28571,28572,28573,28574,28575,28576);



// Define your input numbers
// $input="66641(T), 66642(T), 66842(T)";

$input_number =preg_match_all('/\d{5}/im', $input, $output_array);
$input_numbers=$output_array[0];

// Initialize empty variables for each category
$first_nums = "";
$second_nums = "";
$third_nums = "";
$fourth_nums = "";
$fifth_nums = "";
$sixth_nums = "";
$seventh_nums = "";

// Loop through input numbers and categorize them
foreach ($input_numbers as $num) {
if (in_array($num, $first)) {
$first_nums .= $num . ",";
}
if (in_array($num, $second)) {
$second_nums .= $num . ",";
}
if (in_array($num, $third)) {
$third_nums .= $num . ",";
}
if (in_array($num, $fourth)) {
$fourth_nums .= $num . ",";
}
if (in_array($num, $fifth)) {
$fifth_nums .= $num . ",";
}
if (in_array($num, $sixth)) {
$sixth_nums .= $num . ",";
}
if (in_array($num, $seventh)) {
$seventh_nums .= $num . ",";
}
}

// Remove trailing comma from each variable
$first_nums = rtrim($first_nums, ",");
$second_nums = rtrim($second_nums, ",");
$third_nums = rtrim($third_nums, ",");
$fourth_nums = rtrim($fourth_nums, ",");
$fifth_nums = rtrim($fifth_nums, ",");
$sixth_nums = rtrim($sixth_nums, ",");
$seventh_nums = rtrim($seventh_nums, ",");


   if($first_nums){$thirdcst->first = $first_nums;};
   if($second_nums){$thirdcst->second = $second_nums;};
   if($third_nums){$thirdcst->third = $third_nums;};
   if($fourth_nums){$thirdcst->fourth = $fourth_nums;};
   if($fifth_nums){$thirdcst->fifth = $fifth_nums;};
   if($sixth_nums){$thirdcst->sixth = $sixth_nums;};
   if($seventh_nums){$thirdcst->seventh = $seventh_nums;};



            $thirdcst->save();
        }
        session()->flash('message', 'Data saved successfully!');

        return redirect('thirdcstmanage');
    }

    // First cst employee end


    public function edit($roll)
    {

        $showdata = thirdcstmodel::where('roll', '=', $roll)->first();
      
        return view('employee/lllcst/edit',compact('showdata'));
    }

    public function editthirdcstresult(Request $req,$roll)
    {

        $showdata = thirdcstmodel::where('roll', '=', $roll)->first();


        if($req->roll){$showdata->roll=$req->roll;}else{$showdata->roll=null;};
        if($req->result){$showdata->result=$req->result;}else{$showdata->result=null;};
        if($req->first){$showdata->first=$req->first;}else{$showdata->first=null;};
        if($req->second){$showdata->second=$req->second;}else{$showdata->second=null;};
        if($req->third){$showdata->third=$req->third;}else{$showdata->third=null;};
        if($req->fourth){$showdata->fourth=$req->fourth;}else{$showdata->fourth=null;};
        if($req->fifth){$showdata->fifth=$req->fifth;}else{$showdata->fifth=null;};
        if($req->sixth){$showdata->sixth=$req->sixth;}else{$showdata->sixth=null;};
        if($req->seventh){$showdata->seventh=$req->seventh;}else{$showdata->seventh=null;};
        
        if($req->midresult){
            
            $fileName = time().'.'.$req->midresult->extension();

            $req->midresult->move(public_path('midresult'), $fileName);
            
            
            $showdata->midresult=$fileName;};
           
           
            if($req->admit){
            
                $admitname = time().'.'.$req->admit->extension();
    
            $req->admit->move(public_path('admit'), $admitname);
                
                
                $showdata->admit=$admitname;};
        $showdata->save();
    



        session()->flash('message', 'Data Edit successfull!');
      
        return redirect('thirdcstmanage');
    }


    public function delletthirdcstdata($roll)
    {

        $showdata = thirdcstmodel::where('roll', '=', $roll)->first();
        $showdata->delete();
        session()->flash('message', 'Data Delete successfull!');
      
        return redirect('thirdcstmanage');
    }



    public function downloadmid($file)
    {
        return response()->download(public_path('midresult/'.$file));
    }
    public function downloadadmit($file)
    {
        return response()->download(public_path('admit/'.$file));
    }

}




