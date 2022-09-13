@extends('admin.layouts.base')

@section('mainContent')
    <h1>Create new house</h1>
    <form action="{{ route('admin.houses.store') }}" method="post" novalidate enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label" for="name_house">Nome Casa</label>
            <input class="form-control @error('name_house') is-invalid @enderror" type="text" name="name_house" id="name_house" value="">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="rooms">Numero Stanze</label>
            <input class="form-control @error('rooms') is-invalid @enderror" type="text" name="rooms" id="rooms" value="">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="beds">Numero Letti</label>
            <input class="form-control @error('beds') is-invalid @enderror" type="text" name="beds" id="beds" value="">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="bathrooms">Numero Bagni</label>
            <input class="form-control @error('bathrooms') is-invalid @enderror" type="text" name="bathrooms" id="bathrooms" value="">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="mq">Metri Quadrati</label>
            <input class="form-control @error('mq') is-invalid @enderror" type="text" name="mq" id="mq" value="">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="lat">Latitudine</label>
            <input class="form-control @error('lat') is-invalid @enderror" type="text" name="lat" id="lat" value="">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="lang">Longitudine</label>
            <input class="form-control @error('lang') is-invalid @enderror" type="text" name="lang" id="lang" value="">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="address">Indirizzo</label>
            <input class="form-control @error('address') is-invalid @enderror" type="text" name="address" id="address" value="">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="type">Tipo di Struttura</label>
            <input class="form-control @error('type') is-invalid @enderror" type="text" name="type" id="type" value="">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection

