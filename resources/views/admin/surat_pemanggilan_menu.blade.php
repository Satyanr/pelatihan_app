@extends('layouts.admin')

@section('content')
    <div class="container text-center">
        <div class="row">
            <div class="col-8"></div>
            <div class="col-4">
                <div class="w-auto"><a href="{{ route('suratpemanggilan', $diklat->id) }}" style="text-decoration: none">
                        <i class="fa-solid fa-plus"></i>
                    </a></div>
            </div>
        </div>
        <div class="row">
            @foreach ($surats as $surat)
            <div class="col">
                {{ $surat->diklat_id }}
            </div>
            @endforeach
        </div>
    </div>
@endsection
