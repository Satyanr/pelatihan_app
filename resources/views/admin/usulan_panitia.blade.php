@extends('layouts.admin')


@section('content')
    @livewire('usulan-panitia-component', ['diklat_id' => $diklat->id])
@endsection
