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

                @include('employee/firstcst/sidebar-menu')
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


       




<div class="table-responsive">
    @if(Session::has('message'))
    <p class="alert alert-info">{{ Session('message') }}</p>
    @endif
    <table class="table table-hover table-bordered mb-0" style="border-width:4px">
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
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($showdatacout==0)
            <tr>
            <p class="bg-danger">There is no data to show</p>
            </tr>
            @else
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
                <td>
                    <a href="{{ '/edit/'.$data->roll }}" class="btn btn-success my-1">Edit</a>
                    <a href="{{ '/delletdata/'.$data->roll }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger my-1">Delete</a>


                </td>

            </tr>

            @endforeach
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
