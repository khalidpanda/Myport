<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Khalid Rahman</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('/css/font-awesome/css/font-awesome.min.css')}}">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-image: url('/img/bg3.png');

                color: #fff;
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
                background-color: #4a1679;
                color: white;
                font-weight: 600;
                font-size: 14px;
                margin-top: 5%;
            }
            .gap2x {
                margin-top: 20%;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
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
            @endif
<div class="container">
    <div class="row">
        <div class="col">
            
     
            <div class="content">
                <div class="title m-b-md">
                    <div class="form-group">
                        <form action="name" method="get">
                             {{ csrf_field() }}
                        This is khalid here<br>
  <label for="usr"> And You ?</label>
  <input type="text" class="form-control " id="usr" name="N" placeholder="Type Your Name Here">
  <button  class="btn btn btn-lets btn-lg text-dark " style="margin-bottom: 5%;" >Lets go !</button>
</form>
 
</div>

                </div>
                <p>Don't Worry I am not storing your name on Database</p>

            </div>

               </div>
        
    </div>
    
</div>
        </div>
    </body>
</html>
