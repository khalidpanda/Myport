@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                @if($n)
                <div class="card-header text-center bg-dark text-white">Nice to meet with you  <span style="font-size: 14px;">{{strtoupper($n)}}</span> !</div>
  @endif
                <div class="card-body my-btn">
                 <div class="col-md-4">
                    
      <img  style="width: 285px;" class="img-rounded" src="{{asset('img/pro.jpg')}}">
      <img src="">
   
  </div>
  <div class="col-md-8">
    <div class="panel panel-default">
  <div class="panel-body text-center ">
      
<h3>Khalid Rahman</h3>
<p>Web Developer</p>
<p>fube.khalid@gmail.com</p>
<p>+60172451604</p>
<a class="btn btn-success" href="{{url('downlaod')}}"><i class="fa fa-download"></i> Download Resume</a>




  </div>
</div>
        
  </div>

  <div class="col-md-4">
     <div class="panel panel-default">
  <div class="panel-body text-center">
    <div class="card" style="width: 100%;">
  <img class="card-img-top" src="{{asset('img/pro.jpg')}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
  </div>
</div>

      
  </div>

  <div class="col-md-4">
     <div class="panel panel-default">
  <div class="panel-body text-center">
    <div class="card" style="width: 100%;">
  <img class="card-img-top" src="{{asset('img/pro.jpg')}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="/resources/views/HOOHAA/movie-backend-task" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
  </div>
</div>

      
  </div>

  <div class="col-md-4">
     <div class="panel panel-default">
  <div class="panel-body text-center">
    <div class="card" style="width: 100%;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
  </div>
</div>

      
  </div>

  <div class="col-md-4">
     <div class="panel panel-default">
  <div class="panel-body text-center">
    <div class="card" style="width: 100%;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
  </div>
</div>

      
  </div>

  <div class="col-md-4">
     <div class="panel panel-default">
  <div class="panel-body text-center">
    <div class="card" style="width: 100%;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
  </div>
</div>

      
  </div>

  <div class="col-md-4">
     <div class="panel panel-default">
  <div class="panel-body text-center">
    <div class="card" style="width: 100%;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
  </div>
</div>

      
  </div>

  <div class="col-md-4">
     <div class="panel panel-default">
  <div class="panel-body text-center">
    <div class="card" style="width: 100%;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
  </div>
</div>

      
  </div>
  <div class="col-md-4">
     <div class="panel panel-default">
  <div class="panel-body text-center">
    <div class="card" style="width: 100%;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
  </div>
</div>

      
  </div>
</div>
                     
                 </div>

                    
                   <!-- <div style="margin-top: 100%;"></div>-->
                </div>
              
            </div>
        </div>
    </div>
</div>
@endsection
