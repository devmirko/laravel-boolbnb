@extends('admin.layouts.base')

@section('mainContent')
    <table class="table table-striped">
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
                    <td>{{ $house->id}} </td>
                    <td>{{ $house->name_house}}</td>
                    <td>{{ $house->rooms}} </td>
                    <td>{{ $house->beds}} </td>
                    <td>{{ $house->bathrooms}} </td>
                    <td class="actions">
                        <a href="{{ route('admin.houses.show', ['house' => $house])}}" class="btn btn-primary">View</a>

                        <a href="{{ route('admin.houses.edit', ['house' => $house])}}" class="btn btn-warning">Edit</a>

                        <form action="{{ route('admin.houses.destroy', ['house' => $house])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $houses->links() }}
@endsection
