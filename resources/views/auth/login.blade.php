@extends('layouts.auth')

@section('Title', 'SmartSchool')

@section('content')
        <div class="absolute left-1/3 top-32">
                <div class="text-blue-900">
                    <div class="bg-yellow-200 rounded-xl shadow-xl mx-auto block md:inline-block" data-aos="zoom-in" data-aos-duration="800">
                        <img class="rounded-t-xl mx-auto mt-10 mb-5" src="{{ asset('image/student.svg') }}" alt="image" width="150">
                        <div class="text-2xl font-bold text-center mx-20">WELCOME TO SMARTSCHOOL</div>
                        <div class="text-xs uppercase text-center mb-6 tracking-wider mt-1">Be eager to learn something useful</div>
                        <div class="">
                            <form action="{{ route('login') }}" method="post" class="flex flex-col items-center ">
                            @method('POST')
                            @csrf
                                <label class="text-lg font-medium">Email</label>
                                <input id="email" type="email" class="form-control text-center shadow-sm rounded-xl w-80 bg-gray-50 px-4 py-2 mb-3 focus:outline-none @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" autofocus placeholder="example@email.com">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label class="text-lg font-medium">Password</label>
                                <input id="password" type="password" class="form-control text-center shadow-sm rounded-xl w-80 bg-gray-50 px-4 py-2 focus:outline-none @error('password') is-invalid @enderror" name="password" required autocomplete="off" placeholder="Enter your password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="mt-10 mb-5">
                                    <button type="submit" class="rounded-full text-xl font-medium px-20 py-2 text-center bg-yellow-300  cursor-pointer hover:text-blue-500 transition duration-300 tracking-wider">Login</button>
                                </div>
                            </form>

                            {{-- <a href="#" class="block md:inline-block text-xs border-b border-blue-800 relative left-24">Forgot password?</a> --}}

                            <div class="text-center mb-10 flex-col flex">
                                <div data-aos="zoom-in" data-aos-duration="800" data-aos-delay="100">or</div>
                                <div>
                                    <a href="{{ route('register') }}" class="block md:inline-block text-blue-900 text-lg transition delay-150 duration-300 transform hover:-translate-y-1 hover:scale-110 hover:text-blue-500 px-3 py-3 mx-auto"><p data-aos="fade-right" data-aos-duration="800" data-aos-delay="200">Sign Up Student</p></a>
                                    <a href="{{ route('reTeacher') }}" class="block md:inline-block text-blue-900 text-lg transition delay-150 duration-300 transform hover:-translate-y-1 hover:scale-110 hover:text-blue-500 px-3 py-3 mx-auto"><p data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">Sign Up Teacher</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        {{-- Copyright --}}
        @include("include.copyright")
    </div>
@endsection


{{-- @extends('layouts.app')

@section('content')
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
                                    {{ __('Login') }}
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
</div>
@endsection --}}
