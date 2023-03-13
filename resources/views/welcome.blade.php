@extends('layouts.app')

@section('content')

    <div class="main-container">

        <div class="container-trains">

            @foreach ($trains as $train)

            <div class="card-train">

                <div class="header-card">

                    <h5>{{ $train->agency }} <span>{{ $train->train_code }}</span></h5>

                </div>

                <div class="main-card d-flex jc-space-b">

                    <div class="departure">

                        <h3>{{ $train->departure_station }}</h3>

                        <h4>{{ $train->departure_time }}</h4>

                    </div>

                    <div class="arrival">

                        <h3>{{ $train->arrival_station }}</h3>

                        <h4>{{ $train->arrival_time }}</h4>

                    </div>

                    <div class="info">

                        <h3>Carrozze</h3>

                        <h4>{{ $train->number_of_carriages }}</h4>

                    </div>

                    <button>Dettagli</button>

                </div>

            </div>

            @endforeach

        </div>

    </div>

@endsection
