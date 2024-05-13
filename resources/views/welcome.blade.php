@extends('layouts.app')


@section('content')
    <div class="container">
        <h1>Wellcome Trains</h1>
        <a href="{{ route('guest.trains') }}">Find Your Train</a>
    </div>
@endsection
