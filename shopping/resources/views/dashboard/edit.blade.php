@extends('layouts.appdash')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-8">
            <form action="{{route('update')}}" method="get">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <label for="name">اسم المنتج:</label>
                                <input type="text" name="name" id="name" class="form-control mt-1" value="{{$product->name}}">
                            </div>

                            <div class="col">
                                <label for="description">وصف المنتج:</label>
                                <input typr="text" name="description" id="description" class="form-control mt-1" value="{{$product->description}}">
                                <input type="hidden" name="id" value="{{$product->id}}">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <button type="submit" class="btn btn-info">حفظ</button>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection