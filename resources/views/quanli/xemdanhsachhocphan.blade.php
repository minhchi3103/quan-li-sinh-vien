@extends('templete.dashboard')
@section('content')

@if (isset($list))
{{$count=0?"":""}}
<table class="table">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Mã học phần</th>
            <th scope="col">Tên học phần</th>
            <th scope="col">Số tiết</th>
            <th scope="col">#</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($list as $item)
        <tr>
            <th scope="row">{{++$count}}</th>
            <td>{{$item->mahocphan}}</td>
            <td>{{$item->tenhocphan}}</td>
            <td>{{$item->sotiet}}</td>
        <td><a href="/quanli/xoahocphan/{{$item->mahocphan}}">Xóa học phần</a></td>
        </tr>
        @endforeach
        @if ($count==0)
        <tr>
                <td colspan="3">Không tìm thấy học phần nào. <a href="/quanli/taohocphan">Tạo học phần</a></th>
                
            </tr>
        @endif
    </tbody>
</table>
@endif
@endsection