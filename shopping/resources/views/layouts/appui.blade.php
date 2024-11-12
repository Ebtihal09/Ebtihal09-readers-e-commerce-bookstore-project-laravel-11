<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قــراء</title>

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
        a{
        text-decoration: none;
        color: black;
        } 
        *{
            font-family:Almarai
        } 

        /* Custom CSS to change the background color of dropdown items on hover */
        .dropdown-item:hover, .dropdown-item:focus {
            background-color: #FFC801; /* Light gray background */
            color: #000; /* Optional: Change text color if needed */
        }

        /* Custom CSS to change the background color of the active dropdown item */
        .dropdown-item.active, .dropdown-item:active {
            background-color: #FFC801; /* Dark gray background */
            color: #fff; /* Optional: Change text color if needed */
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
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid bg-light">
            
                <div class="">
                    <a class="navbar-brand" href="{{route('landing')}}">
                        <img src="{{asset('images/readers2.svg')}}" alt="Logo" width="156" height="53">
                    </a>
                </div>
            
                <form class="form-control d-flex justify-content-between bg-white" style="width: 30em;">
                    <input type="text" name="search" id="search" placeholder="أدخل كلمة البحث" style="border: none;">
                    <button type="submit" class="btn btn-sm text-white"><i class="bi bi-search"></i></button>
                </form>
            
                <div class="ms-2 d-flex justify-content-center align-items-center">
                    <!-- Authentication Links -->
                    @guest
                    <a class="ms-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fs-2 bi-person ms-1 info"></i>حسابي</a>
                      <ul class="dropdown-menu text-center">
                        @if (Route::has('login'))
                        <li>
                            <a class="dropdown-item info" href="{{ route('login') }}">{{ __('تسجيل دخول') }}</a>
                        </li>
                        @endif

                        <li><hr class="dropdown-divider"></li>
                        
                        @if (Route::has('register'))
                        <li>
                            <a class="dropdown-item info" href="{{ route('register') }}">{{ __('إنشاء حساب') }}</a>
                        </li>
                    </ul>

                    <a class="position-relative ms-3">
                        <i class="fs-4 bi-bag ms-1 info"></i>
                        السلة
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0</span>
                    </a>
                    @endif

                    @else
                      
                   
                    <li class="nav-item dropdown d-flex justify-content-center align-items-center">
                        <a id="navbarDropdown" class="nav-link ms-3" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <i class="fs-2 bi-person ms-1 info"></i>
                            {{ Auth::user()->name }}
                        </a>

                        <a class="position-relative" href="{{route('cart_details')}}">
                            <i class="fs-4 bi-bag ms-1 info"></i>
                            السلة
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{Session::get('counter')}}</span>
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
              
                     
                </div>
                
            

            </div>
        </nav>

        <nav class="navbar navbar-expand-lg border-bottom border-body ccolor">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav nav-underline">
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="{{route('landing')}}">الرئيسية</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">تصنيفات الكتب</a>
                            <ul class="dropdown-menu text-end">
                                <li><a class="dropdown-item" href="#"> تطوير الذات</a></li>
                                <li><a class="dropdown-item" href="#"> روائية</a></li>
                                <li><a class="dropdown-item" href="#"> دينية</a></li>
                                <li><a class="dropdown-item" href="#"> أطفال</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">دور النشر</a>
                            <ul class="dropdown-menu text-end">
                                <li><a class="dropdown-item" href="#">دار تشكيل</a></li>
                                <li><a class="dropdown-item" href="#">دار عصير الكتب</a></li>
                                <li><a class="dropdown-item" href="#">دار الحوار</a></li>
                                <li><a class="dropdown-item" href="#">دار المجرة</a></li>
                                <li><a class="dropdown-item" href="#">دار سما</a></li>
                                <li><a class="dropdown-item" href="#">دار المنى</a></li>
                                <li><a class="dropdown-item" href="#">دار الساقي</a></li>
                                
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">صدر حديثًا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">كتب مخفضة</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <main class="py-4 bg-white">
        @yield('content')
        @yield('content2')
    </main>

  
    <footer class="bg-light">
        <div class="container-fluid pe-5">
            <div class="row">
                <div class="col-6">
                    <a class="" href="{{route('landing')}}">
                        <img src="{{asset('images/readers2.svg')}}" alt="Logo" width="256" height="153">
                    </a>
                    <p class="paragraph ps-5">
                        متجر قراء للكتب العربية، رحلتك نحو عوالم الأدب والثقافة،
                        نجمع لكم آخر الإصدارات وأروع الأعمال من كافة أرجاء الوطن العربي والعالم.
                        نحن جسركم المعرفي الذي يوصلكم بكنوز الكلمات والحروف،
                        كل ذلك تحت سقف واحد يضم تنوعاً لا مثيل له من الكتب التي تلبي كل الأذواق والاهتمامات.
                    </p>
                </div>

                <div class="col-3 mt-5">
                    <h4 class="mb-3">معلومات</h4>
                    <li class="mt-2"><a href="#" class="info">الأسئلة الشائعة</a></li>
                    <li class="mt-2"><a href="#" class="info">سياسة الخصوصية والدفع</a></li>
                    <li class="mt-2"><a href="#" class="info">شروط الخدمة والاسترجاع</a></li>
                    <li class="mt-2"><a href="#" class="info">شهادة ضريبة القيمة المضافة</a></li>
                </div>

                <div class="col-3 mt-5">
                    <h4 class="mb-3">تابعنا على</h4>
                    <a href="#" class="text-decoration-none text-dark"><i class="fs-3 bi-instagram ms-3 info"></i></a>
                    <a href="#" class="text-decoration-none text-dark"><i class="fs-3 bi-twitter-x ms-3 info"></i></a>
                    <a href="#" class="text-decoration-none text-dark"><i class="fs-3 bi-snapchat ms-3 info"></i></a>
                    <a href="#" class="text-decoration-none text-dark"><i class="fs-3 bi-tiktok ms-3 info"></i></a>
                    
                </div>
            </div>
            <hr>
            <div class="row text-center">
                <p>جميع الحقوق محفوظة <i class="bi bi-c-circle"></i> متجر قُــراء</p>
            </div>
        </div>
    </footer>

    <script src="{{asset('js/main.js')}}"></script>
</div>
</body>
</html>