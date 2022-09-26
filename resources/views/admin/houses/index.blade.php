@extends('admin.layouts.base')

@section('mainContent')
    <div class="bg-dark bg-gradient">
        @if ( count($houses) > 0 )
        <table class="table table-striped text-white">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome struttura</th>
                    <th class="d-none d-md-table-cell">Stanze</th>
                    <th class="d-none d-md-table-cell">Posti letto</th>
                    <th class="d-none d-md-table-cell">Bagni</th>
                    <th class="d-none d-md-table-cell">Indirizzo</th>
                    <th class="actions">Azioni</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($houses as $house)
                <tr data-id="{{ $house->id }}">
                    <td class="text-white">{{ $house->id }} </td>
                    <td class="text-white">{{ $house->name_house }}</td>
                    <td class="text-white d-none d-md-table-cell">{{ $house->rooms }} </td>
                    <td class="text-white d-none d-md-table-cell">{{ $house->beds }} </td>
                    <td class="text-white d-none d-md-table-cell">{{ $house->bathrooms }} </td>
                    <td class="text-white d-none d-md-table-cell">{{ $house->address }} </td>
                    <td class="actions">
                        <div class="container">
                            <div class="row">
                                <a class="col-xs-12 mb-1 col-lg-4" href="{{ route('admin.houses.show', ['house' => $house]) }}">
                                    <button class="btn btn-primary btn-sm">Mostra</button>
                                </a>
                                <a class="col-xs-12 mb-1 col-lg-4" href="{{ route('admin.houses.edit', ['house' => $house]) }}">
                                    <button class="btn btn-warning btn-sm">Modifica</button>
                                </a>
                                <a href="{{ route('admin.messages.show', $house->id ) }}" class="col">
                                    <button class="btn btn-warning btn-sm btn-block">Messages</button>
                                </a>
                                <form class="col" action="{{ route('admin.houses.destroy', ['house' => $house]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Sei sicuro di voler eliminare {{$house->name_house}}?')">ELIMINA</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        @else
            <div class="row">
                <h1 class="mt-3 text-center text-white">Non ci sono strutture registrate</h1>
                <br>
            </div>
        @endif
    </tbody>
</table>
<a class="text-center text-white m-3" href="{{ route('admin.houses.create') }}">
    <button class="mb-3 btn btn-success">Inserisci una nuova struttura</button>
</a>
    </div>

@endsection

