@extends('layouts.auth')

@section('Title', 'SmartSchool')

@section('content')
        <div class="absolute left-1/3 top-32" data-aos="zoom-in" data-aos-duration="500">
                <div class="text-blue-900">
                    <div class="rounded-xl shadow-xl block md:inline-block py-10 bg-yellow-200" data-aos="zoom-in" data-aos-duration="500">
                        <div class="text-4xl font-bold text-center mb-2">Teacher Registration</div>
                        <div class="text-sm uppercase text-center mb-5 mx-20">Register & start learning here. <br> One more step to turning ideas into reality. </div>
                        <div class="">
                            <form action="#" method="post" class="flex flex-col items-center ">

                                <label class="text-lg font-medium">Username</label>
                                <input type="text" class="text-center shadow-sm rounded-xl w-96 bg-gray-50 px-4 py-2 mb-3" placeholder="enter your username">

                                <label class="text-lg font-medium">Email</label>
                                <input type="email" class="text-center shadow-sm rounded-xl w-96 bg-gray-50 px-4 py-2 mb-3" placeholder="example@email.com">

                                <label class="text-lg font-medium">Password</label>
                                <input type="password" class="text-center shadow-sm rounded-xl w-96 bg-gray-50 px-4 py-2 mb-3" placeholder="enter your password">

                                <label class="text-lg font-medium">Confirm Password</label>
                                <input type="password" class="text-center shadow-sm rounded-xl w-96 bg-gray-50 px-4 py-2 mb-3" placeholder="repeat your password">

                                <label class="text-lg font-medium">Skill</label>
                                <select name="skill" id="skill" class="shadow-sm rounded-xl w-96 bg-gray-50 px-4 py-3 mb-3">
                                    <option value="#">Programming</option>
                                    <option value="#">Design Grapich</option>
                                </select>

                            </form>

                            <div class="mt-8 relative left-32">
                                <button class="rounded-full text-xl font-medium px-20 py-2 text-center bg-yellow-300  cursor-pointer hover:text-blue-500 transition duration-300 tracking-wider">Register</button>
                            </div>
                            <div class="text-center" data-aos="fade-right" data-aos-duration="500">
                                <span>Already have an account?</span>
                                <a href="{{ route('Teacher') }}" class="block md:inline-block text-blue-900 transition delay-150 duration-300 transform hover:-translate-y-1 hover:scale-110 hover:text-blue-500 px-3 py-3"><p>Sign In Now</p></a>
                            </div>
                        </div>
                    </div>
                </div>

        {{-- Copyright --}}
        @include("include.copyright")
    </div>
@endsection
