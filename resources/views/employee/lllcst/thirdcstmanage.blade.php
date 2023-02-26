<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>   @php

        $sitesettings= DB::table('settings')->select('sitename','titelname')->first();

        @endphp
          {{$sitesettings->titelname}}</title>

    <link href="{{url('https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendors/iconly/bold.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.svg" type="image/x-icon')}}">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="{{'/admin'}}"><h2>{{$sitesettings->sitename}}</h2></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>

                @include('employee/lllcst/sidebar-menu')
                {{--  menu end  --}}
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>

        {{--  sssssssssss  --}}
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>


       




            <button class="btn btn-primary" onclick="printTable()">Print Table</button>

            <script>
            function printTable() {
  var tableactions = document.getElementsByClassName("actiont");
  while (tableactions[0]) {
    tableactions[0].remove();
  }
  var printableTable = document.getElementById("printableTable");
  var header = '<h2 style="text-align: center">Rangpur Ideal Institute of Technology - RIIT</h2><br><h4 style="text-align: center">Result Of 2nd CST</h4>';
  printableTable.style.display = "block";
  printableTable.style.width = "21cm";
  printableTable.style.height = "29.7cm";
  printableTable.style.pageBreakAfter = "always";
  printableTable.style.webkitPrintColorAdjust = "exact";
  printableTable.style.boxShadow = "none";
  printableTable.style.backgroundColor = "#FFFFFF";
  printableTable.style.margin = 0;
  printableTable.style.padding = 0;
  
  var oldContent = document.body.innerHTML;
  document.body.innerHTML = header + printableTable.outerHTML;
  window.print();
  document.body.innerHTML = oldContent;
}



            </script>
            
            
            <div class="table-responsive" style="width: fit-content;" >
                @if(Session::has('message'))
                <p class="alert alert-info">{{ Session('message') }}</p>
                @endif
                <h2 style="text-align: center">Rangpur Ideal Institute of Technology - RIIT</h2><br>
                <h4 style="text-align: center">Result Of 2nd CST</h4>
                <table class="table table-hover table-bordered mb-0" id="printableTable" style="border-width:4px">
                    <thead>
            <tr class="bg-info">
                <th>Roll</th>
                
                <th>first</th>
                <th>second</th>
                <th>third</th>
                <th>fourth</th>
                <th>fifth</th>
                <th>sixth</th>
                <th>seventh</th>
                <th>Result</th>
                <th>Form Fill-up Fees</th>
                <th>Refard subject  Fees</th>
                <th>Markshit Fees For Per Exam</th>
                <th>Center Fees</th>
               

                <th>Total Due Fees</th>
                <th class="actiont">Mid-term Result</th>
                <th class="actiont">Admit Card</th>
                <th class="actiont">Action</th>
            </tr>
        </thead>
        <tbody>
            @if($showdatacout==0)
            <tr>
            <p class="bg-danger">There is no data to show</p>
            </tr>
            @else
            @php
                $totaltk=0;
            @endphp
            @foreach($showdata as $key=>$data )
            <tr>
                <td scope="row">{{$data->roll}}</td>
                <td>
                    @if ( $data->first)
                    {{ $data->first }}
                    @else  {{"-"}}
                    @endif
                </td>
                <td>
                    @if ( $data->second)
                    {{ $data->second }}
                    @else  {{"-"}}
                    @endif
                </td>
                <td>
                    @if ( $data->third)
                    {{ $data->third }}
                    @else  {{"-"}}
                    @endif
                </td>
                <td>
                    @if ( $data->fourth)
                    {{ $data->fourth }}
                    @else  {{"-"}}
                    @endif
                </td>
                <td>
                    @if ( $data->fifth)
                    {{ $data->fifth }}
                    @else  {{"-"}}
                    @endif
                </td>
                <td>
                    @if ( $data->sixth)
                    {{ $data->sixth }}
                    @else  {{"-"}}
                    @endif
                </td>
                <td>
                    @if ( $data->seventh)
                    {{ $data->seventh }}
                    @else  {{"-"}}
                    @endif


                 
                </td>

               


                <td>
                    @if ( $data->result)
                        
                   
                    
                    
                    {{ $data->result }}
                    @else 
                    @php 
                    
                    
                    
                    
                    preg_match_all('/\d{5}/im', $data->first, $firstd);
                   preg_match_all('/\d{5}/im', $data->second, $secondd);
                     preg_match_all('/\d{5}/im', $data->third, $thirdd);
                    preg_match_all('/\d{5}/im', $data->fourth, $fourthd);
                    preg_match_all('/\d{5}/im', $data->fifth, $fifthd);
                    preg_match_all('/\d{5}/im', $data->sixth, $sixthd);
                     preg_match_all('/\d{5}/im', $data->seventh, $seventhd);

                   
                   
                    
                    $progress=0;
                    if ($firstd) {$progress += sizeof($firstd[0]);}
                    if ($secondd) {$progress += sizeof($secondd[0]);}
                    if ($thirdd) {$progress += sizeof($thirdd[0]);}
                    if ($fourthd) {$progress += sizeof($fourthd[0]);}
                    if ($fifthd) {$progress += sizeof($fifthd[0]);}
                    if ($sixthd) {$progress += sizeof($sixthd[0]);}
                    if ($seventhd) {$progress += sizeof($seventhd[0]);}

                    
                   
                  



                    
                    @endphp
                    <p>Refard: {{ $progress }}</p>
                    
                    
                    
                    
                    
                       




                 
                    @endif
                
                
                
                </td>
                @php
                $fees= DB::table('fees')->where('teqnology', '=', 'thirdcst')->first();
if(!$data->result){
                $markshitprogress=$fees->markshitfees;
          if ($firstd[0]) {$markshitprogress +=$fees->markshitfees;}
          if ($thirdd[0]) {$markshitprogress += $fees->markshitfees;}
          if ($secondd[0]) {$markshitprogress += $fees->markshitfees;}
          if ($fourthd[0]) {$markshitprogress += $fees->markshitfees;}
          if ($sixthd[0]) {$markshitprogress += $fees->markshitfees;}
          if ($fifthd[0]) {$markshitprogress += $fees->markshitfees;}
          if ($seventhd[0]) {$markshitprogress += $fees->markshitfees;}

          $refarttk=($progress*$fees->refart);
}else {
    $markshitprogress=$fees->markshitfees;
    $refarttk=0;
}
 
 
          
         
          $duefees=$refarttk+$fees->fromfillup+$fees->centerfees+$markshitprogress;
          $fromfillupfees=$fees->fromfillup;
          $centerfeesa=$fees->centerfees;
           $totaltk=$totaltk+$duefees;

                
            
            @endphp

<td>
    @if ($fromfillupfees)
    {{$fromfillupfees}}
    @else
    {{"-"}}
   
    @endif 
</td>
<td>
    @if ($refarttk)
    {{$refarttk}}
    @else
    {{"-"}}
   
    @endif 
</td>
<td>
    @if ($markshitprogress)
    {{$markshitprogress}}
    @else
    {{"-"}}
   
    @endif 
</td>
<td>
    @if ($centerfeesa)
    {{$centerfeesa}}
    @else
    {{"-"}}
   
    @endif 
</td>

<td>
    @if ($data->stutus==1)
    {{'Paid '.$duefees}}
    @else
    @if(isset($duefees))
    {{$duefees}} 
    @endif
    
   
    @endif
   


</td>

<td class="actiont">@if ($data->midresult)
    {{'Uploaded'}}
    @else
    {{'not uploaded'}}

    @endif</td>
<td class="actiont">@if ($data->admit)
    {{'Uploaded'}}
    @else
    {{'not uploaded'}}

    @endif</td>








                
                <td class="actiont">
                    <a href="{{ '/editthirdcst/'.$data->roll }}" class="btn btn-success my-1">Edit</a>
                    <a href="{{ '/delletthirdcstdata/'.$data->roll }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger my-1">Delete</a>


                </td>

            </tr>

            @endforeach
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>Total dew fees</td>
                <td>{{$totaltk}}</td>
            </tr>
            @endif


        </tbody>
    </table>
    {{-- {{ $showdata->links() }} --}}
</div>


          
  

        </div>
    </div>
    <script src="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('assets/vendors/apexcharts/apexcharts.js')}}"></script>
    <script src="{{asset('assets/js/pages/dashboard.js')}}"></script>

    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>
