
        @extends('base')

        @section('title', 'Compare Flights')

        {{-- Da questa pagina invio i dati al Flight-controller --}}
        @section('content')
        <form action="{{route('flights')}}">
            <i class="fas fa-plane"></i>
            <input name="code" type="text" placeholder="CODICE 1">

            <i class="fas fa-plane"></i>
            <input name="code_2" type="text" placeholder="CODICE 2">

            <input type="submit">
        </form>
        @endsection

