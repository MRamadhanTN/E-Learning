@extends('layouts.app')

@section('Title', 'SmartSchool')

@section('content')
    <div class="absolute left-16 right-0 top-40" data-aos="fade-up" data-aos-duration="500">

        <div class="grid grid-cols-2 mb-32">
            <div class="col-span-1 flex flex-col justify-center mx-auto w-96 text-blue-900" data-aos="fade-right" data-aos-duration="1000">
                <div class="text-4xl font-bold text-blue-900">Want to try being a teacher?</div>
                <div class="text-lg my-10">
                    "A true teacher is one who does what he says and teaches his students."
                </div>
                <a href="{{ route('reTeacher') }}" class="transition duration-500 transform hover:-translate-y-1 hover:scale-110 text-2xl text-blue-900 hover:text-blue-500 font-medium rounded-full text-center bg-yellow-300 py-3 w-52">Sign Up Free</a>
            </div>
            <div class="col-span-1" data-aos="fade-left" data-aos-duration="1000">
                <img src="https://buildwithangga.com/themes/front/images/illustration_hero_banner.svg" alt="Banner Image">
            </div>
        </div>

        <div class="flex justify-between text-blue-900 mx-auto mb-40 gap-x-8">
            <div class="border rounded-xl shadow-xl mx-auto w-96" data-aos="fade-up" data-aos-duration="700">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class=" flex justify-center items-center flex-col text-center">
                    <div class="text-2xl font-bold w-80 text-center mt-8">Learning Basic Programming</div>
                    <div class=" text-xl my-5 w-60">M. Ramadhan Tri Nurdias</div>
                </div>
            </div>
            <div class="border rounded-xl shadow-xl mx-auto w-96" data-aos="fade-up" data-aos-duration="700">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class=" flex justify-center items-center flex-col text-center">
                    <div class="text-2xl font-bold w-80 text-center mt-8">Learning Basic Programming</div>
                    <div class=" text-xl my-5 w-60">M. Ramadhan Tri Nurdias</div>
                </div>
            </div>
            <div class="border rounded-xl shadow-xl mx-auto w-96" data-aos="fade-up" data-aos-duration="700">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class=" flex justify-center items-center flex-col text-center">
                    <div class="text-2xl font-bold w-80 text-center mt-8">Learning Basic Programming</div>
                    <div class=" text-xl my-5 w-60">M. Ramadhan Tri Nurdias</div>
                </div>
            </div>
        </div>

        {{-- Footer --}}
        @include('include.footer')

        {{-- Copyright --}}
        @include("include.copyright")
    </div>
@endsection

