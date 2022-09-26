@foreach ($messages as $messaggio)
        <p>Messaggio da: {{$messaggio}}</p>
        {{-- <p>Messaggio: {{$messaggio->message }}</p> --}}
@endforeach
