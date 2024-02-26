{{-- @extends('layouts.admin')


@section('content')
    <div class="container my-3">
        <form action="{{ route('peserta.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Ada yang salah input data<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Nama Diklat</label>
                        <input type="text" class="form-control" name="nama_diklat" required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Jumlah Sasaran</label>
                        <input type="text" class="form-control" placeholder="400" name="jumlahsasaran" required>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <a href="{{ route('pelatihan', $diklat->id) }}" class="btn btn-secondary">Kembali</a>
                </div>
                <div class="col d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                </div>
            </div>
        </form>
    </div>
@endsection --}}
