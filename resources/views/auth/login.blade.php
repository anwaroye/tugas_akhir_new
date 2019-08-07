@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card card-login">
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-12">
                    <div class="padding bg-primary text-center align-items-center d-flex">
                        <div id="particles-js"></div>
                        <div class="w-100">
                            <div class="logo mb-4">
                            <img src="{{asset('login-asset/img/logo_kecil.png')}}" alt="kodinger logo" class="img-fluid">
                            </div>
                            <h4 class="text-light mb-2">Pecinta Alam Panker</h4>
                            <p class="lead text-light">Klasifikasi Pendivisian Pada Organisasi Panker dengan Naive Bayes</p>
                            {{-- <button class="btn btn-block btn-icon btn-icon-twitter mb-3"> --}}
                                
                            </button>
                        </div>

                        <div class="help-links">
                            <ul>
                                {{-- <li><a href="#">Terms of Service</a></li>
                                <li><a href="#">Privacy Policy</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="padding">
                        <h2>Login</h2>
                        <p class="lead">Before you get started, you must login </p>
                        
                        <form autocomplete="off"  method="POST" action="{{ route('login') }}">
                            <div class="form-group">
                                @csrf
                                <label for="username">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                {{-- <input type="text" name="username" class="form-control" id="username" tabindex="1"> --}}
                            </div>
                            <div class="form-group">
                                <label class="d-block" for="password">
                                    Password
                                    <div class="float-right">
                                        <a href="#"></a>
                                    </div>
                                </label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                {{-- <input type="password" name="password" class="form-control" id="password" tabindex="2"> --}}
                            </div>
                            <div class="form-group text-right">
                                <div class="float-left mt-2">
                                    <a href="#"></a>
                                </div>
                                {{-- <button class="btn btn-primary" tabindex="3">
                                    Login
                                </button> --}}
                                <button type="submit" class="btn btn-primary" tabindex="3">
                                    {{ __('login') }}
                                </button>

                                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('login-asset/js/particles.js')}}"></script>
<script>
    particlesJS.load('particles-js', 'login-asset/particlesjs-config.json', function() {
      console.log('callback - particles.js config loaded');
    });
</script>



{{-- 

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
