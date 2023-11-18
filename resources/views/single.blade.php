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
        </div>

        
        <div id="single-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="single_left_side">
                            <img class="mb-3" src="{{ asset('img/1111.jpg') }}" alt="">
                            <h5 class="instructor m-0">
                                <span>Your Instructor Today</span>
                                <span class="instructor-line"></span>
                            </h5>
                            <h1 class="instructor_name mt-2 mb-2">Arif Bin A. Aziz</h1>
                            <div class="instructor_link mb-2">
                                <a href="https://twitter.com/themsaid" target="_blank"><svg width="20" height="32" viewBox="0 0 36 36" class="text-grey-600 transition-all hover:text-blue"><path class="fill-current" fill-rule="evenodd" d="M18 0C8.075 0 0 8.075 0 18c0 9.924 8.075 18 18 18 9.924 0 18-8.076 18-18 0-9.925-8.074-18-18-18zm8.03 13.88c.008.179.012.358.012.538 0 5.475-4.166 11.786-11.788 11.786-2.34 0-4.518-.684-6.351-1.86.324.039.654.058.988.058 1.942 0 3.728-.663 5.146-1.773-1.813-.034-3.343-1.231-3.87-2.878.252.048.512.075.778.075.378 0 .745-.05 1.092-.145-1.895-.38-3.323-2.054-3.323-4.062l.001-.052c.558.31 1.197.496 1.876.517-1.111-.741-1.843-2.01-1.843-3.447 0-.76.204-1.472.56-2.084 2.043 2.507 5.097 4.156 8.54 4.33-.071-.304-.107-.62-.107-.945 0-2.287 1.855-4.143 4.142-4.143 1.192 0 2.268.504 3.025 1.308.944-.185 1.829-.529 2.631-1.005-.311.968-.966 1.779-1.824 2.292.84-.1 1.64-.322 2.38-.652-.553.83-1.255 1.56-2.065 2.142z"></path></svg></a><a href="https://github.com/themsaid" target="_blank"><svg width="20" height="29" viewBox="0 0 30 29" class="mr-3 text-grey-600 transition-all hover:text-blue"><path class="fill-current" fill-rule="nonzero" d="M27.959 7.434a14.866 14.866 0 0 0-5.453-5.414C20.21.69 17.703.025 14.984.025c-2.718 0-5.226.665-7.521 1.995A14.864 14.864 0 0 0 2.01 7.434C.67 9.714 0 12.202 0 14.901c0 3.242.953 6.156 2.858 8.746 1.906 2.589 4.367 4.38 7.385 5.375.351.064.611.019.78-.136a.755.755 0 0 0 .254-.58l-.01-1.047c-.007-.658-.01-1.233-.01-1.723l-.448.077a5.765 5.765 0 0 1-1.083.068 8.308 8.308 0 0 1-1.356-.136 3.04 3.04 0 0 1-1.308-.58c-.403-.304-.689-.701-.858-1.192l-.195-.445a4.834 4.834 0 0 0-.614-.988c-.28-.362-.563-.607-.85-.736l-.136-.097a1.428 1.428 0 0 1-.253-.233 1.062 1.062 0 0 1-.176-.271c-.039-.09-.007-.165.098-.223.104-.059.292-.087.566-.087l.39.058c.26.052.582.206.965.465.384.258.7.594.947 1.007.299.53.66.933 1.082 1.21.423.278.85.417 1.278.417.43 0 .8-.032 1.112-.097a3.9 3.9 0 0 0 .878-.29c.117-.866.436-1.53.956-1.996a13.447 13.447 0 0 1-2-.348 7.995 7.995 0 0 1-1.833-.756 5.244 5.244 0 0 1-1.571-1.298c-.416-.516-.758-1.195-1.024-2.034-.267-.84-.4-1.808-.4-2.905 0-1.563.514-2.893 1.541-3.99-.481-1.176-.436-2.493.137-3.952.377-.116.936-.03 1.678.261.741.291 1.284.54 1.629.746.345.207.621.381.83.523a13.948 13.948 0 0 1 3.745-.503c1.288 0 2.537.168 3.747.503l.741-.464c.507-.31 1.106-.595 1.795-.853.69-.258 1.216-.33 1.58-.213.586 1.46.638 2.777.156 3.951 1.028 1.098 1.542 2.428 1.542 3.99 0 1.099-.134 2.07-.4 2.916-.267.846-.611 1.524-1.034 2.034-.423.51-.95.94-1.58 1.288a8.01 8.01 0 0 1-1.834.756c-.592.155-1.259.271-2 .349.676.58 1.014 1.498 1.014 2.75v4.087c0 .232.081.426.244.58.163.155.42.2.77.136 3.019-.994 5.48-2.786 7.386-5.375 1.905-2.59 2.858-5.504 2.858-8.746 0-2.698-.671-5.187-2.01-7.466z"></path></svg></a>
                            </div>
                            <p class="instructor_summary mb-2">I'm a Laracasts instructor, and formerly helped build Laravel with Taylor Otwell - working on Forge, Envoyer, Spark, Vapor, Telescope, and Horizon.</p>
                            <p class="instructor_button">
                                <a class="mb-3" href="">
                                    <span> More Series From Me</span>
                                </a>
                                <a href="" target="_blank">
                                    <span>Visit My Website</span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="single_right_side">
                            <h1 class="course_title">Load Balance a Laravel App</h1>
                            <div class="course_category mt-3 mb-3">
                                <a  href="#">DevOps Category </a>
                            </div>
                            <div class="course_decription">
                                <p>A load balancer serves as the single entry point to your application from the internet. It distributes incoming traffic across multiple targets, which could be EC2 instances or Lambda functions.</p>
                                <p>In this course, we will distribute traffic across two EC2 instances located in different availability zones. This increases the availability of your applications and allows you to easily add or remove instances at any time to increase or decrease capacity.</p>
                            </div>
                            <div class="course_play_button mt-4 mb-4">
                                <a href="">
                                    <svg width="15" height="15" viewBox="0 0 15 15" class="mr-2"><g fill="none" fill-rule="evenodd"><path d="M-1-1h18v18H-1z"></path><path class="fill-current" d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"></path></g></svg>
                                    <span class="">Play Series</span>
                                </a>
                                <button class="Watchlist_button ml-3">
                                    <svg width="12" viewBox="0 0 8 10" class="fill-current mr-2 inline-block scale-75"><path fill-rule="nonzero" d="M7.092 0H.941C.44 0 0 .389 0 .849v8.583c0 .154.045.282.119.381a.469.469 0 0 0 .38.187c.143 0 .295-.06.435-.173l2.753-2.204a.54.54 0 0 1 .334-.108.54.54 0 0 1 .334.108l2.743 2.203a.683.683 0 0 0 .425.174C7.765 10 8 9.824 8 9.432V.849C8 .389 7.593 0 7.092 0z"></path></svg>
                                    <span class="text-wrap inline-block flex-shrink-0">Add to Watchlist</span>
                                </button>
                            </div>
                            <div class="course_time">
                                <div>
                                    <svg width="13" viewBox="0 0 9 12" class="mr-2">
                                    <g fill="none" fill-rule="evenodd">
                                        <g class="fill-current">
                                        <g>
                                            <g>
                                            <g>
                                                <path d="M2.858 5.15v4.415c0 .197-.11.371-.273.436-.231.092-.51.14-.808.14-.855 0-1.775-.396-1.775-1.266v-5.65c-.02-.389.1-1.074.676-1.445C.945 1.607 2.348.589 3.052.074c.125-.092.286-.098.417-.018.132.081.214.237.214.406v.669c0 .255-.183.462-.41.462-.175 0-.325-.125-.383-.302-.636.462-1.574 1.14-1.806 1.29-.21.136-.255.385-.264.52 0 .151.029.27.081.335.145.18.63.068 1.157-.29C2.566 2.802 5.067.92 5.092.902c.126-.095.287-.104.42-.023.133.08.216.237.216.408v.052c0 .155-.068.299-.182.385 0 0-1.736 1.31-1.89 1.42-.589.428-.798.953-.798 2.005zM9 2.92v5.998c0 .158-.072.306-.191.39 0 0-2.385 2.092-2.869 2.425-.254.175-.578.267-.936.267-.85 0-1.73-.52-1.73-1.389V4.878l.001-.006c.008-.338.078-.82.635-1.285.334-.278 2.321-1.809 2.406-1.873.125-.097.288-.107.421-.027.134.08.218.237.218.408v.67c0 .254-.183.461-.409.461-.169 0-.314-.115-.376-.28-.635.49-1.566 1.212-1.775 1.385-.263.22-.298.365-.303.551.001.138.034.243.101.313.209.216.77.125 1.324-.25.41-.278 2.176-1.819 2.822-2.389.124-.108.29-.128.431-.05.14.077.23.237.23.414zm-.818 2.059L6.137 6.77v.924l2.045-1.792v-.924z" transform="translate(-890.000000, -316.000000) translate(774.000000, 311.000000) translate(116.000000, 4.000000) translate(0.000000, 1.000000)"></path>
                                            </g>
                                            </g>
                                        </g>
                                        </g>
                                    </g>
                                    </svg> 6 episodes
                                </div>
                                <div>
                                    <svg width="13" viewBox="0 0 10 10" class="mr-2">
                                    <g fill="none" fill-rule="evenodd">
                                        <g>
                                        <g>
                                            <g>
                                            <g>
                                                <path class="fill-current" d="M5 2C2.25 2 0 4.25 0 7s2.25 5 5 5 5-2.25 5-5-2.25-5-5-5zm2.282 6.923L4.615 7.318v-3.01h.77v2.608l2.307 1.355-.41.652z" transform="translate(-978.000000, -378.000000) translate(330.000000, 364.000000) translate(444.000000, 8.000000) translate(204.000000, 4.000000)"></path>
                                            </g>
                                            </g>
                                        </g>
                                        </g>
                                    </g>
                                    </svg>
                                    <span class="text-xs">38m</span>
                                </div>
                                <div class="course_bar">
                                    <div class="difficulty-meter">
                                        <span class="block rounded bg-white" style="width: 5px; height: 11px;"></span>
                                        <span class="block rounded bg-white" style="width: 5px; height: 11px;"></span>
                                        <span class="block rounded bg-white/25" style="width: 5px; height: 11px;"></span>
                                    </div>
                                    <span class="text-xs font-medium mobile:text-left">Intermediate</span>
                                </div>
                            </div>
                        </div>

                        <div class="course_content_area">
                            <div class="row course_content_lock m-0 mb-4">
                                <div class="col-2 my-auto text-center">
                                    <div class="lock_or_number"><svg width="30" viewBox="0 0 15 15" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.787 4.305a2.314 2.314 0 0 0-4.622 0H4.063a3.415 3.415 0 0 1 6.827 0H9.787zM4.283 4.966A1.983 1.983 0 0 0 2.3 6.95v5.068C2.3 13.112 3.188 14 4.283 14h6.39a1.983 1.983 0 0 0 1.983-1.983V6.95a1.983 1.983 0 0 0-1.983-1.983h-6.39zm3.195 6.34a1.822 1.822 0 1 0 0-3.645 1.822 1.822 0 0 0 0 3.644z" fill="#fff"></path></svg>
                                    </div>
                                </div>
                                <div class="col-10 my-auto">
                                    <div class="course_card_content">
                                        <div>
                                            <a href="#">Configure the Network</a>
                                            <p class="clamp two-lines font-normal">Let us begin by creating the VPC in which our servers and load balancer will be placed.</p>
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
                            </div><!--item-->
                            <div class="row course_content_lock m-0 mb-4">
                                <div class="col-2 my-auto text-center">
                                    <div class="lock_or_number"><svg width="30" viewBox="0 0 15 15" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.787 4.305a2.314 2.314 0 0 0-4.622 0H4.063a3.415 3.415 0 0 1 6.827 0H9.787zM4.283 4.966A1.983 1.983 0 0 0 2.3 6.95v5.068C2.3 13.112 3.188 14 4.283 14h6.39a1.983 1.983 0 0 0 1.983-1.983V6.95a1.983 1.983 0 0 0-1.983-1.983h-6.39zm3.195 6.34a1.822 1.822 0 1 0 0-3.645 1.822 1.822 0 0 0 0 3.644z" fill="#fff"></path></svg>
                                    </div>
                                </div>
                                <div class="col-10 my-auto">
                                    <div class="course_card_content">
                                        <div>
                                            <a href="#">Configure the Network</a>
                                            <p class="clamp two-lines font-normal">Let us begin by creating the VPC in which our servers and load balancer will be placed.</p>
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
                            </div><!--item-->
                            <div class="row course_content_lock m-0 mb-4">
                                <div class="col-2 my-auto text-center">
                                    <div class="lock_or_number"><svg width="30" viewBox="0 0 15 15" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.787 4.305a2.314 2.314 0 0 0-4.622 0H4.063a3.415 3.415 0 0 1 6.827 0H9.787zM4.283 4.966A1.983 1.983 0 0 0 2.3 6.95v5.068C2.3 13.112 3.188 14 4.283 14h6.39a1.983 1.983 0 0 0 1.983-1.983V6.95a1.983 1.983 0 0 0-1.983-1.983h-6.39zm3.195 6.34a1.822 1.822 0 1 0 0-3.645 1.822 1.822 0 0 0 0 3.644z" fill="#fff"></path></svg>
                                    </div>
                                </div>
                                <div class="col-10 my-auto">
                                    <div class="course_card_content">
                                        <div>
                                            <a href="#">Configure the Network</a>
                                            <p class="clamp two-lines font-normal">Let us begin by creating the VPC in which our servers and load balancer will be placed.</p>
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
                            </div><!--item-->
                            <div class="row course_content_lock m-0 mb-4">
                                <div class="col-2 my-auto text-center">
                                    <div class="lock_or_number"><svg width="30" viewBox="0 0 15 15" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.787 4.305a2.314 2.314 0 0 0-4.622 0H4.063a3.415 3.415 0 0 1 6.827 0H9.787zM4.283 4.966A1.983 1.983 0 0 0 2.3 6.95v5.068C2.3 13.112 3.188 14 4.283 14h6.39a1.983 1.983 0 0 0 1.983-1.983V6.95a1.983 1.983 0 0 0-1.983-1.983h-6.39zm3.195 6.34a1.822 1.822 0 1 0 0-3.645 1.822 1.822 0 0 0 0 3.644z" fill="#fff"></path></svg>
                                    </div>
                                </div>
                                <div class="col-10 my-auto">
                                    <div class="course_card_content">
                                        <div>
                                            <a href="#">Configure the Network</a>
                                            <p class="clamp two-lines font-normal">Let us begin by creating the VPC in which our servers and load balancer will be placed.</p>
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
                            </div><!--item-->
                            <div class="row course_content_lock m-0 mb-4">
                                <div class="col-2 my-auto text-center">
                                    <div class="lock_or_number"><svg width="30" viewBox="0 0 15 15" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.787 4.305a2.314 2.314 0 0 0-4.622 0H4.063a3.415 3.415 0 0 1 6.827 0H9.787zM4.283 4.966A1.983 1.983 0 0 0 2.3 6.95v5.068C2.3 13.112 3.188 14 4.283 14h6.39a1.983 1.983 0 0 0 1.983-1.983V6.95a1.983 1.983 0 0 0-1.983-1.983h-6.39zm3.195 6.34a1.822 1.822 0 1 0 0-3.645 1.822 1.822 0 0 0 0 3.644z" fill="#fff"></path></svg>
                                    </div>
                                </div>
                                <div class="col-10 my-auto">
                                    <div class="course_card_content">
                                        <div>
                                            <a href="#">Configure the Network</a>
                                            <p class="clamp two-lines font-normal">Let us begin by creating the VPC in which our servers and load balancer will be placed.</p>
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
                            </div><!--item-->
                            <div class="row course_content_lock m-0 mb-4">
                                <div class="col-2 my-auto text-center">
                                    <div class="lock_or_number"><svg width="30" viewBox="0 0 15 15" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.787 4.305a2.314 2.314 0 0 0-4.622 0H4.063a3.415 3.415 0 0 1 6.827 0H9.787zM4.283 4.966A1.983 1.983 0 0 0 2.3 6.95v5.068C2.3 13.112 3.188 14 4.283 14h6.39a1.983 1.983 0 0 0 1.983-1.983V6.95a1.983 1.983 0 0 0-1.983-1.983h-6.39zm3.195 6.34a1.822 1.822 0 1 0 0-3.645 1.822 1.822 0 0 0 0 3.644z" fill="#fff"></path></svg>
                                    </div>
                                </div>
                                <div class="col-10 my-auto">
                                    <div class="course_card_content">
                                        <div>
                                            <a href="#">Configure the Network</a>
                                            <p class="clamp two-lines font-normal">Let us begin by creating the VPC in which our servers and load balancer will be placed.</p>
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
                            </div><!--item-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
