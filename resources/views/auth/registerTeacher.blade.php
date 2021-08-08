@extends('layouts.auth')

@section('Title', 'SmartSchool')

@section('content')
        <div class="absolute left-1/3 top-32" data-aos="zoom-in" data-aos-duration="500">
                <div class="text-blue-900">
                    <div class="rounded-xl shadow-xl block md:inline-block py-10 bg-yellow-200" data-aos="zoom-in" data-aos-duration="500">
                        <div class="text-4xl font-bold text-center mb-2">Teacher Registration</div>
                        <div class="text-sm uppercase text-center mb-5 mx-20">Register & start learning here. <br> One more step to turning ideas into reality. </div>
                        <div class="">

                            <form action="{{ route('reTeacher.store') }}" method="post" class="flex flex-col items-center ">
                                @csrf
                                @method('POST')

                                <label class="text-lg font-medium">Username</label>
                                <input id="name" type="text" class="form-control text-center shadow-lg rounded-xl w-96 bg-gray-50 px-4 py-2 mb-3 focus:outline-none @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="off" autofocus placeholder="enter your username">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label class="text-lg font-medium">Email</label>
                                <input id="email" type="email" class="form-control text-center shadow-lg rounded-xl w-96 bg-gray-50 px-4 py-2 mb-3 focus:outline-none @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" placeholder="example@email.com">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label class="text-lg font-medium">Password</label>
                                <input id="password" type="password" class="form-control text-center shadow-lg rounded-xl w-96 bg-gray-50 px-4 py-2 mb-3 focus:outline-none @error('password') is-invalid @enderror" name="password" required autocomplete="off" placeholder="enter your password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label class="text-lg font-medium">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control text-center shadow-lg rounded-xl w-96 bg-gray-50 px-4 py-2 mb-3 focus:outline-none" name="password_confirmation" required autocomplete="off" placeholder="repeat your password">

                                <label class="text-lg font-medium">Skill</label>
                                <select name="skill" id="skill" class="shadow-lg font-semibold rounded-xl w-96 bg-gray-50 px-4 py-3 mb-3 focus:outline-none">
                                    <option value="#" class="font-semibold">Programming</option>
                                    <option value="#" class="font-semibold" selected>Design Grapich</option>
                                </select>

                                <input id="is_teacher" type="number" class="form-control  hidden" name="is_teacher" value="1">

                                <div class="mt-8">
                                    <button type="submit" class="rounded-full text-xl font-medium px-20 py-2 text-center bg-yellow-300  cursor-pointer hover:text-blue-500 transition duration-300 tracking-wider">Register</button>
                                </div>
                            </form>

                            <div class="text-center" data-aos="fade-right" data-aos-duration="800">
                                <span>Already have an account?</span>
                                <a href="{{ route('login') }}" class="block md:inline-block text-blue-900 transition delay-150 duration-300 transform hover:-translate-y-1 hover:scale-110 hover:text-blue-500 px-3 py-3"><p>Sign In Now</p></a>
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
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
