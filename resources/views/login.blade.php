@extends("style")

@section('content')
<form class="login100-form validate-form flex-sb flex-w" method="post"
action="{{ route('chack.login') }}">
 {{ csrf_field() }}
  <span class="login100-form-title p-b-51">
        Login
  </span>
 <br>
 <p> 
     @if($success=Session::get('success')) 
         {{ $success }}
     @endif
</p>
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
  <h4 style="color:red;">
  @if($errors->has('password'))
   {{ $errors->first('password') }}
  @endif
 </h4>
 <br>
  <div class="container-login100-form-btn m-t-17">
	 <button class="login100-form-btn">
		Login
	 </button>
  </div>
  <h3 style="color:red;">
     @if($errors=Session::get('error')) 
         {{ $errors }}
     @endif
  </h3>
</form>

@endsection