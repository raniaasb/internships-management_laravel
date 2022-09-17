@extends('layouts.auth')

@section('title', 'Login')

@section('content')

            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="img/signin-image.jpg" alt="sing up image"></figure>
                        <a href="{{route('register')}}" class="signup-image-link">not a member yet ?</a>
                    </div>

                    <div class="signin-form"> 
                        <h2 class="form-title">{{__('Login')}}</h2>
                        
                        <form method="POST" class="login-form" id="login-form" action="{{route('login')}}">
                        @csrf
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="off" autofocus placeholder="Enter your email">                               
                                    
                                    @error('email')
                                    
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="current-password" placeholder="Enter your password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span> {{__('Remember Me')}}</label>
                            </div>
                        
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        
                    </div>
                  
                </div>
            </div>
@endsection

@section('scripts')

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>

@endsection
