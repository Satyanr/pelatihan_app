@extends('layouts.admin')

@section('content')
    <div class="container text-center">
        <div class="row">
            <div class="col-8">col-8</div>
            <div class="col-4">
                <div class="w-auto"><a href="{{ route('suratpemanggilan') }}" style="text-decoration: none">
                <i class="fa-solid fa-plus"></i>
            </a></div>
            </div>
          </div>
    </div>
@endsection
