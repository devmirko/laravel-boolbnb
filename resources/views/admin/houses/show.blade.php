@extends('admin.layouts.base')

@section('mainContent')
    <h1>{{ $house->name_house }}</h1>
    <p class="">Numero di stanze: {{ $house->rooms }}</p>
    <p>Numero di letti: {{$house->beds}}</p>
    <p>Numero di bagni: {{$house->bathrooms}}</p>
    <p>Indirizzo: {{$house->address}}</p>
    <p>Tipo di Struttura: {{$house->type}}</p>
    <p>Messaggi: {{$house->messages }}</p>
    <img src="{{ asset ('storage/' . $house['cover_photo'] )}}" alt="">

    @foreach ($house->services as $service)
        <span class="d-block mb-2">{{ $service->name_services }}</span>
    @endforeach


    <a class="d-block" href="{{ route('admin.houses.index')}}">Back</a>


@endsection
