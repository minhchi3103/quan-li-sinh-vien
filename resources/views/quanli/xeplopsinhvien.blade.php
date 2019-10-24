@extends('templete.dashboard')
@section('content')
<div class="row justify-content-center align-items-center">
    <div class="col-lg-8">
        <form action="{{Request::url()}}" method="POST">
            {{csrf_field()}}
            <div class="row">
            <div class="col-6">
                Danh sách sinh viên
                <hr>
                @if (count($dssv)<1)
                    <p>"Không có sinh viên nào, vui lòng nhập thông tin sinh viên"</p>
                @endif
                @foreach ($dssv as $item)
                <div class="form-check">
                        <input class="form-check-input" name="masosinhvien[]" type="checkbox" value="{{$item->maso}}" id="{{$item->maso}}">
                        <label class="form-check-label" for="{{$item->maso}}">
                                {{$item->maso}}
                        </label>
                      </div>
                @endforeach
            </div>
            <div class="col-6">
                    Danh sách Lớp học
                    <hr>
                    @if (count($dslh)<1)
                    <p>"Không có lớp học nào trong học kì đang chọn, vui lòng tạo lớp mới trong học kì này"</p>
                @endif
                    @foreach ($dslh as $item)
                    <div class="form-check">
                            <input class="form-check-input" name="idlophoc[]" type="checkbox" value="{{$item->id}}" id="{{$item->id}}">
                            <label class="form-check-label" for="{{$item->id}}">
                                    {{$item->malophoc}}-{{$item->mahocphan}}-GV:{{$item->masogvphutrach}}-TKB:{{$item->lichhoc}}-SLSV:{{$item->soluongsinhvien}}
                            </label>
                          </div>
                    @endforeach
            </div>
            <button type="submit" class="btn btn-primary m-2">Tạo</button>
            </div>
        </form>
    </div>
</div>
@endsection