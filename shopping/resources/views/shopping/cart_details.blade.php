@extends('layouts.appui')

@section('content')
<div class="container">

    <div class="row mt-5">
        <h2>سلة الشراء</h2>
        <div class="col-8">
            <table class="table table-sm table-light">
                <thead>
                    <tr>
                        <th colspan="2">اسم الكتاب</th>
                        <th>الكمية</th>
                        <th>سعر الكتاب</th>
                        <th>الاجراء</th>
                    </tr>
                </thead>
                <tbody class="text-center align-middle">
                    @foreach ($product as $pro)
                    <tr>
                        <td><img src="{{ asset('storage/books_images/'.$pro->image)}}" height="160" width="110" alt="" ></td>
                        <td class="text-end">{{$pro->name}}</td>
                        <td class="text-end">{{$pro->gty}}</td>
                        <td class="text-end">{{$pro->price}}</td>
                        <td><a onclick="delete_item({{$pro->id}})"><i class="fs-4 bi-trash text-danger"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-4">
            <div class="card">
                <div class="card-header">الفاتورة</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <strong>الإجمالي (بدون ضريبة):
                                    <span class="me-2 fw-normal">{{$total}} SAR</span>
                                </strong>
                                
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col">
                                <strong>قيمة الضريبة المضافة:
                                    <span class="me-2 fw-normal">{{$tax}} SAR</span>
                                </strong>
                            </div>
                        </div>

                        <div class="row mt-2 mb-4">
                            <div class="col">
                                <strong>الإجمالي النهائي:
                                    <span class="me-2 fw-normal">{{$final}} SAR</span>
                                </strong>
                            </div>
                        </div>


                        <div class="card-footer">
                            <div class="col d-flex justify-content-center">
                               

                                <a class="btn text-white ms-2" href="{{route('order')}}">اتمام الطلب</a>
                       
                                <a class="btn text-white" href="{{route('all_books')}}">مواصلة التسوق</a>
                          
                        </div>

                    </div>
                </div>
          
        </div>
    </div>




     
</div>


@endsection
