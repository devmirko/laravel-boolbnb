@extends('admin.layouts.base')

@section('mainContent')
    <h1>{{ $house->name_house }}</h1>
    <p class="">Numero di stanze: {{ $house->rooms }}</p>
    <p>Numero di letti: {{$house->beds}}</p>
    <p>Numero di bagni: {{$house->bathrooms}}</p>
    <p>Indirizzo: {{$house->address}}</p>
    <p>Tipo di Struttura: {{$house->type}}</p>

    @foreach ($house->services as $service)
        <span class="d-block mb-2">{{ $service->name_services }}</span>
    @endforeach

    <img src="{{$house->cover_photo}}" alt="">
    <a class="d-block" href="{{ route('admin.houses.index')}}">Back</a>

@endsection
