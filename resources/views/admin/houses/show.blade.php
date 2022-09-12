@extends('admin.layouts.base')

@section('mainContent')
    <h1>{{ $house->name_house }}</h1>
    <p>{{ $house->rooms }}</p>
    <a href="{{ route('admin.houses.index')}}">Houses Home</a>

@endsection
