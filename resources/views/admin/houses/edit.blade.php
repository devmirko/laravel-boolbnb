@extends('admin.layouts.base')

@section('mainContent')
    <h1>Create new house</h1>
    <form action="{{ route('admin.houses.update', ['house' => $house]) }}" method="post" novalidate enctype="multipart/form-data">
        @csrf
        @method('put')

        <div class="mb-3">
            <label class="form-label" for="name_house">Nome Casa</label>
            <input class="form-control @error('name_house') is-invalid @enderror" type="text" name="name_house" id="name_house" value="{{ old('name_house', $house->name_house) }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="rooms">Numero Stanze</label>
            <input class="form-control @error('rooms') is-invalid @enderror" type="text" name="rooms" id="rooms" value="{{ old('rooms', $house->rooms) }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="beds">Numero Letti</label>
            <input class="form-control @error('beds') is-invalid @enderror" type="text" name="beds" id="beds" value="{{ old('beds', $house->beds) }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="bathrooms">Numero Bagni</label>
            <input class="form-control @error('bathrooms') is-invalid @enderror" type="text" name="bathrooms" id="bathrooms" value="{{ old('bathrooms', $house->bathrooms) }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="mq">Metri Quadrati</label>
            <input class="form-control @error('mq') is-invalid @enderror" type="text" name="mq" id="mq" value="{{ old('mq', $house->mq) }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="lat">Latitudine</label>
            <input class="form-control @error('lat') is-invalid @enderror" type="text" name="lat" id="lat" value="{{ old('lat', $house->lat) }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="lang">Longitudine</label>
            <input class="form-control @error('lang') is-invalid @enderror" type="text" name="lang" id="lang" value="{{ old('lang', $house->lang) }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="address">Indirizzo</label>
            <input class="form-control @error('address') is-invalid @enderror" type="text" name="address" id="address" value="{{ old('address', $house->address) }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="type">Tipo di Struttura</label>
            <input class="form-control @error('type') is-invalid @enderror" type="text" name="type" id="type" value="{{ old('type', $house->type) }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@endsection
