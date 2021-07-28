@extends('layouts.app')

@section('Title', 'SmartSchool')

@section('content')
    <div class="absolute left-16 right-0 top-40" data-aos="fade-up" data-aos-duration="500">
        {{-- All Theory --}}
        <div class="text-blue-900 pb-4 text-center flex justify-center items-center flex-col mb-24" data-aos="fade-up" data-aos-duration="500">
            <div class="text-4xl font-bold">Terms and conditions</div>

            <div class="mt-12 text-md w-1/2 text-left space-y-3">
                <div class="leading-7 tracking-wide flex flex-row">
                    <div class="mr-3">&bull;</div> Accounts that are not activated (activation via email) for 1 month will be deleted.
                </div>
                <div class="leading-7 tracking-wide flex flex-row">
                    <div class="mr-3">&bull;</div> Accounts that are not activated (activation via email) for 1 month will be deleted.
                </div>
                <div class="leading-7 tracking-wide flex flex-row">
                    <div class="mr-3">&bull;</div> Accounts that are not activated (activation via email) for 1 month will be deleted.
                </div>
                <div class="leading-7 tracking-wide flex flex-row">
                    <div class="mr-3">&bull;</div> Accounts that are not activated (activation via email) for 1 month will be deleted.
                </div>
                <div class="leading-7 tracking-wide flex flex-row">
                    <div class="mr-3">&bull;</div> Accounts that are not activated (activation via email) for 1 month will be deleted.
                </div>
            </div>
        </div>

        {{-- Footer --}}
        @include('include.footer')

        {{-- Copyright --}}
        @include("include.copyright")
    </div>
@endsection

