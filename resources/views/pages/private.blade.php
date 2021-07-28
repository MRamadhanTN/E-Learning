@extends('layouts.app')

@section('Title', 'SmartSchool')

@section('content')
    <div class="absolute left-16 right-0 top-40" data-aos="fade-up" data-aos-duration="500">
        {{-- All Theory --}}
        <div class="text-blue-900 pb-4 text-center flex justify-center items-center flex-col mb-24" data-aos="fade-up" data-aos-duration="500">
            <div class="text-4xl font-bold">Private & Policy</div>

            <div class="mt-12 text-md w-1/2 text-left ">
                <p style="text-indent: 30px" class="leading-7 tracking-wide">
                    Confidentiality of Personal Information is the most important thing for PT. SmartSchool ("We"). We are committed to protecting and respecting user privacy ("you") when accessing and using the application, website (www.ruangguru.com and other websites we manage), features, technology, content and products that we provide (hereinafter, individually) Collectively referred to as the “Platforms”).
                </p>
                <br>
                <p style="text-indent: 30px" class="leading-7 tracking-wide">
                    This Privacy Policy sets the groundwork for how we use the personal information we collect and/or provide you with (“Personal Information”). This Privacy Policy applies to all users of the Platform, unless set out in a separate Privacy Policy. Please read our Privacy Policy carefully so that you can understand our approach and how we use the information.
                </p>
            </div>
        </div>

        {{-- Footer --}}
        @include('include.footer')

        {{-- Copyright --}}
        @include("include.copyright")
    </div>
@endsection

