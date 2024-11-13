<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>لوحة التحكم</title>
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Almarai' rel='stylesheet'>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- CSS  -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

     <!-- Jquery -->
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <style>
        *{
            font-family:Almarai
        }

        .btn{
            background-color: #2C444E;
            border-color: #2C444E;
        }
        .btn:hover{
            background-color: #FFC801; /* Dark gray background */
        }
        .btn:active{
            background-color: #2C444E;
            border-color: #2C444E;
        }

        
    </style>
</head>

<body dir="rtl">
    <div id="app">
       
    <header>
        <nav class="navbar navbar-expand text-white" style="background-color: #385A64">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('dashboard')}}">
                    <img src="{{asset('images/lg.svg')}}" alt="Logo" width="146" height="43">
                </a>
                <div class="">
                    <ul class="navbar-nav ms-auto d-flex justify-content-start">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown ms-5" style="color: white">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle ms-5 text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-end" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('تسجيل خروج') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                        <!-- Authentication Links End -->
                </div>
            </div>


          
        </nav>
    </header>   
       
        <main>
            <!-- Sidebar --> 
            <div class="row">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 text-white" style="background-color: #385A64">
                    <div class="d-flex flex-column align-items-start align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-start align-items-sm-start pe-0 me-1" id="menu">
                            <li class="nav-item">
                                <a href="#" class="nav-link align-start text-white px-0">
                                    <i class="fs-4 bi-house text-white"></i> <span class="ms-1 d-none d-sm-inline me-2">الرئيسية</span>
                                </a>
                            </li>
                    
                            <li>
                                <a href="{{route('products')}}" class="nav-link px-0 align-middle text-white">
                                    <i class="fs-4 bi-table text-white"></i> <span class="ms-1 d-none d-sm-inline me-2">المنتجات</span></a>
                            </li>
                            

                            <li>
                                <a href="{{route('details')}}" class="nav-link px-0 align-middle text-white">
                                    <i class="fs-4 bi-grid text-white"></i> <span class="ms-1 d-none d-sm-inline me-2">تفاصيل المنتجات</span> </a>
                            </li>

                            <li>
                                <a href="{{route('orders')}}" class="nav-link px-0 align-middle text-white">
                                    <i class="fs-4 bi-border-width text-white"></i> <span class="ms-1 d-none d-sm-inline me-2">الطلبات</span> </a>
                            </li>

                            <li>
                                <a href="{{route('bills')}}" class="nav-link px-0 align-middle text-white">
                                    <i class="fs-4 bi-receipt-cutoff text-white"></i> <span class="ms-1 d-none d-sm-inline me-2">الفواتير</span> </a>
                            </li>
                        </ul>
                        <hr>
                       
                    </div>
                </div>

                <!-- Here content -->
                <div class="col-sm-8 mt-4">
                    @yield('content')
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer></footer>
        
    </div>


    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
