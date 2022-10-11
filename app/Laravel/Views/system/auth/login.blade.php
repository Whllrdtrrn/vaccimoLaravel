@extends('system._layouts.auth')

@section('content')
<section class="vh-100">


  
<img id="bg-main"src="{{asset('/assets/img/vaccine.jpg')}}"  alt="Cover Image" style="position:absolute;height: 100%;width: 100%;">


<div class="be-wrapper be-login  " >
  <div class="be-content">
    <div class="main-content container-fluid ">
      <div class="splash-container">
        @include('system._components.notifications')
        <div class="panel panel-default panel-border-color panel-border-color-primary ">
          <div class="panel-heading  ">
                <h1>Login</h1>
          </div>
          <div class="panel-body">
            <form action="" method="POST">
              {!!csrf_field()!!}
              <div class="form-group">
                <input style="font-size: 16px ;" id="username" name="username" type="text" placeholder="Username" autocomplete="off" class="form-control" value="{{old('username')}}">
              </div>
              <div class="form-group">
                <input style="font-size: 16px ;" id="password" name="password" type="password" placeholder="Password" class="form-control">
            
              <div class="form-group login-submit mt-5">
                <button style="font-size: 16px ;" data-dismiss="modal" type="submit" class="btn btn-primary btn-xl ">Sign me in</button>
              </div>
              <div class="col-xs-12 text-center mb-5" style="    font-size: 15px;
                margin-bottom: 20px; ">Don't have an account? <a href="{{route('system.register')}}">Sign up</a></div> 
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</section>

@stop