@extends('home')
@section('title', 'Danh sách tỉnh thành')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Danh Sách tỉnh thành</h1>
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên tỉnh thành</th>
                    <th scope="col">Số khách hàng</th>
                    <th scope="col">Action</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($cities) == 0)
                    <tr>
                        <td colspan="4">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($cities as $key => $city)
                        <tr>
                            <th scope="row">{{$city->id}}</th>
                            <td>{{ $city->name }}</td>
                            <td>{{ count($city->customers) }}</td>
                            <td>
                                <a href="{{route('cities.show',['id'=>$city->id])}}">Show/</a>
                                <a href="{{route('cities.viewEdit',['id'=>$city->id])}}">Update/</a>
                                <a href="{{route('cities.delete',['id'=>$city->id])}}" class="text-danger"
                                   onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <a class="btn btn-primary" href="{{route('cities.create')}}">ADD City</a>
            <a class="btn btn-primary" href="{{route('cities.createCus')}}">ADD customer</a>
        </div>
    </div>
@endsection

