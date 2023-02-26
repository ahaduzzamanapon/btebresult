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

                @include('admin/sidebar-menu')
                {{--  menu end  --}}
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>

        {{--  sssssssssss  --}}
        <div id="main">


            <div class="table-responsive">
                @if(Session::has('message'))
                <p class="alert alert-info">{{ Session('message') }}</p>
                @endif
                <table class="table table-hover table-bordered mb-0" style="border-width:4px">
                    <thead>
                        <tr class="bg-info">

                            <th>Roll</th>
                            
                            
                            <th>Result</th>
                            <th>Result Type</th>
                            <th>year</th>

                            
                        </tr>
                    </thead>
                    <tbody>
                        @if($showdatacout==0)
                        <tr>
                        <p class="text text-danger">There is no data to show</p>
                        </tr>
                        @else
                    <p class="text text-info"> {{$showdatacout}} Result Found</p>

                        @foreach($showdata as $key=>$data )
                        <tr>
                            <td scope="row">{{$data->roll}}</td>
                            <td scope="row">{{$data->result}}</td>
                            <td scope="row">{{$data->type}}</td>
                            <td scope="row">{{$data->year}}</td>
                            
                        </tr>
            
                        @endforeach
                        @endif
            
            
                    </tbody>
                </table>
                {{ $showdata->links() }}
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
