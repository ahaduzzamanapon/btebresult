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

                @include('employee/llcst/sidebar-menu')
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


          
  <form action="{{ url('/secondcstpdfi') }}" method="post">
    @csrf

 <div class="form-group">
 <label for="comment">PDF COPY</label>
 <textarea name="inputText" id="inputText" class="form-control" rows="5" id="comment"></textarea><br>
 <input class="btn btn-primary" type="submit" name="SubmitButton"/>
 </div>
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
