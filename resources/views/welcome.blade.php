@extends('layouts.app')

@section('content')

    <div class="main-container">

        <div class="symbols d-flex jc-center ai-center">

            <p><span class="green"></span> In orario</p> 

            <p><span class="red"></span> In ritardo</p> 

        </div>

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

                    <div class="details-train">

                        <h3>Stato</h3>

                        @if ($train->in_time == 1)
        
                        <span class="green"></span>

                        @elseif ($train->deleted == 1)
                
                        <h3 class="deleted">CANCELLATO</h3>
        
                        @elseif ($train->in_time == 0)
                            
                        <span class="red"></span>
        
                        @elseif ($train->deleted == 1)
                
                        <h3 class="deleted">CANCELLATO</h3>
        
                        @endif
        
                    </div>

                    <button id="btn-details">Dettagli</button>

                </div>

            </div>

            @endforeach

        </div>

    </div>

@endsection
