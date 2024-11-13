@extends('layouts.appdash')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
        <table class="table text-center">
        <thead>
            <tr>
                <th>رقم الطلب</th>
                <th>ايميل المستخدم</th>
                <th>اسم الكتاب</th>
                <th>السعر</th>
                <th>الحالة</th>
                <th>الإجراء</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order )
            <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->email}}</td>
                <td>{{$order->name}}</td>
                <td>{{$order->price}}</td>
                <td>{{$order->status}}</td>
                <td><a href="#"><i class="bi bi-pencil text-success"></i></a></td>
            </tr>
            
            @endforeach
          
            
            
         
        </tbody>



    </table>
        </div>
    </div>
</div>

@endsection