@extends('layouts.appdash')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
        <table class="table text-center">
        <thead>
            <tr>
                <th>رقم الطلب</th>
                <th>الإجمالي</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invoice as $in )
            <tr>
                <td>{{$in->id}}</td>
                <td>{{$in->total}}</td>
            </tr>
            @endforeach
        </tbody>



    </table>
        </div>
    </div>
</div>
@endsection