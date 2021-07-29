@extends('layouts.app')

@section('Title', 'SmartSchool')

@section('content')
    <div class="absolute left-16 right-0 top-40" data-aos="fade-up" data-aos-duration="500">

        <div class="grid grid-cols-2 mb-32">
            <div class="col-span-1 flex flex-col justify-center items-center ml-10 w-96 text-blue-900" data-aos="fade-right" data-aos-duration="1000">
                <div class="text-4xl font-bold text-blue-900">We are Happy to help you anytime</div>
                <div class="text-lg my-10">
                    Need help? Please contact us via the channel we provide below.
                </div>
            </div>
            <div class="col-span-1" data-aos="fade-left" data-aos-duration="1000">
                <img src="{{ asset('image/c1.png') }}" alt="Banner Image">
            </div>
        </div>

        <div class="flex justify-between text-blue-900 mx-auto mb-40 gap-x-8">
            <div class="border rounded-xl shadow-xl flex justify-center flex-col items-center px-20 h-80 gap-y-5" data-aos="fade-up" data-aos-duration="700">
                <img class="w-32 h-32" src="{{ asset('image/wa.svg') }}" alt="image">
                <div class="text-center space-y-2">
                    <div class="text-2xl font-bold">WhatsApp</div>
                    <div class=" text-xl">+628-9538-0013-428</div>
                    <div class=" text-lg">07.00 AM - 5.00 PM</div>
                </div>
            </div>
            <div class="border rounded-xl shadow-xl flex justify-center flex-col items-center px-20 h-80 gap-y-5" data-aos="fade-up" data-aos-duration="700">
                <img class="w-32 h-32" src="{{ asset('image/mail.svg') }}" alt="image">
                <div class="text-center space-y-2">
                    <div class="text-2xl font-bold">Email</div>
                    <div class=" text-xl">SmartSchool@gmail.com</div>
                    <div class=" text-lg">07.00 AM - 5.00 PM</div>

                </div>
            </div>
            <div class="border rounded-xl shadow-xl flex justify-center flex-col items-center px-20 h-80 gap-y-5" data-aos="fade-up" data-aos-duration="700">
                <img class="w-32 h-32" src="{{ asset('image/phone.svg') }}" alt="image">
                <div class="text-center space-y-2">
                    <div class="text-2xl font-bold">Call Center</div>
                    <div class=" text-xl">(021) 1500005</div>
                    <div class=" text-lg">07.00 AM - 5.00 PM</div>
                </div>
            </div>
        </div>

        {{-- Footer --}}
        @include('include.footer')

        {{-- Copyright --}}
        @include("include.copyright")
    </div>
@endsection

