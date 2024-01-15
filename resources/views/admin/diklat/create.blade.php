@extends('layouts.admin')


@section('content')
    <div class="container my-3">
        <form action="{{ route('diklat.store') }}" method="POST">
            @csrf
            <div class="row text-center">
                <div class="col">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Pilih Gambar</label>
                        <input class="form-control" type="file" id="formFile" name="cover">
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Nama Diklat</label>
                        <input type="text" class="form-control" name="nama_diklat">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Jumlah Sasaran</label>
                        <input type="text" class="form-control" placeholder="400" name="jumlahsasaran">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Periode</label>
                        <input type="text" class="form-control" placeholder=" 2 Juli - 10 Desember 2024" name="periode">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Tempat</label>
                        <input type="text" class="form-control" name="tempat">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="{{ route('mainmenu') }}" class="btn btn-secondary">Kembali</a>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                </div>
            </div>
        </form>
    </div>
@endsection
