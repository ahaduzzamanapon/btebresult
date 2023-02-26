<?php

namespace App\Http\Controllers;
use App\Models\employeefirstcst;
use App\Models\fees;

use Illuminate\Http\Request;


class admincontroller extends Controller
{
    public function welcome()
    {
      
        return view('/index');
    }
    public function index()
    {
      
        return view('/welcome');
    }
    public function edit($roll)
    {

        $showdata = employeefirstcst::where('roll', '=', $roll)->first();
      
        return view('employee/firstcst/edit',compact('showdata'));
    }
    public function delletdata($roll)
    {

        $showdata = employeefirstcst::where('roll', '=', $roll)->first();
        $showdata->delete();
        session()->flash('message', 'Data Delete successfull!');
      
        return redirect('firstcstmanage');
    }
    public function editresult(Request $req,$roll)
    {

        $showdata = employeefirstcst::where('roll', '=', $roll)->first();


        if($req->roll){$showdata->roll=$req->roll;}else{$showdata->roll=null;};
        if($req->result){$showdata->result=$req->result;}else{$showdata->result=null;};
        if($req->first){$showdata->first=$req->first;}else{$showdata->first=null;};
        if($req->second){$showdata->second=$req->second;}else{$showdata->second=null;};
        if($req->third){$showdata->third=$req->third;}else{$showdata->third=null;};
        if($req->fourth){$showdata->fourth=$req->fourth;}else{$showdata->fourth=null;};
        if($req->fifth){$showdata->fifth=$req->fifth;}else{$showdata->fifth=null;};
        if($req->sixth){$showdata->sixth=$req->sixth;}else{$showdata->sixth=null;};
        if($req->seventh){$showdata->seventh=$req->seventh;}else{$showdata->seventh=null;};
        $showdata->save();
    



        session()->flash('message', 'Data Edit successfull!');
      
        return redirect('firstcstmanage');
    }




    // First cst employee start
    public function employeefirstcst()
    {
      
        return view('employee/firstcst/employeefirstcst');
    }
    public function firstcstfees()
    {
        $showdata = fees::where('teqnology', '=', 'firstcst')->first();
        return view('employee/firstcst/firstcstfees' ,compact('showdata'));
    }
    public function firstcstmanage()
    {   $showdata =employeefirstcst::all();

        $showdatacout = count($showdata);

        return view('employee/firstcst/firstcstmanage', compact('showdata', 'showdatacout'));     
    }
    public function firstcstpdf()
    {
      
        return view('employee/firstcst/firstcstpdf');
    }

    public function fees(Request $input)
    {
        $showdata = fees::where('teqnology', '=', 'firstcst')->first();
        $showdata->fromfillup = $input->fromfillup;
        $showdata->refart = $input->refart;
        $showdata->centerfees = $input->centerfees;
        $showdata->markshitfees = $input->markshitfees;
       

        
        $showdata->save();
       
        


      
        return redirect('/firstcstfees');
    }
    public function firstcstpdfi(Request $req)
    {
        $data=$req->inputText;
        preg_match_all("/([\d]+)\s*\(([\d\.]+)\)/", $data, $matches);
        $rolls = $matches[1];
        $results = $matches[2];
        preg_match_all("/([\d]+)\s*{([^}]+)\}/", $data, $matches);
        $rolls_set = $matches[1];
        $result_set = $matches[2];
        for ($i = 0; $i < count($rolls); $i++) {
                $employeefirstcst = new employeefirstcst();
                    $employeefirstcst->roll = $rolls[$i];
                    $employeefirstcst->result = $results[$i];
                    $employeefirstcst->save();           
                }
        for ($i = 0; $i < count($rolls_set); $i++) {
            $employeefirstcst = new employeefirstcst();
            $employeefirstcst->roll = $rolls_set[$i];
           
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


   if($first_nums){$employeefirstcst->first = $first_nums;};
   if($second_nums){$employeefirstcst->second = $second_nums;};
   if($third_nums){$employeefirstcst->third = $third_nums;};
   if($fourth_nums){$employeefirstcst->fourth = $fourth_nums;};
   if($fifth_nums){$employeefirstcst->fifth = $fifth_nums;};
   if($sixth_nums){$employeefirstcst->sixth = $sixth_nums;};
   if($seventh_nums){$employeefirstcst->seventh = $seventh_nums;};



            $employeefirstcst->save();
        }
        session()->flash('message', 'Data saved successfully!');

        return redirect('firstcstmanage');
    }

    // First cst employee end
}

