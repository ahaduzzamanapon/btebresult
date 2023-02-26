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


            @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif


          
  <form action="{{ url('/editresult/'.$showdata->roll) }}" method="post">
    @csrf

<div class="form-group">
<label for="comment">Roll</label><br>
<input type="text" name="roll" value="@if($showdata->roll){{$showdata->roll}}@endif" id=""><br>

</div>

    <div class="form-group">
        <label for="comment">Result</label><br>
        <input type="text" name="result" value="@if($showdata->result){{$showdata->result}}@endif" id=""><br>
        
        </div>
        <div class="form-group">
            <label for="comment">Refard on first</label><br>
            <input type="text" name="first" value="@if($showdata->first){{$showdata->first}}@endif" id=""><br>
            
            </div>
            <div class="form-group">
                <label for="comment">Refard on second</label><br>
                <input type="text" name="second" value="@if($showdata->second){{$showdata->second}}@endif" id=""><br>
                
                </div>
                <div class="form-group">
                    <label for="comment">Refard on third</label><br>
                    <input type="text" name="third" value="@if($showdata->third){{$showdata->third}}@endif" id=""><br>
                    
                    </div>
                    <div class="form-group">
                        <label for="comment">Refard on fourth</label><br>
                        <input type="text" name="fourth" value="@if($showdata->fourth){{$showdata->fourth}}@endif" id=""><br>
                        
                        </div>
                        <div class="form-group">
                            <label for="comment">Refard on fifth</label><br>
                            <input type="text" name="fifth" value="@if($showdata->fifth){{$showdata->fifth}}@endif" id=""><br>
                            
                            </div>
                            <div class="form-group">
                                <label for="comment">Refard on sixth</label><br>
                                <input type="text" name="sixth" value="@if($showdata->sixth){{$showdata->sixth}}@endif" id=""><br>
                                
                                </div>
                                <div class="form-group">
                                    <label for="comment">Refard on seventh</label><br>
                                    <input type="text" name="seventh" value="@if($showdata->seventh){{$showdata->seventh}}@endif" id=""><br>
                                    
                                    </div>
                                   
<input class="btn btn-primary" type="submit" name="SubmitButton"/>
</form> 

        </div>
    </div>
    <script src="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('assets/vendors/apexcharts/apexcharts.js')}}"></script>
    <script src="{{asset('assets/js/pages/dashboard.js')}}"></script>

    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>
