@extends('templete.dashboard')
@section('content')
<div class="row justify-content-center align-items-center">
    <div class="col-lg-6  border border-primary rounded">
        <form action="/quanli/taohocki" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="mahocki">Mã học kì</label>
                <input name="mahocki" type="text" class="form-control" id="mahocki">
            </div>
            <button type="submit" class="btn btn-primary m-2">Tạo</button>
        </form>
    </div>
</div>
@endsection