@extends('layouts.appdash')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <form action="{{route('adddetails')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <label for="product_no"> اختر الكتاب</label>
                                <select class="form-select" name="productID" id="product_no">
                                    @foreach ($product as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <label for="price" class="form-label">سعر الكتاب</label>
                                <input type="text" class="form-control" id="price" name="price">
                            </div>
                            <div class="col">
                                <label for="price" class="form-label">الكمية </label>
                                <input type="text" class="form-control" id="price" name="gty">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <label for="desc" class="form-label">تصنيف الكتاب</label>
                                <input type="text" class="form-control" id="desc" name="desc">
                            </div>
                            <div class="col">
                                <label for="img" class="form-label">صورة الكتاب </label>
                                <input type="file" class="form-control" id="img" name="img">
                            </div>
                        </div>

                        <div class="row mt-2">
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
    

    <div class="row">
        <div class="col">
            <div class="row mt-5">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th>رقم المنتج</th>
                                    <th>اسم المنتج</th>
                                    <th>سعر المنتج</th>
                                    <th>الكمية</th>
                                    <th>الصورة</th>
                                    <th>التصنيف</th>
                                    <th>الوصف</th>
                                    <th colspan="2">الاجراء</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($producdetails as $product)
                                <tr>
                                    <td>{{$product->id_product}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->gty}}</td>
                                    <td>{{$product->image}}</td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->desc}}</td>
                                    <td><a onclick="delete_details({{$product->id}})"><i class="bi bi-trash text-danger"></i></a></td>
                                    <td><a href="{{route('edit_details',['id'=>$product->id])}}"><i class="bi bi-pencil text-success"></i></a></td>
                                    
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>


    <!-- modal for delete -->
    <div class="modal" tabindex="-1" id="delete_details">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">رسالة تأكيد</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>هل بالفعل تريد حذف هذا السجل؟</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                <button type="button" class="btn btn-danger" onclick="confirm_delete_details()">حذف</button>
            </div>
            </div>
        </div>
    </div>


</div>
@endsection