
        @extends('base')


        @section('content')
        @foreach ($cheaperFlight as $key => $flight )

            @if($key === 0)
                <b>Volo più economico,</b>
                <span>Codice aereoporto: {{$flight->code}}</span><br>
                <span>Prezzo: {{$flight->price}}</span><br>
                <span>Codice partenza: {{$flight->code_departure}}</span><br>
                <span>Codice arrivo:  {{$flight->code_arrival}}</span><br>
                <br>
                <br>
            @elseif ($flight->stopover === 'true')

                <span>Codice aereoporto: {{$flight->code}}</span><br>
                <span>Prezzo: {{$flight->price}}</span><br>
                <b>Volo con scalo,</b>
                <br>
                <br>

            @else
                <span>Codice aereoporto: {{$flight->code}}</span><br>
                <span>Prezzo: {{$flight->price}}</span><br>
                <span>Codice partenza: {{$flight->code_departure}}</span><br>
                <span>Codice arrivo:  {{$flight->code_arrival}}</span><br>
                <br>
                <br>
            @endif
        @endforeach

        @endsection
