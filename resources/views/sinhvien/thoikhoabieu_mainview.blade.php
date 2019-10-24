@extends('templete.dashboard')
@section('content')
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-6">
            <div class='form row border border-primary rounded p-1'>
                    {{csrf_field()}}
                    <div class="form-group col-8">
                        <label for="username">Xem thời khóa biểu trong học kì</label>
                        <select name="maso" type="text" class="form-control" id="username">
                            @foreach ($list as $item)
                        <option value="{{$item->mahocki}}">{{$item->mahocki}}</option>
                            @endforeach
                        </select>
                    </div>
                <button class="btn btn-primary col-4" onclick="window.location.href ='{{Request::url()}}/'+$('#username').val()">Xem</button>
                </div>
        </div>
    </div>
@endsection