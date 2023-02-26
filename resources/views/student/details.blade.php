<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Grad School HTML5 Template</title>
    
   
<style>


  .bgb{
    background-color: #1d283d !important;
    height: 70px;
    /* margin-top: 7px; */
    padding-top: 17px;
    border-radius: 13px 16px 0px 0px;
color: white;


  }
  .fromi{

    display: flex;
    -ms-flex-wrap: wrap;
   
    justify-content: center;

  }


  .inputa{

    color: rgb(0, 0, 0);
    width: 312px !important;
    height: 46px !important;
    text-align: center !important;
}
.rang{

  font-size: 34px;
    color: antiquewhite;
    font-family: unset;
}

.tds{
padding: 0px !important;
background-color: whitesmoke !important;

}


  
</style>
  
    <link rel="stylesheet" href="{{asset('indexf/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('indexf/assets/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('indexf/vendor/bootstrap/css/bootstrap.min.css')}}">
  
  </head>

<body>

   
  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="{{'/'}}"><h1>RIIT HELPLINE </a>
    </div>
    
   
  </header>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="{{asset('indexf/assets/images/course-video.mp4')}}" type="video/mp4" />
          
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
            <br><br>
              <div class="bgb">
                Student Roll Number {{$showdata->roll}}
              </div>
              
              <div id="London" class="w3-container city">
                <div class="card text-white bg-white  justify-center" style="max-width: 100%;">
                  <div class="card-header"></div>
                  <div class="card-body">
             
    <table class=" tds table table-bordered">
      
     
      <tr class="tds">
        <th class="tds" width="30%">Result</th>
        <td class="tds" width="2%">:</td>
        <td class="tds">@if ($showdata->result)
          {{$showdata->result}}
          @else
          refard
        @endif
          
        </td>
      </tr>

     @if ($showdata->first)
     
      <tr class="tds">
        <th class="tds" width="30%">first</th>
        <td class="tds" width="2%">:</td>
        <td class="tds">{{$showdata->first}}</td>
      </tr>
      @endif
      @if ($showdata->second)
      <tr class="tds">
        <th class="tds" width="30%">second</th>
        <td class="tds" width="2%">:</td>
        <td class="tds">{{$showdata->second}}</td>
      </tr>
      @endif
      @if ($showdata->third)
      <tr class="tds">
        <th class="tds" width="30%">third</th>
        <td class="tds" width="2%">:</td>
        <td class="tds">{{$showdata->third}}</td>
      </tr>
      @endif
      @if ($showdata->fourth)
      <tr class="tds">
        <th class="tds" width="30%">fourth</th>
        <td class="tds" width="2%">:</td>
        <td class="tds">{{$showdata->fourth}}</td>
      </tr>
      @endif
      @if ($showdata->fifth)
      <tr class="tds">
        <th class="tds" width="30%">fifth</th>
        <td class="tds" width="2%">:</td>
        <td class="tds">{{$showdata->fifth}}</td>
      </tr>
      @endif
      @if ($showdata->sixth)
      <tr class="tds">
        <th class="tds" width="30%">sixth</th>
        <td class="tds" width="2%">:</td>
        <td class="tds">{{$showdata->sixth}}</td>
      </tr>
      @endif
      @if ($showdata->seventh)
      <tr class="tds">
        <th class="tds" width="30%">seventh</th>
        <td class="tds" width="2%">:</td>
        <td class="tds">{{$showdata->seventh}}</td>
      </tr>
      @endif
      <tr class="tds">
        <th class="tds" width="30%">Form Fill-up Fees</th>
        <td class="tds" width="2%">:</td>
        <td class="tds">{{$fromfillupfees}}</td>
      </tr>
      <tr class="tds">
        <th class="tds" width="30%">Refard subject  Fees</th>
        <td class="tds" width="2%">:</td>
        <td class="tds">{{$refarttk}}</td>
      </tr>
      <tr class="tds">
        <th class="tds" width="30%">Markshit Fees For Per Exam </th>
        <td class="tds" width="2%">:</td>
        <td class="tds">{{$markshitprogress}}</td>
      </tr>
      <tr class="tds">
        <th class="tds" width="30%">Center Fees </th>
        <td class="tds" width="2%">:</td>
        <td class="tds">{{$centerfeesa}}</td>
      </tr>
      <tr class="tds">
        <th class="tds" width="30%">Total  Fees</th>
        <td class="tds" width="2%">:</td>
        <td class="tds">{{$duefees}}</td>
      </tr>
      <tr class="tds">
        <th class="tds" width="30%">Applied for the exam</th>
        <td class="tds" width="2%">:</td>
        <td class="tds">@if ($showdata->stutus==1)<p class="text" style="font-size: 2rem; margin-top:5px;">Yes</p> 

          @if ($showdata->midresult)
            
         
          <a href="{{'/downloadmid/'.$showdata->midresult}}" class="btn btn-primary">Download mid-term result</a>@else Mid-term result Not Publist    @endif
          @if ($showdata->admit)
            
         
           <a href="{{'/downloadadmit/'.$showdata->admit}}" class="btn btn-primary">Download admit card</a> @else Admit card Not Publist    @endif       @else<p class="text text-danger" style="font-size: 2rem; margin-top:5px;">No</p>@endif</td>
      </tr>
    </table>




                  </div>
                </div>
              </div>
              
              
              
              <script>
              function openCity(cityName) {
                var i;
                var x = document.getElementsByClassName("city");
                for (i = 0; i < x.length; i++) {
                  x[i].style.display = "none";  
                }
                document.getElementById(cityName).style.display = "block";  
              }
              </script>
             
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->


 
  

  

 


   

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
     
</body>
</html>
