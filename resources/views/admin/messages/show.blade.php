@extends('admin.layouts.base')
@section('mainContent')
<h1>Messaggi</h1>
    <div class="bg-dark bg-gradient">
        @if ( count($messages) > 0 )
        <table class="table table-striped text-white">
            <thead>
                <tr>
                    {{-- <th>ID</th> --}}
                    <th class="">Nome richiedente</th>
                    <th class="">Cognome richiedente</th>
                    <th class="">Mail di contatto</th>
                    <th class="">Messaggio</th>

                </tr>
            </thead>
            <tbody>
            @foreach ($messages as $message)
                <tr data-id="{{ $message->id }}">
                    <td class="text-white">{{ $message->contact_name}}</td>
                    <td class="text-white">{{ $message->lastname}}</td>
                    <td class="text-white">{{ $message->email}}</td>
                    <td class="text-white">{{ $message->request_text}}</td>
                </tr>
            @endforeach
            @else
                <div class="row">
                    <h1 class="mt-3 text-center text-white">Non ci sono messaggi</h1>
                </div>
            @endif
    </div>
@endsection
