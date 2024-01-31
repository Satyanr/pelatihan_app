@extends('layouts.admin')


@section('content')
    <div class="container my-3 pt-5">
        <div class="shadow-sm p-3 mb-5 bg-body-tertiary rounded">
            <div class="row pb-5">
                <div class="col">
                    <h1 class="text-center">Tambahkan Panitia/Pengajar</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <form action="{{ route('diklat.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Nama Panitia/Pengajar</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">NIP</label>
                                    <input type="text" class="form-control" placeholder="12930XXXX" name="NIP">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Unit Kerja</label>
                                    <input type="text" class="form-control" placeholder="Unit Kerja" name="unit_kerja">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <select class="form-select" aria-label="Default select example" name="jenis">
                                        <option value="panitia">Panitia</option>
                                        <option value="pengajar">Pengajar</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row py-3">
                            <div class="col">
                                <a href="{{ route('pelatihan', $diklat->id) }}" class="btn btn-secondary">Kembali</a>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Tambahkan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
