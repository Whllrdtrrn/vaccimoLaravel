@extends('system._layouts.auth')

@section('content')

<img id="bg-main"src="{{asset('/assets/img/vaccine.jpg')}}"  alt="Cover Image" style="position:absolute;height: 100%;width: 100%;">

<div class="be-wrapper be-login ">
  <div class="be-content">
    <div class="main-content container-fluid">
      <div class="splash-container">
        @include('system._components.notifications')
        <div class="panel panel-default panel-border-color panel-border-color-primary  "style="padding-bottom: 35px;">
          <div class="panel-heading">
            <h1>Create Account</h1>
         </div>
          <div class="panel-body">
            <form action="" method="POST">
              {!!csrf_field()!!}
          

              <div class="form-group {{$errors->first('username') ? 'has-error' : NULL}}">
                <input style="font-size: 16px ;" id="username" name="username" type="text" placeholder="Username" autocomplete="off" class="form-control" value="{{old('username')}}">
                @if($errors->first('username'))
                <span class="help-block">{{$errors->first('username')}}</span>
              @endif
              </div> 
            
              <div class="form-group {{$errors->first('password') ? 'has-error' : NULL}}">
                <input style="font-size: 16px ;" id="password" name="password" type="password" placeholder="Password" class="form-control">
                @if($errors->first('password'))
                <span class="help-block">{{$errors->first('password')}}</span>
              @endif
              </div>
              <div class="form-group {{$errors->first('password_confirmation') ? 'has-error' : NULL}}">
                <input style="font-size: 16px ;" id="password_confirmation" name="password_confirmation" type="password" placeholder="Verify Password" class="form-control">
                @if($errors->first('password_confirmation'))
                <span class="help-block">{{$errors->first('password_confirmation')}}</span>
              @endif
              </div>
              <!-- <div class="form-group row login-tools">
                <div class="col-xs-6 login-remember">
                  <div class="be-checkbox">
                    <input type="checkbox" id="remember" name="auto_login" value="1" {{old('auto_login',1) == "1" ? 'checked="checked"' : NULL}}>
                    <label for="remember">Auto Login</label>
                  </div>
                </div> -->
                <!-- <div class="col-xs-12 login-forgot-password">Don't have an account? <a href="#">Sign up</a></div>  -->
              </div>
              <div class="form-group login-submit  ">
                <button style="font-size: 20px ;width: 87%;margin-left: 27px;" data-dismiss="modal" type="submit" class="btn btn-primary btn-xl">Register Account</button>
              </div>
              <div class="col-xs-12 text-center  " style="font-size:14px;margin-bottom:20px;color:black">Do you have an account? <a href="{{route('system.login')}}"style="font-weight: bold; padding-left: 5px;">Sign in</a></div> 

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop