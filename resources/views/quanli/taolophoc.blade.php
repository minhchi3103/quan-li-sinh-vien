@extends('templete.dashboard')
@section('content')
<div class="row justify-content-center align-items-center">
    <div class="col-lg-6 border border-primary rounded">
        <form action="/quanli/taolophoc" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="malophoc">Mã lớp học</label>
                <input name="malophoc" type="text" class="form-control" id="malophoc" required>
            </div>
            <div class="form-group">
                <label for="mahocki">Mã học kì</label>
                <select name="mahocki" type="text" class="form-control" id="mahocki" required>
                @foreach ($dshk as $item)
                <option value="{{$item->mahocki}}">{{$item->mahocki}}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="mahocphan">Mã học phần</label>
                <select name="mahocphan" type="text" class="form-control" id="mahocphan" required>
                        @foreach ($dshp as $item)
                <option value="{{$item->mahocphan}}">{{$item->mahocphan}} - {{$item->tenhocphan}}</option>
                        @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="masogvphutrach">Giảng viên phụ trách</label>
                <select name="masogvphutrach" type="text" class="form-control" id="masogvphutrach" required>
                        @foreach ($dsgv as $item)
                        <option value="{{$item->maso}}">{{$item->maso}}</option>
                                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="lichhoc">Ngày học</label>
                <select name="lichhoc" type="text" class="form-control" id="lichhoc" required>
                    <option value="Thứ 2">Thứ 2</option>
                    <option value="Thứ 3">Thứ 3</option>
                    <option value="Thứ 4">Thứ 4</option>
                    <option value="Thứ 5">Thứ 5</option>
                    <option value="Thứ 6">Thứ 6</option>
                    <option value="Thứ 7">Thứ 7</option>
                    <option value="Chủ nhật">Chủ nhật</option>
                </select>
            </div>
            <div class="form-group">
                    <label for="tietbatdau">Tiết bắt đầu</label>
                    <input name="tietbatdau" type="number" min="1" value="1" class="form-control col-2" id="tietbatdau" required>
                </div>
                <div class="form-group">
                        <label for="sotiet">Số tiết</label>
                        <input name="sotiet" aria-describedby="sotietHelp" type="number" min="1" max="12" value="1" class="form-control col-2" id="sotiet" required>
                        <small id="sotietHelp" class="form-text text-muted">VD: Nếu học liên tục 4 tiết thì nhập 4</small>
                    </div>
            <div class="form-group">
                <label for="soluongsinhvien">Số lượng sinh viên</label>
                <input name="soluongsinhvien" type="number" min="1" value="1" class="form-control col-2" id="soluongsinhvien" required>
            </div>
            <button type="submit" class="btn btn-primary m-2">Tạo</button>
        </form>
    </div>
</div>
@endsection
