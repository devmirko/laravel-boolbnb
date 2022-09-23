@extends('admin.layouts.base')

@section('mainContent')
    <div class="bg-dark bg-gradient">
        @if ( count($houses) > 0 )
        <table class="table table-striped text-white">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Rooms</th>
                    <th>Beds</th>
                    <th>Bathrooms</th>
                    <th class="actions">Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($houses as $house)
                <tr data-id="{{ $house->id }}">
                    <td class="text-white">{{ $house->id }} </td>
                    <td class="text-white">{{ $house->name_house }}</td>
                    <td class="text-white">{{ $house->rooms }} </td>
                    <td class="text-white">{{ $house->beds }} </td>
                    <td class="text-white">{{ $house->bathrooms }} </td>
                    <td class="actions">
                        <a href="{{ route('admin.houses.show', ['house' => $house]) }}" class="btn btn-primary">View</a>

                        <a href="{{ route('admin.houses.edit', ['house' => $house]) }}" class="btn btn-warning">Edit</a>

                        <form action="{{ route('admin.houses.destroy', ['house' => $house]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button
                            type="submit"
                            class="btn btn-danger"
                            onclick="return confirm('Sei sicuro di voler eliminare {{$house->name_house}}?')"
                            >Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @else
            <h1 class="text-center text-white">Non hai case, creane una!</h1>
        @endif

    </tbody>
</table>
    </div>

@endsection

