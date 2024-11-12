@extends('layouts.appdash')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <form action="{{route('updatedetails')}}" method="get" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-body">
                        <div class="row mt-3">
                            <div class="col">
                                <label for="price" class="form-label">سعر الكتاب</label>
                                <input type="text" class="form-control" id="price" name="price" value="{{$productx->price}}">
                                <input type="hidden" name="id" value="{{$productx->id}}">
                            </div>
                            <div class="col">
                                <label for="gty" class="form-label">الكمية </label>
                                <input type="text" class="form-control" id="gty" name="gty" value="{{$productx->gty}}">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <label for="desc" class="form-label">تصنيف الكتاب </label>
                                <input type="text" class="form-control" id="desc" name="desc" value="{{$productx->description}}">
                            </div>

                            <div class="col">
                                <label for="d" class="form-label">وصف الكتاب </label>
                                <textarea type="text" placeholder="وصف الكتاب ..." class="form-control" id="d" name="desctwo"></textarea>
                            </div>
                            
                        </div>

                        <div class="row mt-2">
                            <div class="col text-center">
                                <button type="submit" class="btn btn-primary">حفظ</button>
                            </div>
                        </div>
                    </div> 
                </div>   
            </form>
        </div>
    </div>
</div>
@endsection