@extends('layouts.auth')

@section('Title', 'SmartSchool')

@section('content')
        <div class="absolute left-1/3 top-32"  >
                <div class="text-blue-900">
                    <div class="bg-yellow-200 rounded-xl shadow-xl mx-auto block md:inline-block" data-aos="zoom-in" data-aos-duration="500" width="200">
                        <img class="rounded-t-xl mx-auto mt-10 mb-5" src="{{ asset('image/teacher.svg') }}" alt="image" width="150">
                        <div class="text-2xl font-bold text-center mx-20">WELCOME TO SMARTSCHOOL</div>
                        <div class="text-xs uppercase text-center mb-6 leading-relaxed tracking-wider mt-1">A teacher is someone who <br> dares to teach by not stopping learning</div>
                        <div>
                            <form action="#" method="post" class="flex flex-col items-center ">

                                <label class="text-lg font-medium">Email</label>
                                <input type="email" class="text-center shadow-sm rounded-xl w-80 bg-gray-50 px-4 py-2 mb-3" placeholder="example@email.com">

                                <label class="text-lg font-medium">Password</label>
                                <input type="password" class="text-center shadow-sm rounded-xl w-80 bg-gray-50 px-4 py-2" placeholder="Enter your password">
                            </form>

                            <div class="mt-10 mb-3 relative left-36">
                                <button class="rounded-full text-xl font-medium px-20 py-2 text-center bg-yellow-300  cursor-pointer hover:text-blue-500 transition duration-300 tracking-wider">Login</button>
                            </div>

                            <div class="text-center mb-10 flex-col flex" data-aos="fade-up" data-aos-duration="600">
                                <div data-aos="fade-down" data-aos-duration="300">or</div>
                                <a href="{{ route('reTeacher') }}" class="block md:inline-block text-blue-900 text-lg transition delay-150 duration-300 transform hover:-translate-y-1 hover:scale-110 hover:text-blue-500 px-3 py-3 mx-auto"><p class="md:border-b-2 border-gray-300 border-0">Sign Up Teacher</p></a>
                                <div>
                                    <a href="{{ route('student') }}" class="block md:inline-block text-blue-900 text-lg transition delay-150 duration-300 transform hover:-translate-y-1 hover:scale-110 hover:text-blue-500 px-3 py-3 mx-auto"><p>Sign In Student</p></a>
                                    <a href="{{ route('reStudent') }}" class="block md:inline-block text-blue-900 text-lg transition delay-150 duration-300 transform hover:-translate-y-1 hover:scale-110 hover:text-blue-500 px-3 py-3 mx-auto"><p class="md:border-b-2 border-gray-300 border-0">Sign Up Student</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        {{-- Copyright --}}
        @include("include.copyright")
    </div>
@endsection
