@extends('layouts.appui')

@section('content')
<div class="cointainer-fluid d-flex justify-content-center align-items-center">
                     
    <div class="card p-2 " style="max-width: 700px;">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="{{ asset('storage/books_images/'.$book->image)}}" class="card-img-top rounded" height="321" width="40" alt="" >
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{$book->name}}</h5>
                <p class="card-text">{{$book->desc}}</p>
                <p class="card-text"><strong>{{$book->price}} SAR</strong></p>
                <div class="text-start">
                <a href="{{route('add_to_cart',['id'=>$book->id])}}" class="btn btn-primary rounded"><i class="bi bi-cart3 ms-2"></i>أضف إلى السلة</a>
                </div>
            </div>
            </div>
        </div>
    </div>
   
</div>
@endsection
