@extends('layouts.app')


@section('content')
    <div class="container text-center">
        <h1>Wellcome Trains</h1>
        <a href="{{ route('guest.trains') }}">
            <button type="button" class="btn btn-dark text-danger fs-5 m-4"> Find Your Train</button>
        </a>
    </div>
@endsection
