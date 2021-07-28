@extends('layouts.auth')

@section('Title', 'SmartSchool')

@section('content')
        <div class="absolute left-1/3 top-32" data-aos="fade-up" data-aos-duration="500">
                <div class="text-blue-900">
                    <div class="border rounded-xl shadow-xl mx-auto block md:inline-block py-16" data-aos="fade-up" data-aos-duration="700" width="200">
                        <div class="text-4xl font-bold text-center mb-4">Student Registration</div>
                        <div class="text-sm uppercase text-center mb-10 mx-20">Register & start learning here. <br> One more step to turning ideas into reality. </div>
                        <div class="">
                            <form action="#" method="post" class="flex flex-col gap-y-2 items-center ">

                                <label class="text-lg font-medium">Username</label>
                                <input type="text" class="text-center border shadow-sm rounded-xl w-96 bg-gray-50 px-4 py-2 mb-5" placeholder="enter your username">

                                <label class="text-lg font-medium">Email</label>
                                <input type="email" class="text-center border shadow-sm rounded-xl w-96 bg-gray-50 px-4 py-2 mb-5" placeholder="example@email.com">

                                <label class="text-lg font-medium">Password</label>
                                <input type="password" class="border text-center shadow-sm rounded-xl w-96 bg-gray-50 px-4 py-2 mb-5" placeholder="enter your password">

                                <label class="text-lg font-medium">Confirm Password</label>
                                <input type="password" class="border text-center shadow-sm rounded-xl w-96 bg-gray-50 px-4 py-2" placeholder="repeat your password">

                            </form>

                            <div class="mt-14 relative left-32">
                                <button class="border rounded-full text-xl font-medium px-20 py-2 text-center bg-yellow-300  cursor-pointer hover:text-blue-500 transition duration-300 tracking-wider">Register</button>
                            </div>
                            <div class="text-center">
                                <span>Already have an account?</span>
                                <a href="{{ route('student') }}" class="block md:inline-block text-blue-900 transition delay-150 duration-300 transform hover:-translate-y-1 hover:scale-110 hover:text-blue-500 px-3 py-3"><p>Sign In Now</p></a>
                            </div>
                        </div>
                    </div>
                </div>

        {{-- Copyright --}}
        @include("include.copyright")
    </div>
@endsection
