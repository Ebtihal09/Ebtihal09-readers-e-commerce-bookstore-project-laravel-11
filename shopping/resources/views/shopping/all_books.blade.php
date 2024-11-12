@extends('layouts.appui')

@section('content')
<div class="container-fluid mt-2 mb-2 ">
<div class="row">
    @foreach ($books as $book)
    
    <div class="col-3 mb-3">
        <div class="card p-3" style="width: 18rem;">
            <img src="{{ asset('storage/books_images/'.$book->image)}}" class="card-img-top rounded" height="321" width="40" alt="" >
            <div class="card-body">
                <h5 class="card-title">{{$book->name}}</h5>
                <strong class="text-body-secondary">السعر:</strong>
                <p>{{$book->price}} SAR</p>
                <!-- <p class="card-text"></p> -->
                <a href="{{route('books_details',['id'=>$book->id])}}" class="btn btn-primary">التفاصيل</a>
                <a href="{{route('add_to_cart',['id'=>$book->id])}}" class="btn btn-primary rounded"><i class="bi bi-cart3"></i></a>
            </div>
        </div>
    </div>

    @endforeach

</div>


</div>
@endsection