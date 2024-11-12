@extends('layouts.appui')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <form action="" method="post">
                @csrf
                <div class="row">
                    <div class="col">
                        <label for="name">الاسم:</label>
                        <input type="text" name="name" id="name" class="form-control mt-1">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="email">البريد الإلكتروني:</label>
                        <input type="email" name="email" id="email" class="form-control mt-1">
                    </div>
                </div>

                
                <div class="row">
                    <div class="col">
                        <label for="phone">رقم الجوال:</label>
                        <input type="tel" name="phone" id="phone" class="form-control mt-1">
                    </div>
                </div>

                
                <div class="row">
                    <div class="col">
                        <label for="address">البريد الإلكتروني:</label>
                        <input type="text" name="address" id="address" class="form-control mt-1">
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <a class="btn text-white mt-3 ps-3 pe-3" href="{{route('order')}}">إرسال الطلب</a>

                </div>
                

            </form>
        </div>
    </div>
</div>
@endsection