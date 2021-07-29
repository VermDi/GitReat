@extends('layouts.auth')
@section('content')
    <form class="form-signin" method="POST" action="{{ route('login') }}">
      @csrf
        <div class="panel periodic-login">
            <span class="atomic-number">28</span>
            <div class="panel-body text-center">
                <h1 class="atomic-symbol">Mi</h1>
                <p class="atomic-mass">14.072110</p>
                <p class="element-name">Miminium</p>

                <i class="icons icon-arrow-down"></i>
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input id="email"  class="form-text" type="email" name="email" value="{{old('email')}}" required  />
                    <span class="bar"></span>
                    <label>E-mail</label>
                </div>
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input id="password" name="password" type="password" class="form-text" required autocomplete="current-password"/>
                    <span class="bar"></span>
                    <label>Password</label>
                </div>
                <label class="pull-left">
                    <input type="checkbox" class="icheck pull-left" name="checkbox1"/> Remember me
                </label>
                <input type="submit" class="btn col-md-12" value="SignIn"/>
            </div>
            <div class="text-center" style="padding:5px;">
                <a href="forgotpass.php">Forgot Password </a>
                <a href="reg.php">| Signup</a>
            </div>
        </div>
    </form>
@endsection
