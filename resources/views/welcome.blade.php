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
        
        {{-- <table>

            <tr>
                <th>Agenzia</th>
                <th>Stazione di partenza</th>
                <th>Stazione di arrivo</th>
                <th>Data</th>
                <th>Partenza</th>
                <th>Arrivo</th>
                <th>Codice treno</th>
                <th>Carrozze</th>
                <th>In orario</th>
                <th>Cancellato</th>
            </tr>
            
            @foreach ($trains as $train)
            <tr>
                <td>{{ $train->agency }}</td>
                <td>{{ $train->departure_station }}</td>
                <td>{{ $train->arrival_station }}</td>
                <td>{{ $train->departure_date }}</td>
                <td>{{ $train->departure_time }}</td>
                <td>{{ $train->arrival_time }}</td>
                <td>{{ $train->train_code }}</td>
                <td>{{ $train->number_of_carriages }}</td>
                <td>{{ $train->in_time }}</td>
                <td>{{ $train->deleted }}</td>
            </tr>
            @endforeach

        </table> --}}

    </div>

@endsection
