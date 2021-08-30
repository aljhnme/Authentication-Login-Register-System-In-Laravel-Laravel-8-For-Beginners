@extends('style')

@section('content')
@if(Auth::check())
    <script>window.location="/login_success";</script>
@endif
<form class="login100-form validate-form flex-sb flex-w" method="post"
action="{{ route('insert.data') }}">
 {{ csrf_field() }}
  <span class="login100-form-title p-b-51">
        Register
  </span>
  <br>
 <div class="wrap-input100 validate-input m-b-16" >
      <input class="input100" type="text" name="name" placeholder="Name">
	  <span class="focus-input100"></span>
 </div>
 <h4 style="color:red;">
 @if($errors->has('name'))
   {{ $errors->first('name') }}
 @endif
 <h4>
 <br>
 <div class="wrap-input100 validate-input m-b-16">
	 <input class="input100" type="Email" name="email" placeholder="Email">
	 <span class="focus-input100"></span>
  </div>
  <h4 style="color:red;">
  @if($errors->has('email'))
   {{ $errors->first('email') }}
  @endif
  </h4>
 <br>
  <div class="wrap-input100 validate-input m-b-16">
	 <input class="input100" type="password" name="password" placeholder="Password">
	 <span class="focus-input100"></span>
  </div>
 <br>
  <div class="wrap-input100 validate-input m-b-16" >
	 <input class="input100" type="password" name="password_confirmation" placeholder="Retype password">
	 <span class="focus-input100"></span>
  </div>
  <h4 style="color:red;">
  @if($errors->has('password'))
   {{ $errors->first('password') }}
  @endif
 </h4>
 <br>
  <div class="container-login100-form-btn m-t-17">
	 <button class="login100-form-btn">
		Register
	 </button>
  </div>
</form>

@endsection