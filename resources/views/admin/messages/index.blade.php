@extends('admin.layouts.base')
@section('mainContent')
    <h1>Messages</h1>
    <h1>messaggi ricevuti</h1>
    @foreach ($messages as $message)
    <div>{{ $message->id}}</div>
    <div>{{ $message->contact_name}}</div>
    <div>{{ $message->lastname}}</div>
    <div>{{ $message->email}}</div>
    <div>{{ $message->request_text}}</div>
    @endforeach


@endsection
