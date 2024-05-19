@extends('layout')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Quan ly sinh vien</h2>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('sinhvien.create') }}" class="btn btn-primary float-end">Them moi</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if (Session::has('thongbao'))
                    <div class=" alert alert-success">
                        {{Session::get('thongbao')}}
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Ma SV</th>
                            <th>Ho Va Ten</th>
                            <th>Ngay sinh</th>
                            <th>Gioi tinh</th>
                            <th>Dia chi</th>
                            <th>So dien thoai</th>
                            <th>Thao tac</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sinhvien as $sv)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $sv->MaSV }}</td>
                                <td>{{ $sv->HoTen }}</td>
                                <td>{{ $sv->NgaySinh }}</td>
                                <td>{{ $sv->GioiTinh }}</td>
                                <td>{{ $sv->DiaChi }}</td>
                                <td>{{ $sv->SoDT }}</td>
                                <td>
                                    <form action="{{route('sinhvien.destroy', $sv->id)}}" method="POST">
                                    <a href="{{route('sinhvien.edit', $sv->id)}}" class="btn btn-info">Sua</a>
                                    @csrf
                                    @method('DELETE')
                                       <button type="submit" class="btn btn-danger"  onclick="return confirm('Ban co chac chan muon xoa {{$sv->HoTen}} Khong')">Xoa</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
