<?php

namespace App\Http\Controllers;
use App\Models\secondcstmodel;
use App\Models\fees;


use Illuminate\Http\Request;

class secondcst extends Controller
{
    public function secondcstd()
    {
      
        return view('/employee/llcst/secondcst');
    }
    public function secondcstmanual()
    {
      
        return view('/employee/llcst/secondcstmanual');
    }
    public function secondcstresultmanual(Request $req)
    {

        $data = secondcstmodel::where('roll', '=', $req->roll)->first();


      if(!$data){






        $showdata = new secondcstmodel();


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

        return redirect('secondcstmanage');
            }else{

                session()->flash('message', 'Data already have!');

                return redirect('secondcstmanual');

            }
    }
    

    public function secondcstmanage()
    {
        $showdata =secondcstmodel::all();

        $showdatacout = count($showdata);

        return view('employee/llcst/secondcstmanage', compact('showdata', 'showdatacout'));  
    }
    public function secondcstpdf()
    {
      
        return view('/employee/llcst/secondcstpdf');
    }
    public function secondcstfees()
    {
      
        $showdata = fees::where('teqnology', '=', 'secondcst')->first();
        return view('employee/llcst/secondcstfees' ,compact('showdata'));
    }

    public function secondcstfeesi(Request $input)
    {
        $showdata = fees::where('teqnology', '=', 'secondcst')->first();
        if(!$showdata==null){
        $showdata->fromfillup = $input->fromfillup;
        $showdata->refart = $input->refart;
        $showdata->centerfees = $input->centerfees;
        $showdata->markshitfees = $input->markshitfees;
        $showdata->save();

        }else{

            $showdata1 = new fees();

            $showdata1->teqnology ="secondcst";
            $showdata1->fromfillup = $input->fromfillup;
            $showdata1->refart = $input->refart;
            $showdata1->centerfees = $input->centerfees;
            $showdata1->markshitfees = $input->markshitfees;
            $showdata1->save();


        }
        
       
        


      
        return redirect('/secondcstfees');
    }


    public function secondcstpdfi(Request $req)
    {
        $data=$req->inputText;
        preg_match_all("/([\d]+)\s*\(([\d\.]+)\)/", $data, $matches);
        $rolls = $matches[1];
        $results = $matches[2];
        preg_match_all("/([\d]+)\s*{([^}]+)\}/", $data, $matches);
        $rolls_set = $matches[1];
        $result_set = $matches[2];
        for ($i = 0; $i < count($rolls); $i++) {
                $secondcst = new secondcstmodel();
                    $secondcst->roll = $rolls[$i];
                    $secondcst->result = $results[$i];
                    $secondcst->save();           
                }
        for ($i = 0; $i < count($rolls_set); $i++) {
            $secondcst = new secondcstmodel();
            $secondcst->roll = $rolls_set[$i];
           
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


   if($first_nums){$secondcst->first = $first_nums;};
   if($second_nums){$secondcst->second = $second_nums;};
   if($third_nums){$secondcst->third = $third_nums;};
   if($fourth_nums){$secondcst->fourth = $fourth_nums;};
   if($fifth_nums){$secondcst->fifth = $fifth_nums;};
   if($sixth_nums){$secondcst->sixth = $sixth_nums;};
   if($seventh_nums){$secondcst->seventh = $seventh_nums;};



            $secondcst->save();
        }
        session()->flash('message', 'Data saved successfully!');

        return redirect('secondcstmanage');
    }

    // First cst employee end


    public function edit($roll)
    {

        $showdata = secondcstmodel::where('roll', '=', $roll)->first();
      
        return view('employee/llcst/edit',compact('showdata'));
    }

    public function editsecondcstresult(Request $req,$roll)
    {

        $showdata = secondcstmodel::where('roll', '=', $roll)->first();


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
      
        return redirect('secondcstmanage');
    }


    public function delletsecondcstdata($roll)
    {

        $showdata = secondcstmodel::where('roll', '=', $roll)->first();
        $showdata->delete();
        session()->flash('message', 'Data Delete successfull!');
      
        return redirect('secondcstmanage');
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




