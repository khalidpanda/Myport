@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
           <div>
             <img src="{{asset('img/man.png')}}" style="width: 80%;">
           </div>
          




                    
                   <!-- <div style="margin-top: 100%;"></div>-->
                </div>

                 @if($n)
           <div class="col">
            <div style="margin-top: 10%; font-size: 3vw; margin-left: -18%" >
            <p>Hello <span class="text-col">{{strtoupper($n)}}</span><br>
             I was expecting you ! </p>
           
            
             </div>

             <div style="margin-left: -20%;">
               <hr>
               <p>Download my resume or check me out on social-media</p>
              <a class="btn btn m-color" href="{{url('downlaod')}}"><i class="fa fa-download"></i> Resume</a>
            <a href=""><i class="fa fa-facebook fa-lg text-col"></i></a>
            <a href=""><i class="fa fa-github fa-lg text-col"></i></a>
            <a href=""><i class="fa fa-linkedin fa-lg text-col"></i></a>
             <!--<a href=""><i class="fa fa-whatsapp fa-lg text-col"></i></a>-->
            <hr>
            <div style="justify-content: flex; font-style:none;">
            <p>You are here beccause you want to see</p>
            <a class="btn btn text-col" data-toggle="modal" data-target="#exampleModal2" style="font-size: 2vw;" href="{{url('https://www.php.net/')}}"><i class="fa fa-briefcase fa-lg text-col"></i><br>Portfolio</a>
            
<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bb">
        <h5 class="modal-title text-white" id="exampleModalLabel">Things i have build</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
<!--body1 starts here-->


  <div class="row">
    <div class="col">
      <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Function title</h5>
    <p class="card-text">Under development, coming soon...</p>
    <a href="#" class="btn btn-primary">Visit</a>
  </div>
</div>

      
    </div>
    <div class="col">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Function title</h5>
    <p class="card-text">Under development, coming soon...</p>
    <a href="#" class="btn btn-primary">Visit</a>
  </div>
</div>
      
    </div><br>
     <div class="w-100"></div>
     <div class="col">
      <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Function title</h5>
    <p class="card-text">Under development, coming soon...</p>
    <a href="#" class="btn btn-primary">Visit</a>
  </div>
</div>

      
    </div>
    <div class="col">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Function title</h5>
    <p class="card-text">Under development, coming soon...</p>
    <a href="#" class="btn btn-primary">Visit</a>
  </div>
</div>

      
    </div><br>
     <div class="w-100"></div>
     <div class="col">
      <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Function title</h5>
    <p class="card-text">Under development, coming soon...</p>
    <a href="#" class="btn btn-primary">Visit</a>
  </div>
</div>

      
    </div>
    <div class="col">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Function title</h5>
    <p class="card-text">Under development, coming soon...</p>
    <a href="#" class="btn btn-primary">Visit</a>
  </div>
</div>

      
    </div>
    
  </div>
  

























<!--body 2 ends here-->



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
       <!-- <button type="button" class="btn btn m-color">Save changes</button>-->
      </div>
    </div>
  </div>
</div>
            <a class="btn btn text-col"data-toggle="modal" data-target="#exampleModal3" style="font-size: 2vw;" href="{{url('https://laravel.com/')}}"><i class="fa fa-user fa-lg text-col"></i><br>About Me</a>


<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
            <a class="btn btn text-col" data-toggle="modal" data-target="#exampleModal4" style="font-size: 2vw;" href="{{url('https://www.javascript.com/')}}"><i class="fa fa-cog fa-lg text-col"></i><br>Technologies</a>


<!-- Modal -->
<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
              
                            </div>
          </div>
           </div>
            @endif
              
            </div>
        </div>
    </div>
</div>
@endsection
