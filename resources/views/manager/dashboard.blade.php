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

                @include('manager/sidebar-menu')
                {{--  menu end  --}}
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>

        {{--  sssssssssss  --}}
        <div id="main">

            <form action="{{ url('/managerdashboards') }}" method="post">
                @csrf
            
            <div class="form-group">
            <label for="roll">Roll</label><br>
            <input type="text" value="@if(isset($showdata)){{$showdata->roll}}@endif" name="roll" id="roll">
            </div>
            <input class="btn btn-primary" type="submit" name="SubmitButton"/>
            </form> 
  
            <div>
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif

                @if(isset($showdata))


                
                    
               

                
<div class="table-responsive">
   
    <table class="table table-hover table-bordered mb-0 ">
        <thead>
            <tr class="bg-info">
                <th>Roll</th>
                <th>teqnology</th>
                
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
                <th>action</th>

            </tr>
        </thead>

        <tbody>
           
            
            <tr>
                <td >{{$showdata->roll}}</td>
                <td >{{$fees->teqnology}}</td>
                <td>
                    @if ($showdata->first)
                {{$showdata->first}}
                @else
                    {{"-"}}
                @endif
                </td>
               
                <td>
                    @if ($showdata->second)
                    {{$showdata->second}}
                    @else
                    {{"-"}}
                    @endif
                </td>
                <td>
                    @if ($showdata->third)
                    {{$showdata->third}}
                  
                    @else
                    {{"-"}}
                    @endif
                </td>
                <td>
                    @if ($showdata->fourth)
                    {{$showdata->fourth}}
                    @else
                    {{"-"}}
                    @endif
                </td>
                <td>
                    @if ($showdata->fifth)
                    {{$showdata->fifth}}
                    @else
                    {{"-"}}
                    @endif
                </td>
                <td>
                    @if ($showdata->sixth)
                    {{$showdata->sixth}}
                    @else
                    {{"-"}}
                    @endif
                </td>
                
                <td>
                    @if ($showdata->seventh)
                    {{$showdata->seventh}}
                    @else
                    {{"-"}}
                   
                    @endif 
                </td>
                <td>
                    @if ($showdata->result)
                    {{$showdata->result}}
                    @else
                    {{"refard"}}
                   
                    @endif 
                
                </td>
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
                    @if ($showdata->stutus==1)
                    {{'Paid'}}
                    @else
                    @if(isset($duefees))
                    {{$duefees}} 
                    @endif
                    
                   
                    @endif
                   


                </td>
                <td>
                    @if ($showdata->stutus==1)
                    <p>Paid</p>
                    @else
                    <a href="{{ '/paid/'.$showdata->roll }}" class="btn btn-success my-1">Paid</a> 
                    @endif

                    
                    


                </td>

            </tr>

            
            


        </tbody>
    </table>



            </div>
            @endif

        </div>


        
    </div>
    <script src="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('assets/vendors/apexcharts/apexcharts.js')}}"></script>
    <script src="{{asset('assets/js/pages/dashboard.js')}}"></script>

    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>
