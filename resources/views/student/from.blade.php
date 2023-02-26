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
    background-color: #172238 !important;
    height: 70px;
    /* margin-top: 7px; */
    padding-top: 17px;
    border-radius: 13px 16px 0px 0px;



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
              <p class="rang">Rangpur Ideal Institute of Technology</p>
              <div class="bgb">
                <button class="btn btn-primary mx-2" onclick="openCity('London')">Student</button>
                
              </div>
              
              <div id="London" class="w3-container city">
                <div class="card text-white bg-secondary  justify-center" style="max-width: 100%;">
                  <div class="card-header">Student</div>
                  <div class="card-body">
                    @if(Session::has('message'))
    <p class="alert alert-danger">{{ Session('message') }}</p>
    @endif
                    <form action="{{ url('/details') }}" method="post">
                      @csrf
                      <div class="fromi mb-2">
                        <div class="form-holder">
                          <label for="password"   style="color: white;"> Roll </label>
                            <input type="text" class="form-control inputa" id="roll" name="roll" placeholder="Roll...." required>
                            
                          </label>
                        </div><br>
                       
                        
                      </div>
                      <button class="btn btn-primary" type="submit">Enter</button>
                 



                    </form>




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
