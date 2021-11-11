@extends('layouts.login')

@section('content')
  <div class="blog-login">
        <div class="blog-login-in">
             <form method="POST" id="loginForm" action="/adminlogin">
                        @csrf
                <img src="frontend/images/logo.png" alt="" />
                <div class="row">
                    <div class="input-field col s12">
                         <input id="email" type="email" class="validate @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail Address" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <label for="first_name1">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <label for="last_name">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <button type="submit" class="waves-effect waves-light btn-large btn-log-in">
                                    {{ __('Login') }}
                                </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
