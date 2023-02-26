<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authcontroller extends Controller
{
    public function employeelogin(Request $req)
    {
      if($req->email==2){
        return redirect('secondcst');}elseif($req->email==3)
        {
          return redirect('thirdcst');

        }elseif($req->email==4)
        {
          return redirect('forthcst');

        }
    }
}
