@extends('layouts.admin')


@section('content')
    <div class="container my-3">
        @livewire('jadwal-diklat', ['diklat' => $diklat])
    </div>
@endsection
