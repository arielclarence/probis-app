@extends('partials/navbar')

@section('content')
    {{-- Tabs --}}
    <h1>Master Karyawan</h1>
    <nav class="nav nav-pills nav-fill w-25 bg-white p-1 rounded">
        <a class="nav-link active bg-success" href="{{ url('/master/karyawan/view') }}">View</a>
        <a class="nav-link text-success" href="{{ url('/master/karyawan/add') }}">Add</a>
    </nav>

    <br>
    <br>

    {{-- Isi  --}}
    <div class="container text-center">
        <div class="row">
            <div class="col align-self-start"></div>
            <div class="col align-self-center"></div>
            {{-- Supaya bisa di kanan --}}
            <div class="col align-self-end">
                <div class="input-group">
                    <span class="input-group-text text-bg-success" id="addon-wrapping">Search</span>
                    <input type="text" class="form-control" placeholder="By Nama" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
            </div>
        </div>
    </div>

    <br>

    <table class="table table-striped">
        <thead class="text-bg-success">
            <tr>
                <th>ID KARYAWAN</th>
                <th>NAMA KARYAWAN</th>
                <th>NO TELEPON</th>
                <th>JABATAN</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>ibewe</td>
                <td>081111111111</td>
                <td>BOSSS</td>
                <td>
                    <a href="" class="btn btn-primary">Detail</a>
                    <a href="" class="btn btn-warning">Edit</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>ganteng</td>
                <td>08123456789</td>
                <td>Kacung</td>
                <td>
                    <a href="" class="btn btn-primary">Detail</a>
                    <a href="" class="btn btn-warning">Edit</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>banget</td>
                <td>081987654321</td>
                <td>Kasir</td>
                <td>
                    <a href="" class="btn btn-primary">Detail</a>
                    <a href="" class="btn btn-warning">Edit</a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
