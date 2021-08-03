<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    @include('include.style')

    <title>@yield('Title')</title>

    @include('include.cdn')
  </head>
  <body class=" font-sans leading-normal tracking-normal">
    <div class="flex flex-col md:flex-row">

        @include('include.sidebar')

        @yield('content')
    </div>

    {{-- Script --}}
    @include('include.script')

  </body>
</html>
