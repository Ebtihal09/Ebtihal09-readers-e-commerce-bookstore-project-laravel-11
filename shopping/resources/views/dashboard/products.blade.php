@extends('layouts.appdash')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addproduct">إضافة منتج</button>
        </div>
    </div>
    <!-- modal add product -->
    <div class="modal" tabindex="-1" id="addproduct">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">اضافة منتج</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('add')}}" method="get">
                        <div class="row">
                            <div class="col">
                                <label for="productname">اسم الكتاب:</label>
                                <input type="text" name="productname" id="productname" class="form-control">
                            </div>

                            <div class="col">
                                <label for="productdesc">تصنيف الكتاب:</label>
                                <input type="text" name="productdesc" id="productdesc" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-success mt-2">حفظ</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- modal for delete -->
    <div class="modal" tabindex="-1" id="deletee">
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
                <button type="button" class="btn btn-danger" onclick="del()">حذف</button>
            </div>
            </div>
        </div>
    </div>

    <table class="table text-center">
        <thead>
            <tr>
                <th>الرقم</th>
                <th>اسم الكتاب</th>
                <th>التصنيف</th>
                <th colspan="2">الإجراء</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->description}}</td>
                <td><a href="#" onclick="test({{$item->id}})"><i class="bi bi-trash text-danger"></i></a></td>
                <td><a href="{{route('edit',['id'=>$item->id])}}"><i class="bi bi-pencil text-success"></i></a></td>
                <!-- <td><a href="{{route('edit',['id'=>$item->id])}}"><i class="bi bi-pencil text-success"></i></a></td> -->
            </tr>
            
            @endforeach
            
        </tbody>



    </table>

</div>

@endsection