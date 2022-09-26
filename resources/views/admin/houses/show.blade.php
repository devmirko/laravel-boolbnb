@extends('admin.layouts.base')

@section('mainContent')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>{{ $house->name_house }}</h1>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12 my-3">
                <img class="img-fluid rounded" src="{{ asset ('storage/' . $house['cover_photo'] )}}" alt="">
            </div>
            <div class="col-lg-8 col-md-6 col-xs-12  my-3">
                <p><b> Indirizzo:</b> {{$house->address}}</p>
                <p><b>Tipo di Struttura:</b> {{$house->type}}</p>
                <p><b>Numero di stanze:</b> {{ $house->rooms }}</p>
                <p><b>Numero di letti:</b> {{$house->beds}}</p>
                <p><b>Numero di bagni:</b> {{$house->bathrooms}}</p>
                {{-- @foreach ($messages as $messaggio)
                    <mark>Messaggi: {{$messaggio-> }}</mark>
                @endforeach --}}
            </div>
            <div class="col-12 my-3">
                <h5>Servizi disponibili:</h5>
            </div>
            <div class="col-12 row">
                @foreach ($house->services as $service)
                    <div class="col-md-4 col-xs-12">
                        <em class=" d-block mb-2">{{ $service->name_services }}</em>
                    </div>
                @endforeach
                
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mx-auto rounded bg-dark bg-gradient col-7 justify-content-evenly text-center">
            <div class="col-md-4 m-2 mx-auto">
                <a href="{{ route('admin.houses.edit', ['house' => $house]) }}" class="">
                    <button class="btn btn-warning btn-block">Modifica</button>
                </a>
            </div>

            <div class="col-md-4 m-2 mx-auto">
                <form class="" action="{{ route('admin.houses.destroy', ['house' => $house]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-block"
                    onclick="return confirm('Sei sicuro di voler eliminare {{$house->name_house}}?')">ELIMINA</button>
                </form>
            </div>

            <div class="col-md-4 m-2 mx-auto">
                <a href="{{ route('admin.houses.index', ['house' => $house]) }}" class="">
                    <button class="btn btn-primary btn-block">Indietro</button>
                </a>
            </div>
            {{-- <a href="{{ route('admin.houses.show', ['house' => $house]) }}" class="col">
                <button class="btn btn-primary btn-sm btn-block">Vai ad anteprima</button>
            </a> --}}
        </div>
    </div>


    {{-- <a class="d-block" href="{{ route('admin.houses.index')}}">Back</a> --}}


@endsection
