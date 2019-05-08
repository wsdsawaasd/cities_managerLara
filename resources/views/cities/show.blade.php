@extends('home')
@section('title','show Customer')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Danh Sách khách hàng</h1>
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên </th>
                    <th scope="col">Sinh nhật</th>
                    <th scope="col">Email</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($customers) == 0)
                    <tr>
                        <td colspan="4">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($customers as  $city)
                        <tr>
                            <th scope="row">{{$city->id}}</th>
                            <td>{{ $city->name }}</td>
                            <td>{{ $city->dob}}</td>
                            <td>{{ $city->email}}</td>
                            <td><a href="{{route('cities.showDelete',['id'=>$city->id])}}" class="text-danger"
                                   onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <a class="btn btn-primary" href="{{route('cities.index')}}">Return </a>
        </div>
    </div>

@endsection
