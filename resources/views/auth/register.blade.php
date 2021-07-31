@extends('layouts.auth')
@section('content')
    <form class="form-signin" method="post" action="{{ route('register') }}">
        @csrf
        <div class="panel periodic-login">
            <span class="atomic-number"></span>
            <div class="panel-body text-center">
                <h1 class="atomic-symbol">Mi</h1>
                <p class="atomic-mass">14.072110</p>
                <p class="element-name">Miminium</p>

                <i class="icons icon-arrow-down"></i>
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <x-input id="name" type="text" class="form-text" name="name" :value="old('name')" required autofocus/>
                    <span class="bar"></span>
                    <label>Username</label>
                </div>
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <x-input id="email" class="form-text" type="email" name="email" :value="old('email')" required/>
                    <span class="bar"></span>
                    <label>E-mail</label>
                </div>
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <x-input id="password" type="password" class="form-text" name="password" required autocomplete="new-password"/>
                    <span class="bar"></span>
                    <label>Password</label>
                </div>
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <x-input id="password_confirmation" type="password" class="form-text" name="password_confirmation" required />
                    <span class="bar"></span>
                    <label>Password</label>
                </div>
                <label class="pull-left">
                    <input type="checkbox" class="icheck pull-left" name="checkbox1"/> Remember me
                </label>
                <input type="submit" class="btn col-md-12" value="Регистрация"/>
            </div>
            <div class="text-center" style="padding:5px;">
                <a href="forgotpass.php">Forgot Password </a>
                <a href="{{ route('login') }}">| Signup</a>
            </div>
        </div>
    </form>

@endsection
