
@extends('layouts.home')

@section('content')
 <main id="main" class="site-main" style="padding-bottom: 0px;">
            <div class="blognews"  style="margin-bottom: 0px;background: #fff;z-index: 1000;">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-6 " style="padding: 0px;height: 90vh;overflow: hidden;">
                            <div class="login-image-bg"></div>
                        </div>
                        <div class="col-md-6 login-content" style="padding: 30px 0;text-align: center;">
                            <div class="login-inner-content" style="max-width: 500px;margin: 0 auto;">
                                <img src="http://pandoseed.com/project/storage/uploads/200428022257Copy of SEED.jpeg" alt="" style="margin-bottom: 20px;width: 200px;">
                            <form method="POST" action="{{ route('register') }}"  id="home_page_login" class="clearfix">
                            @csrf
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label class="sr-only">Name :</label>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name"  placeholder="Full Name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <label class="sr-only">Email :</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="E-mail Address">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <label class="sr-only">Account Type :</label>
                                            <select name="account_type" required="required" class="form-control ">
                                                <option>Select</option>
                                                <option value="Real Estate Company">Real Estate Company</option>
                                                <option value="School">School</option>
                                                <option value="Organization">Organization</option>
                                                <option value="Employee">Employee</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <label class="sr-only">Password :</label>
                                            <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <label class="sr-only">Password Confirmation :</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12">
                                            <button class="btn btn-primary btn-block" value="Login" name="login_btn">{{ __('Register') }}</button>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <h3 style="line-height: inherit;margin-bottom: 10px;">Explore and Become a Franchaise Investor,<br>
                                        Community Developer, Investment Group Leader!</h3>
                                        <p>Meet investment partners and Mentors, Create groups and invest<br> in your futures and receive residual income.</p>
                                    </div>
                                </div>
                                <div style="clear: both;height: 30px"></div>
                                <div class="row">
                                    <div class="col-md-12">
                                       <!--  <h3>Join Pando Seed</h3>
                                        <br> -->
                                        <a href="http://pandoseed.com/project/" class="btn btn-primary " style="width: 100%;border-radius: 100px;" value="SIGIN" name="Signup">SIGIN</a>
                                        <a href="http://pandoseed.com/project/register"  class="btn btn-primary" style="width: 100%;margin-top: 15px;background-color: #a97bc4 !important;border-radius: 100px;" value="Signup" name="Signup">SELL YOUR BUSINESS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center justify-content-center p-2 login-nav">
                        <a href="http://pandoseed.com/project/campaign">Business Investments</a>
                        <a href="http://pandoseed.com/project/realstate">Real Estate Investment</a>
                        <a href="http://pandoseed.com/project/blog">Blog</a>
                        <a href="http://pandoseed.com/project/communities">Communities</a>
                        <a href="http://pandoseed.com/project/about_us">About Us</a>
                        <a href="http://pandoseed.com/project/contact">Contact Us</a>
                        <a href="http://pandoseed.com/project/faq">FAQs</a>
                    </div>
                </div>
            </div>
        </main>
@endsection