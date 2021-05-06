
        @extends('base')

        {{-- Da questa pagina invio i dati al Flight-controller --}}
        @section('content')
        <form action="{{route('flights')}}">
            <label for="">Airport 1</label>
            <input name="code" type="text">

            <label for="">Airport 2</label>
            <input name="code_2" type="text">

            <input type="submit">
        </form>
        @endsection

