<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\allresultmodel;

class mainadmin extends Controller
{
    public function allresult()
    {
      

        return view('admin/allresult');
    }
    public function admin()
    {
      

        return view('admin/index');
    }
    public function allresultmanage()
    {
      
        $showdata=allresultmodel::paginate(50);
        $data=allresultmodel::all();

        $showdatacout = count($data);
  
        return view('/admin/allresultmanage', compact('showdata', 'showdatacout'));
        
    }


    public function allresultpdf(Request $req)
    {



        $data=$req->inputText;
        preg_match_all("/([\d]+)\s*\(([\d\.]+)\)/", $data, $matches);
        $rolls = $matches[1];
        $results = $matches[2];
        preg_match_all("/([\d]+)\s*{([^}]+)\}/", $data, $matches);
        $rolls_set = $matches[1];
        $result_set = $matches[2];
        for ($i = 0; $i < count($rolls); $i++) {
                $allresultmodel = new allresultmodel();
                    $allresultmodel->roll = $rolls[$i];

                    $allresultmodel->year = $req->year;

                    $allresultmodel->result = $results[$i];
                    $allresultmodel->type = "passed";
                    $allresultmodel->save();           
                }
        for ($i = 0; $i < count($rolls_set); $i++) {
            $allresultmodel = new allresultmodel();
            $allresultmodel->roll = $rolls_set[$i];
            $allresultmodel->year = $req->year;

            

            preg_match_all('/\d{5}/im', $result_set[$i], $firstd);

$sub=sizeof($firstd[0]);

$string = implode(", ", $firstd[0]);



$allresultmodel->result = $string ;


            $allresultmodel->type = "Refard $sub Subject";

            $allresultmodel->save();
        }
        session()->flash('message', 'Data saved successfully!');

        return redirect('allresultmanage');
    }
}
