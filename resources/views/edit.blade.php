@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Sua sinh vien</h2>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('sinhvien.index') }}" class="btn btn-primary float-end">Danh sach sinh vien</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('sinhvien.update', $sinhvien->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Ma sinh vien</strong>
                                <input type="text" name="MaSV" value="{{$sinhvien->MaSV}}" class="form-control"
                                    placeholder="Nhap ma sinh vien...">
                            </div>
                            <div class="form-group">
                                <strong>Ho va ten</strong>
                                <input type="text" name="HoTen" value="{{$sinhvien->HoTen}}" class="form-control"
                                    placeholder="Nhap ho ten sinh vien...">
                            </div>
                            <div class="form-group">
                                <strong>Ngay sinh</strong>
                                <input type="date" name="NgaySinh" value="{{$sinhvien->NgaySinh}}" class="form-control">
                            </div>
                        </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Gioi tinh</strong>
                                    <select name="GioiTinh" class="form-select">
                                        <option selected>---Chon gioi tinh---</option>
                                        <option value="Nam" {{$sinhvien->GioiTinh == "Nam" ? 'selected' : '' }} >Nam</option>
                                        <option value="Nu"{{$sinhvien->GioiTinh == "Nu" ? 'selected' : '' }}>Nu</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <strong>Dia chi</strong>
                                    <input type="text" name="DiaChi" value="{{$sinhvien->DiaChi}}" class="form-control" placeholder="Nhap dia chi...">
                                </div>
                                <div class="form-group">
                                    <strong>So dien thoai</strong>
                                    <input type="text" name="SoDT" value="{{$sinhvien->SoDT}}" class="form-control"
                                        placeholder="Nhap so dien thoai...">
                                </div>
                       
                        </div>
                    </div>
                    <button style="submit" class="btn btn-success mt-2">Cap nhat</button>
                </form>
            </div>
        </div>
    </div>
@endsection
