<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Bootstrap CSS -->
		<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="{{asset('css/tiny-slider.css')}}" rel="stylesheet">
		<link href="{{asset('css/style.css')}}" rel="stylesheet">

        {{-- <link rel="stylesheet" href="{{asset('resources/css/app.css')}}"> --}}
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!-- Scripts -->
        <script src="{{asset('resources/js/app.js')}}"></script>
     
    </head>
    <body class="font-sans text-gray-900 antialiased">
        @include('layouts.outernav')

            <!-- Start Hero Section -->
                <div class="hero">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-lg-5">
                                <div class="intro-excerpt">
                                    @if (request()->routeIs('register'))
                                        <h1>Add User</h1>                                        
                                    @endif
                                    @if (request()->routeIs('login'))
                                        <h1>Login</h1>                                        
                                    @endif
                                    @if (request()->routeIs('forgot.password'))
                                        <h1>Forgot Password</h1>                                        
                                    @endif
                                    {{-- <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
                                    <p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-white-outline">Explore</a></p> --}}
                                </div>
                            </div>
                            {{-- <div class="col-lg-7">
                                <div class="hero-img-wrap">
                                    <img src="images/couch.png" class="img-fluid">
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            <!-- End Hero Section -->
       
            <div class="untree_co-section">
                {{-- <div>
                    <a href="/">
                        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                    </a>
                </div> --}}

                <div class="container">
                    <div class="block">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-lg-8 pb-4">
                                {{ $slot }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @include('layouts.footer')
    </body>
</html>
