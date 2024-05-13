@extends('layouts.app')

@section('content')
    <h1 class="text-center">Trains</h1>
    <div class="container">
        <div class="row">

            @foreach ($trains as $train)
                <div class="col-12">
                    <div class="d-flex justify-content-evenly align-items-center p-3 border rounded my-3 ">
                        <section class="text-center">
                            <div>
                                {{ $train->id }}
                            </div>
                            <div>
                                {{ $train->company }}
                            </div>
                        </section>
                        <section class="text-center">
                            <div>
                                {{ $train->departure }}
                            </div>
                            <div>
                                {{ $train->arrival }}
                            </div>
                        </section>
                        <section class="text-center">
                            <div>
                                {{ $train->departure_time }}
                            </div>
                            <div>
                                {{ $train->arrival_time }}
                            </div>
                        </section>
                        <section class="text-center">
                            <div>
                                {{ $train->code_train }}
                            </div>
                            <div>
                                {{ $train->wagon }}
                            </div>
                        </section>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
