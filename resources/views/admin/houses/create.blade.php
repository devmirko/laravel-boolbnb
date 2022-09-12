@extends('admin.layouts.base')

@section('mainContent')
    <h1>Create new house</h1>
    <form action="{{ route('admin.houses.store') }}" method="post" novalidate enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label" for="title">Name</label>
            <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{ old('title') }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
