
        @extends('base')


        @section('content')
            @foreach ($cheaperFlight as $key => $flight )

            {{-- Qui creo la variabile che riconosce se un volo ha lo scalo oppure no --}}
                @php
                    $stopover = 'Con scalo';
                    $noStopover = 'Diretto';
                    $fermata = '';

                    if($flight->stopover === 'true'){
                        $fermata = $stopover;
                    }else{
                        $fermata = $noStopover;
                    }
                @endphp

                {{-- Il volo visulizzato per primo sarà il più economico --}}
                @if($key === 0)
                    <b>VOLO PIU ECONOMICO</b><br>
                    <b>Scalo:</b> <span>{{$fermata}}</span><br>
                    <span><b>Nome aereoporto:</b> {{$flight->name}}</span><br>
                    <span><b>Codice aereoporto:</b> {{$flight->code}}</span><br>
                    <span><b>Prezzo:</b> € {{$flight->price}}</span><br>
                    <span><b>Codice partenza:</b> {{$flight->code_departure}}</span><br>
                    <span><b>Codice arrivo:</b>  {{$flight->code_arrival}}</span><br>
                    <br>
                   <hr>
                   <br>



                @else
                    <b>Scalo:</b> <span>{{$fermata}}</span><br>
                    <span><b>Nome aereoporto:</b> {{$flight->name}}</span><br>
                    <span><b>Codice aereoporto:</b> {{$flight->code}}</span><br>
                    <span><b>Prezzo: €</b> {{$flight->price}}</span><br>
                    <span><b>Codice partenza:</b> {{$flight->code_departure}}</span><br>
                    <span><b>Codice arrivo:</b>  {{$flight->code_arrival}}</span><br>
                    <br>
                    <br>
                @endif









            @endforeach


        @endsection
