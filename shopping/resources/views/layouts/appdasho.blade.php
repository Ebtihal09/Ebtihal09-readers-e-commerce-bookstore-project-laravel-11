<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSS file -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Almarai' rel='stylesheet'>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        *{
            font-family:Almarai
        }
    </style>
</head>

<body dir="rtl">
    <div id="app">

        <div class="row">
            <!-- sidebar -->
            <div class="col-2 bg-dark">
                <div class="d-flex flex-column align-items-start text-white min-vh-100">
                    <a href="/" class="pe-3">
                        <img src="{{ asset('images/vector (2).svg') }}" alt="Logo" height="50px" width="170px">
                    </a>
                    
                    <ul class="nav nav-pills flex-column mb-0 align-items-start ps-0 ms-0 pe-3 me-3" id="menu">
                            <li class="nav-item">
                                <a href="#" class="nav-link align-start text-white px-0">
                                    <i class="fs-4 bi-house text-white"></i> <span class="ms-1 d-none d-sm-inline me-2">الرئيسية</span>
                                </a>
                            </li>
                    
                            <li class="nav-item">
                                <a href="{{route('products')}}" class="nav-link px-0 align-middle text-white">
                                    <i class="fs-4 bi-table text-white"></i> <span class="ms-1 d-none d-sm-inline me-2">المنتجات</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white">
                                    <i class="fs-4 bi-bootstrap text-white"></i> <span class="ms-1 d-none d-sm-inline me-2">Bootstrap</span></a>
                                <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white">
                                    <i class="fs-4 bi-grid text-white"></i> <span class="ms-1 d-none d-sm-inline me-2">Products</span> </a>
                                    <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                        <li class="w-100">
                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
                                        </li>
                                    </ul>
                            </li>

                            <li>
                                <a href="#" class="nav-link px-0 align-middle text-white">
                                    <i class="fs-4 bi-people text-white"></i> <span class="ms-1 d-none d-sm-inline me-2">Customers</span> </a>
                            </li>
                        </ul>

                </div>



            </div>
  
            <div class="col-10 me-0 pe-0">
                <!-- topbar -->
                <div class="row">
                    <header>
                        <ul class="nav nav-tabs justify-content-end">
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="بحث" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">بحث</button>
                            </form>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Active</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                            </li> 
                        </ul>
                    </header>
                </div>

                <!-- content -->
                <div class="row">
                     <main>
                        <div class="col-sm-8 m-2">
                            @yield('content')
                        </div>
                    </main>
                </div>

                <!-- footer -->
                <div class="row">

                </div>
            </div>

        </div>
       
 

       
        
    </div>
</body>
</html>
