
        @extends('base')

        @section('title', 'Result')


        @section('content')
            @foreach ($cheaperFlight as $key => $flight )

            {{-- Qui creo la variabile che riconosce se un volo ha lo scalo oppure no --}}
                @php
                    $stopover = 'Con scalo';
                    $noStopover = 'Volo diretto';
                    $fermata = '';

                    if($flight->stopover === 'true'){
                        $fermata = $stopover;
                    }else{
                        $fermata = $noStopover;
                    }
                @endphp

                {{-- Il volo visulizzato per primo sarà il più economico --}}

                <div class="result-container">
                    @if($key === 0)
                        <h3>VOLO PIU ECONOMICO</h3>
                        <b>Scalo:</b> <span>{{$fermata}}</span>
                        <p><b>Nome aereoporto:</b> {{$flight->name}}</p>
                        <p><b>Codice aereoporto:</b> {{$flight->code}}</p>
                        <p><b>Prezzo:</b> € {{$flight->price}}</p>
                        <p><b>Codice partenza:</b> {{$flight->code_departure}}</p>
                        <p><b>Codice arrivo:</b>  {{$flight->code_arrival}}</p>

                    @else
                        <b>Scalo:</b> <span>{{$fermata}}</span>
                        <p><b>Nome aereoporto:</b> {{$flight->name}}</p>
                        <p><b>Codice aereoporto:</b> {{$flight->code}}</p>
                        <p><b>Prezzo:</b> € {{$flight->price}}</p>
                        <p><b>Codice partenza:</b> {{$flight->code_departure}}</p>
                        <p><b>Codice arrivo:</b>  {{$flight->code_arrival}}</p>
                    @endif
                </div>

                @endforeach
            @endsection
