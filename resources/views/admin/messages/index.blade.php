@extends('admin.layouts.base')
@section('mainContent')
    <h1>Messages</h1>
    <h1>messaggi ricevuti</h1>
    @foreach ($messages as $message)
    <ul>
    <li>{{ $message->contact_name}}</li>
    <li>{{ $message->lastname}}</li>
    <li>{{ $message->email}}</li>
    <li>{{ $message->request_text}}</li>
   </ul>
    @endforeach
@endsection
