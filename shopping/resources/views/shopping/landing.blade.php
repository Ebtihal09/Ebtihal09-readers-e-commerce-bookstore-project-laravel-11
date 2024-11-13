@extends('layouts.appui')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6 align-self-center">
            <h1>قصص تُـــلهم، معارف تُبنـــى</h1>
            <p class="mt-1 fs-5">نؤمن بقوة الكتب في تغيير الحيوات وتوسيع الآفاق. لذا، نحرص على اختيار أفضل الإصدارات التي تثري تجربتك القرائية.</p>
            <a href="{{route('all_books')}}" class="btn text-white mt-3">تصفح الكتب<i class="bi bi-arrow-left me-2"></i></a>

        </div>
        <div class="col-6 mt-0 pt-0 d-flex justify-content-center">
            <img src="{{asset('images/books.jpg')}}" hight="450" width="450">

        </div>
    </div>
</div>
@endsection

@section('content2')
<!-- <div class="container-fluid bg-light">
    <div class="row mt-4">
       
        <div class="col-3">
            <a href="{{route('novels')}}">
                <div class="card p-1 mt-3 mb-3" style="background-color: #385A64;">
                    <div class="card-body text-center rounded">
                        <h5 class="fs-3 text-white">روايات</h5>
                    
                    </div>
                </div>
            </a>
        </div>

        <div class="col-3">
            <a href="{{route('selfDev')}}">
                <div class="card p-1 mt-3 mb-3" style="background-color: #385A64;">
                    <div class="card-body text-center rounded">
                        <h5 class="fs-3 text-white">تطوير ذات</h5>
                    </div>
                </div>
            </a>    
        </div>

        <div class="col-3">
            <a href="{{route('religious')}}">
                <div class="card p-1 mt-3 mb-3" style="background-color: #385A64;">
                    <div class="card-body text-center rounded">
                        <h5 class="fs-3 text-white">دينية</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-3">
            <a href="{{route('children')}}">
                <div class="card p-1 mt-3 mb-3" style="background-color: #385A64;">
                    <div class="card-body text-center rounded">
                        <h5 class="fs-3 text-white">اطفال</h5>
                    </div>
                </div>
            </a>
        </div>
        
        

          
        </div>
    
    

</div> -->


@endsection