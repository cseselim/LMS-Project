<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700;800;900&family=Poppins:wght@200;300;400;500;600;700&family=Satisfy&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <!-- Styles -->
    </head>
    <body class="antialiased">
        <!-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div> -->
        <div id="header_area">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link" href="#">Features</a>
                            <a class="nav-link" href="#">Pricing</a>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="container">
                <div id="slider-section">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Your Path to Laravel Career <br><span>Starts Here...</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="knowledge_section">
            <div class="container">
                <div class="row text-center">
                    <div class="title">
                        <h4>A stream of endless knowledge.</h4>
                        <p>We're kinda like Netflix, but for developers! Push your programming skills to the next level, through expert screencasts on <span>PHP, Laravel, Vue, and so much more.</span></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="row mb-4">
                        <div class="col-6">
                            <div class="card-1 left-card text-center">
                                <a href="#">
                                    <img src="{{ asset('img/codebreaking-workshop.png') }}" alt="img">
                                </a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card-2 left-card text-center">
                                <a href="#">
                                    <img src="{{ asset('img/valet-uncovered.png') }}" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row card-3 left-card m-0 mb-4">
                        <div class="col-4">
                            <img src="{{ asset('img/load-balance-a-laravel-app.svg') }}" alt="img">
                            <div class="text-center">Advanced<br>Difficulty </div>
                            <div class="difficulty-meter text-center">
                                <span>&nbsp;</span>
                                <span>&nbsp;</span>
                                <span>&nbsp;</span>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="card-content">
                                <a href="#">Load Balance a Laravel App</a>
                                <p class="clamp five-lines">A load balancer serves as the single entry point to your application from the internet. It distributes incoming traffic across multiple targets, which could be...</p>
                                <div class="card-icon">
                                    <span class="mr-4"><svg width="13" height="14" viewBox="0 0 13 14" class="mr-2"><path class="fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z"></path></svg>
                                <span>6 leossons</span></span>

                                <span>
                                    <svg width="13" height="13" viewBox="0 0 13 13" class="relative mr-2" style="top: 1px;"><path class="fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z"></path></svg>
                                    <span>30m</span>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row card-3 left-card m-0">
                        <div class="col-4">
                            <img src="{{ asset('img/build-advanced-components-for-filament.svg') }}" alt="img">
                            <div class="text-center">Advanced<br>Difficulty </div>
                            <div class="difficulty-meter text-center">
                                <span>&nbsp;</span>
                                <span>&nbsp;</span>
                                <span>&nbsp;</span>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="card-content">
                                <a href="#">Load Balance a Laravel App</a>
                                <p class="clamp five-lines">A load balancer serves as the single entry point to your application from the internet. It distributes incoming traffic across multiple targets, which could be...</p>
                                <div class="card-icon">
                                    <span class="mr-4"><svg width="13" height="14" viewBox="0 0 13 14" class="mr-2"><path class="fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z"></path></svg>
                                <span>6 leossons</span></span>

                                <span>
                                    <svg width="13" height="13" viewBox="0 0 13 13" class="relative mr-2" style="top: 1px;"><path class="fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z"></path></svg>
                                    <span>30m</span>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row middle-card card-middle-1 left-card m-0 mb-4">
                        <div class="col-5">
                            <img src="{{ asset('img/laravel-octane.png') }}" alt="img">
                        </div>
                        <div class="col-7">
                            <div class="card-content">
                                <div>
                                    <a href="#">Laravel Octane</a>
                                </div>
                                <div class="card-icon">
                                    <span class="mr-4"><svg width="13" height="14" viewBox="0 0 13 14" class="mr-2"><path class="fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z"></path></svg>
                                    <span>6 leossons</span></span>
                                    <span>
                                        <svg width="13" height="13" viewBox="0 0 13 13" class="relative mr-2" style="top: 1px;"><path class="fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z"></path></svg>
                                        <span>30m</span>
                                    </span> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row middle-card card-middle-2 left-card m-0 mb-4">
                        <div class="col-5">
                            <img src="{{ asset('img/laravel-octane.png') }}" alt="img">
                        </div>
                        <div class="col-7">
                            <div class="card-content">
                                <div>
                                    <a href="#">Laravel Octane</a>
                                </div>
                                <div class="card-icon">
                                    <span class="mr-4"><svg width="13" height="14" viewBox="0 0 13 14" class="mr-2"><path class="fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z"></path></svg>
                                    <span>6 leossons</span></span>
                                    <span>
                                        <svg width="13" height="13" viewBox="0 0 13 13" class="relative mr-2" style="top: 1px;"><path class="fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z"></path></svg>
                                        <span>30m</span>
                                    </span> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-6">
                            <div class="card-1 left-card text-center">
                                <a href="#">
                                    <img src="{{ asset('img/codebreaking-workshop.png') }}" alt="img">
                                </a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card-2 left-card text-center">
                                <a href="#">
                                    <img src="{{ asset('img/valet-uncovered.png') }}" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row card-3 left-card m-0">
                        <div class="col-4">
                            <img src="{{ asset('img/css-flexbox-simplified.svg') }}" alt="img">
                            <div class="text-center">Advanced<br>Difficulty </div>
                            <div class="difficulty-meter text-center">
                                <span>&nbsp;</span>
                                <span>&nbsp;</span>
                                <span>&nbsp;</span>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="card-content">
                                <a href="#">Load Balance a Laravel App</a>
                                <p class="clamp five-lines">A load balancer serves as the single entry point to your application from the internet. It distributes incoming traffic across multiple targets, which could be...</p>
                                <div class="card-icon">
                                    <span class="mr-4"><svg width="13" height="14" viewBox="0 0 13 14" class="mr-2"><path class="fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z"></path></svg>
                                <span>6 leossons</span></span>

                                <span>
                                    <svg width="13" height="13" viewBox="0 0 13 13" class="relative mr-2" style="top: 1px;"><path class="fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z"></path></svg>
                                    <span>30m</span>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row card-3 left-card m-0 mb-4">
                        <div class="col-4">
                            <img src="{{ asset('img/servers-for-laravel.svg') }}" alt="img">
                            <div class="text-center">Advanced<br>Difficulty </div>
                            <div class="difficulty-meter text-center">
                                <span>&nbsp;</span>
                                <span>&nbsp;</span>
                                <span>&nbsp;</span>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="card-content">
                                <a href="#">Load Balance a Laravel App</a>
                                <p class="clamp five-lines">A load balancer serves as the single entry point to your application from the internet. It distributes incoming traffic across multiple targets, which could be...</p>
                                <div class="card-icon">
                                    <span class="mr-4"><svg width="13" height="14" viewBox="0 0 13 14" class="mr-2"><path class="fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z"></path></svg>
                                <span>6 leossons</span></span>

                                <span>
                                    <svg width="13" height="13" viewBox="0 0 13 13" class="relative mr-2" style="top: 1px;"><path class="fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z"></path></svg>
                                    <span>30m</span>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row card-3 left-card m-0">
                        <div class="col-4">
                            <img src="{{ asset('img/css-flexbox-simplified.svg') }}" alt="img">
                            <div class="text-center">Advanced<br>Difficulty </div>
                            <div class="difficulty-meter text-center">
                                <span>&nbsp;</span>
                                <span>&nbsp;</span>
                                <span>&nbsp;</span>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="card-content">
                                <a href="#">Load Balance a Laravel App</a>
                                <p class="clamp five-lines">A load balancer serves as the single entry point to your application from the internet. It distributes incoming traffic across multiple targets, which could be...</p>
                                <div class="card-icon">
                                    <span class="mr-4"><svg width="13" height="14" viewBox="0 0 13 14" class="mr-2"><path class="fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z"></path></svg>
                                <span>6 leossons</span></span>

                                <span>
                                    <svg width="13" height="13" viewBox="0 0 13 13" class="relative mr-2" style="top: 1px;"><path class="fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z"></path></svg>
                                    <span>30m</span>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-6">
                            <div class="card-1 left-card text-center">
                                <a href="#">
                                    <img src="{{ asset('img/codebreaking-workshop.png') }}" alt="img">
                                </a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card-2 left-card text-center">
                                <a href="#">
                                    <img src="{{ asset('img/valet-uncovered.png') }}" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="topic_section">
            <div class="container">
                <div class="row text-center">
                    <div class="title">
                        <h4>Pick a topic. Any topic.</h4>
                        <p>If you already know what you're looking for, Laracasts is divided into various topics ranging from frameworks to packages to tools.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-center">
                        <ul class="topic_list">
                            <li><a href="#">All Topics</a></li>
                            <li><a href="#">DevOps</a></li>
                            <li><a href="#">Frameworks</a></li>
                            <li><a href="#">Languages</a></li>
                            <li><a href="#">Techniques</a></li>
                            <li><a href="#">Testing</a></li>
                            <li><a href="#">Tooling</a></li>
                        </ul>
                    </div>
                    <div class="topic_content mt-4">
                        <div class="topic_item">
                            <a href="">
                                <div class="row">
                                    <div class="col-4 my-auto">
                                        <img src="{{ asset('img/alpine-logo.svg') }}" alt="">
                                    </div>
                                    <div class="col-8 my-auto">
                                        <h5>AlpineJS</h5>
                                        <div class="topic_sub_item">
                                            <span>7 Series</span> <span>86 Videos</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="topic_item">
                            <a href="">
                                <div class="row">
                                    <div class="col-4 my-auto">
                                        <img src="{{ asset('img/alpine-logo.svg') }}" alt="">
                                    </div>
                                    <div class="col-8 my-auto">
                                        <h5>AlpineJS</h5>
                                        <div class="topic_sub_item">
                                            <span>7 Series</span> <span>86 Videos</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="topic_item">
                            <a href="">
                                <div class="row">
                                    <div class="col-4 my-auto">
                                        <img src="{{ asset('img/alpine-logo.svg') }}" alt="">
                                    </div>
                                    <div class="col-8 my-auto">
                                        <h5>AlpineJS</h5>
                                        <div class="topic_sub_item">
                                            <span>7 Series</span> <span>86 Videos</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="topic_item">
                            <a href="">
                                <div class="row">
                                    <div class="col-4 my-auto">
                                        <img src="{{ asset('img/alpine-logo.svg') }}" alt="">
                                    </div>
                                    <div class="col-8 my-auto">
                                        <h5>AlpineJS</h5>
                                        <div class="topic_sub_item">
                                            <span>7 Series</span> <span>86 Videos</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="topic_item">
                            <a href="">
                                <div class="row">
                                    <div class="col-4 my-auto">
                                        <img src="{{ asset('img/alpine-logo.svg') }}" alt="">
                                    </div>
                                    <div class="col-8 my-auto">
                                        <h5>AlpineJS</h5>
                                        <div class="topic_sub_item">
                                            <span>7 Series</span> <span>86 Videos</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="topic_item">
                            <a href="">
                                <div class="row">
                                    <div class="col-4 my-auto">
                                        <img src="{{ asset('img/alpine-logo.svg') }}" alt="">
                                    </div>
                                    <div class="col-8 my-auto">
                                        <h5>AlpineJS</h5>
                                        <div class="topic_sub_item">
                                            <span>7 Series</span> <span>86 Videos</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="topic_item">
                            <a href="">
                                <div class="row">
                                    <div class="col-4 my-auto">
                                        <img src="{{ asset('img/alpine-logo.svg') }}" alt="">
                                    </div>
                                    <div class="col-8 my-auto">
                                        <h5>AlpineJS</h5>
                                        <div class="topic_sub_item">
                                            <span>7 Series</span> <span>86 Videos</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="footer_section">
            <div class="container">
                <div class="subscriber_area text-center">
                    <h1>Want us to email you occasionally with Laracasts news?</h1>
                    <div class="subscriber_field">
                        <form action="#">
                            <input type="text" placeholder="Enter your email address">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
                <div class="footer_content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer_logo_content">
                                <div class="">
                                    <svg class="fill-current text-white" width="232" height="44" viewBox="0 0 323 36"><g fill="none" fill-rule="evenodd"><path d="M0 4.83h6.986v24.521h15.137v5.699H0V4.83zm53.374 23.744H39.36l-2.674 6.476h-7.159L42.981 4.83h6.9L63.38 35.05h-7.33l-2.675-6.476zm-2.199-5.31l-4.787-11.57-4.787 11.57h9.574zM92.949 35.05l-5.822-8.418H80.7v8.418h-6.986V4.83h13.067c2.674 0 4.995.446 6.965 1.339 1.969.892 3.485 2.158 4.55 3.799 1.063 1.64 1.595 3.583 1.595 5.828s-.54 4.18-1.617 5.806c-1.078 1.626-2.61 2.871-4.593 3.734l6.77 9.714H92.95zm-.13-19.254c0-1.698-.546-3-1.638-3.907-1.093-.907-2.688-1.36-4.787-1.36H80.7v10.534h5.693c2.099 0 3.694-.461 4.787-1.382 1.092-.92 1.638-2.216 1.638-3.885zm39.661 12.778h-14.016l-2.673 6.476h-7.16l13.456-30.22h6.9l13.498 30.22h-7.331l-2.674-6.476zm-2.2-5.31l-4.786-11.57-4.787 11.57h9.574zm36.556 12.304c-3.076 0-5.858-.67-8.344-2.008-2.487-1.338-4.442-3.194-5.865-5.569-1.424-2.374-2.135-5.058-2.135-8.05 0-2.994.711-5.678 2.135-8.052 1.423-2.375 3.378-4.231 5.865-5.57 2.486-1.338 5.282-2.007 8.387-2.007 2.617 0 4.981.46 7.094 1.382 2.114.92 3.889 2.245 5.326 3.971l-4.485 4.145c-2.04-2.36-4.57-3.54-7.59-3.54-1.868 0-3.536.41-5.002 1.23a8.742 8.742 0 0 0-3.429 3.432c-.819 1.468-1.229 3.137-1.229 5.008 0 1.87.41 3.54 1.23 5.008a8.742 8.742 0 0 0 3.428 3.432c1.466.82 3.134 1.23 5.002 1.23 3.02 0 5.55-1.194 7.59-3.583l4.485 4.145c-1.437 1.755-3.22 3.093-5.347 4.014-2.128.921-4.5 1.382-7.116 1.382zm73.888 0c-2.387 0-4.694-.324-6.922-.971-2.228-.648-4.018-1.49-5.369-2.526l2.372-5.267c1.294.95 2.832 1.713 4.614 2.288 1.783.576 3.565.864 5.348.864 1.984 0 3.45-.295 4.399-.885.948-.59 1.423-1.375 1.423-2.353 0-.72-.28-1.317-.841-1.792-.56-.475-1.28-.856-2.156-1.144-.877-.288-2.063-.604-3.558-.95-2.3-.546-4.183-1.093-5.65-1.64a9.178 9.178 0 0 1-3.773-2.633c-1.05-1.21-1.574-2.82-1.574-4.836 0-1.755.474-3.345 1.423-4.77.949-1.425 2.38-2.554 4.29-3.389 1.913-.834 4.249-1.252 7.009-1.252 1.926 0 3.81.23 5.65.691 1.84.46 3.45 1.122 4.83 1.986l-2.157 5.31c-2.789-1.583-5.578-2.375-8.366-2.375-1.955 0-3.4.317-4.334.95-.935.633-1.402 1.468-1.402 2.504s.54 1.806 1.617 2.31c1.078.503 2.724 1 4.938 1.49 2.3.546 4.183 1.093 5.65 1.64a9.355 9.355 0 0 1 3.773 2.59c1.05 1.18 1.574 2.777 1.574 4.792a8.258 8.258 0 0 1-1.445 4.727c-.963 1.425-2.408 2.554-4.334 3.389-1.926.835-4.27 1.252-7.03 1.252zm30.604-25.04h-9.66V4.83h26.306v5.699h-9.66v24.52h-6.986V10.53zm37.289 25.04c-2.386 0-4.694-.324-6.922-.971-2.228-.648-4.017-1.49-5.369-2.526l2.372-5.267c1.294.95 2.832 1.713 4.615 2.288 1.782.576 3.564.864 5.347.864 1.984 0 3.45-.295 4.399-.885.949-.59 1.423-1.375 1.423-2.353 0-.72-.28-1.317-.841-1.792-.56-.475-1.28-.856-2.156-1.144-.877-.288-2.063-.604-3.558-.95-2.3-.546-4.183-1.093-5.65-1.64a9.178 9.178 0 0 1-3.773-2.633c-1.05-1.21-1.574-2.82-1.574-4.836 0-1.755.474-3.345 1.423-4.77.949-1.425 2.38-2.554 4.291-3.389 1.912-.834 4.248-1.252 7.008-1.252 1.926 0 3.81.23 5.65.691 1.84.46 3.45 1.122 4.83 1.986l-2.157 5.31c-2.789-1.583-5.577-2.375-8.366-2.375-1.955 0-3.4.317-4.334.95-.935.633-1.402 1.468-1.402 2.504s.54 1.806 1.617 2.31c1.078.503 2.724 1 4.938 1.49 2.3.546 4.183 1.093 5.65 1.64a9.355 9.355 0 0 1 3.773 2.59c1.05 1.18 1.574 2.777 1.574 4.792a8.258 8.258 0 0 1-1.445 4.727c-.963 1.425-2.407 2.554-4.334 3.389-1.926.835-4.27 1.252-7.03 1.252z" fill="#FFF" fill-rule="nonzero"></path><g fill="#FFF"><path d="M192.912 8.921l4.923 4.924a2.597 2.597 0 0 1-3.673 3.673l-4.923-4.924a2.597 2.597 0 1 1 3.673-3.673zM203.437 19.447l10.547 10.547a2.597 2.597 0 0 1-3.673 3.673L199.764 23.12a2.597 2.597 0 1 1 3.673-3.673z"></path><path d="M190.416 8.255L218.753.893A2.672 2.672 0 0 1 222 2.767a2.592 2.592 0 0 1-1.846 3.199l-28.338 7.362a2.672 2.672 0 0 1-3.247-1.875 2.592 2.592 0 0 1 1.847-3.198z"></path><path d="M209.592 31.104l7.363-28.337A2.592 2.592 0 0 1 220.153.92a2.672 2.672 0 0 1 1.875 3.247l-7.362 28.337a2.592 2.592 0 0 1-3.199 1.847 2.672 2.672 0 0 1-1.875-3.247z"></path></g><path d="M208.62 18.067l-10.236 10.235a2.643 2.643 0 1 1-3.738-3.738l10.236-10.235a2.643 2.643 0 0 1 3.738 3.738zM193.38 33.306l-1.54 1.54a2.643 2.643 0 1 1-3.738-3.738l1.54-1.54a2.643 2.643 0 0 1 3.738 3.738z" fill="#53B5FF"></path></g></svg>
                                </div>
                                <p>Nine out of ten doctors recommend Laracasts over competing brands. Come inside, see for yourself, and massively level up your development skills in the process.</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="footer_list">
                                <h3>LEARN</h3>
                                <ul>
                                    <li><a href="">Sign Up</a></li>
                                    <li><a href="">Sign In</a></li>
                                    <li><a href="">Pricing</a></li>
                                    <li><a href="">Series</a></li>
                                    <li><a href="">CreatorSeries</a></li>
                                    <li><a href="">Laravel Path</a></li>
                                    <li><a href="">Larabits</a></li>
                                    <li><a href="">Topics</a></li>
                                    <li><a href="">Teams</a></li>
                                    <li><a href="">Lifetime Accounts</a></li>
                                    <li><a href="">Commercial</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="footer_list">
                                <h3>DISCUSS</h3>
                                <ul>
                                    <li><a href="">Forum</a></li>
                                    <li><a href="">Podcast</a></li>
                                    <li><a href="">Blog</a></li>
                                    <li><a href="">Support</a></li>
                                    <li><a href="">Work With Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="footer_list">
                                <h3>EXTRAS</h3>
                                <ul>
                                    <li><a href="">Gift Certificates</a></li>
                                    <li><a href="">FAQ</a></li>
                                    <li><a href="">Assets</a></li>
                                    <li><a href="">Get a Job</a></li>
                                    <li><a href="">Privacy</a></li>
                                    <li><a href="">Terms</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center footer_bottom">
                        <div class="col-12">
                            <p>© Laracasts 2023. All rights reserved. Yes, all of them. That means you, Todd.
                            Proudly hosted with <a href="">Laravel Forge</a> and <a href="">DigitalOcean</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
