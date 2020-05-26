<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Khalid Rahman</title>

        <!-- Fonts -->
        <link href="{{url('https://fonts.googleapis.com/css?family=Nunito:200,600')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('/css/font-awesome-4.7.0/css/font-awesome.min.css')}}">

  <link rel="stylesheet" href="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css')}}">
  <script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}"></script>
  <script src="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js')}}"></script>

        <!-- Styles -->
        <style>
            html, body {
               /* background-image: url('/img/bg3.png'); */

               background-color: #fff;

                color: black;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;

            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                color: white;
                border:none;
                border-radius: 10px;
                  background: rgba(0, 0, 0, 0.85);
                  height: 60%;
                  margin: 10%;
                  padding: 1%;
                  
            }

            .title {
                font-size: 60px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .btn-lets {
                 background: rgba(0,128,103,1);
     color: #fff;
                color: white;
                font-weight: 600;
                font-size: 14px;
                margin-top: 5%;
            }
            .gap2x {
                margin-top: 20%;
            }


            .glow {

  color: black;
  text-align: center;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 30px black, 0 0 70px black, 0 0 50px black, 0 0 40px black, 0 0 50px black, 0 0 60px black, 0 0 90px black;
  }
  to {
    text-shadow: 0 0 60px black, 0 0 80px black, 0 0 60px black, 0 0 50px black, 0 0 60px black, 0 0 70px #black, 0 0 100px black;
  }
}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
         <!--   @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth 
                </div>
            @endif  -->
<div class="container">
    <div class="row">
        <div class="col text-center">
            <span >

                 <audio id="myAudio">
 
  <source src="{{asset('img/bell3.mp3')}}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>

<strong id="demo"></strong>
<a class="btn btn-dark btn-lg glow" onclick="playAudio()" ><i class="fa fa-bell fa-lg"  aria-hidden="true"></i></a>

                
 </span>
 <img src="{{asset('img/door7.png')}}" style="width: 220px;">

     <dialog id="myDialog" style="background-image: url('img/room3.png'); background-repeat: no-repeat;">
          <div class="content text-white">
                <div class="title m-b-md">
                   <div class="form-group">
                        <form action="name" method="get">
                             {{ csrf_field() }}
                        Who's there,<br>
  <label for="usr"> Your Name please ?</label>
  <input type="text" class="form-control " id="usr" name="N" placeholder="Type Your Name Here" required>
  <button  class="btn btn btn-lets btn-lg text-dark " style="margin-bottom: 5%;" >Get In !</button>


</form>
 <a class="btn btn-danger" href="{{url('/')}}">Sorry Mistakenly pressed !</a>
</div>

 </div>
 <p>Don't Worry I am not storing your name on Database</p>

            </div>

               </div></dialog>
        
    </div>

<div class="col">


   
   
</div>

    
</div>
</div>
        </div>


        <script>
var x = document.getElementById("myAudio"); 

function playAudio() { 
  x.play(); 
  document.getElementById("demo").innerHTML = "Hold on ! Coming..."; 
document.getElementById("myDialog").showModal();
 

}



</script>
    </body>
</html>
