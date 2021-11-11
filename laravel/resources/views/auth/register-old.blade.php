@extends('layouts.app')

@section('content')
<style>
    .invalid-feedback{ display:block;}
</style>
        <main id="main" class="site-main">
            <div class="page-title background-page">
                <div class="container">
                    <h1>Register</h1>
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a><span>/</span></li>
                            <li>Register</li>
                        </ul>
                    </div><!-- .breadcrumbs -->
                </div>
            </div><!-- .page-title -->
            <div class="container">
                <div class="main-content">
                    <div class="form-login form-register">
                        @if (session('status'))
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                        <h2>Register for Free</h2>
                            <form method="POST" action="{{ route('register') }}"  id="registerForm" class="clearfix">
                            @csrf
                            <div class="field">
                            <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name"  placeholder="Full Name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="field">
                                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="E-mail Address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="field">
                                <select name="account_type" required="required">
                                    <option>Select Account Type</option>
                                    <option value="Real Estate Company">Real Estate Company</option>
                                    <option value="School">School</option>
                                    <option value="Organization">Organization</option>
                                    <option value="Employee">Employee</option>
                                </select>

                          
                            </div>
                            <div class="field">
                                <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="field">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="inline clearfix">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                                <p>Not a member yet? <a href="{{ route('login') }}">Login Now</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>  
        </main><!-- .site-main -->

@endsection
