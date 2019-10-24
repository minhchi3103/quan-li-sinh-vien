@extends('templete.dashboard')
@section('content')
<h1>Thời khóa biểu</h1>
    <table class="table table-bordered" width="100%">
            <thead>
              <tr>
                <th style="width: 14%">Thứ 2</th>
                <th style="width: 14%">Thứ 3</th>
                <th style="width: 14%">Thứ 4</th>
                <th style="width: 14%">Thứ 5</th>
                <th style="width: 14%">Thứ 6</th>
                <th style="width: 14%">Thứ 7</th>
                <th style="width: 14%">Chủ nhật</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                    @foreach ($list as $item)
                        @if ($item->lichhoc == 'Thứ 2')
                            <p>{{$item->mahocphan}} - {{$item->tenhocphan}} - Tiết: {{$item->tietbatdau}}-{{$item->tietbatdau+$item->sotiet-1}}</p>
                        @endif
                    @endforeach
                </td>
                <td>
                        @foreach ($list as $item)
                        @if ($item->lichhoc == 'Thứ 3')
                            <p>{{$item->mahocphan}} - {{$item->tenhocphan}} - Tiết: {{$item->tietbatdau}}-{{$item->tietbatdau+$item->sotiet-1}}</p>
                        @endif
                    @endforeach
                </td>
                <td>
                        @foreach ($list as $item)
                        @if ($item->lichhoc == 'Thứ 4')
                            <p>{{$item->mahocphan}} - {{$item->tenhocphan}} - Tiết: {{$item->tietbatdau}}-{{$item->tietbatdau+$item->sotiet-1}}</p>
                        @endif
                    @endforeach
                </td>
                <td>
                        @foreach ($list as $item)
                        @if ($item->lichhoc == 'Thứ 5')
                            <p>{{$item->mahocphan}} - {{$item->tenhocphan}} - Tiết: {{$item->tietbatdau}}-{{$item->tietbatdau+$item->sotiet-1}}</p>
                        @endif
                    @endforeach
                </td>
                <td>
                        @foreach ($list as $item)
                        @if ($item->lichhoc == 'Thứ 6')
                            <p>{{$item->mahocphan}} - {{$item->tenhocphan}} - Tiết: {{$item->tietbatdau}}-{{$item->tietbatdau+$item->sotiet-1}}</p>
                        @endif
                    @endforeach
                </td>
                <td>
                        @foreach ($list as $item)
                        @if ($item->lichhoc == 'Thứ 7')
                            <p>{{$item->mahocphan}} - {{$item->tenhocphan}} - Tiết: {{$item->tietbatdau}}-{{$item->tietbatdau+$item->sotiet-1}}</p>
                        @endif
                    @endforeach
                </td>
                <td>
                        @foreach ($list as $item)
                        @if ($item->lichhoc == 'Chủ nhật')
                            <p>{{$item->mahocphan}} - {{$item->tenhocphan}} - Tiết: {{$item->tietbatdau}}-{{$item->tietbatdau+$item->sotiet-1}}</p>
                        @endif
                    @endforeach
                </td>
              </tr>
            </tbody>
          </table>
@endsection