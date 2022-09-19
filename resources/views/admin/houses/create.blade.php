@extends('admin.layouts.base')

@section('mainContent')
    <h1>Inserisci una nuova struttura</h1>
    <form action="{{ route('admin.houses.store') }}" method="post" novalidate enctype="multipart/form-data">
        @csrf
        {{-- nome casa --}}
        <div class="mb-3">
            <label class="form-label" for="name_house">Nome Casa *</label>
            <input class="form-control @error('name_house') is-invalid @enderror" type="text" name="name_house"
                id="name_house" value="" required placeholder="inserisci il nome" minlength="1" maxlength="15">
            @error('name_house')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        {{-- numero stanze --}}
        <div class="mb-3">
            <label class="form-label" for="rooms">Numero Stanze *</label>
            <input class="form-control @error('rooms') is-invalid @enderror" type="number" name="rooms" id="rooms"
                value="1" required min="1" max="10">
            @error('rooms')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        {{-- numero letti --}}
        <div class="mb-3">
            <label class="form-label" for="beds">Numero Letti *</label>
            <input class="form-control @error('beds') is-invalid @enderror" type="number" name="beds" id="beds"
                value="1" required min="1" max="10">
            @error('beds')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        {{-- numero bagni --}}
        <div class="mb-3">
            <label class="form-label" for="bathrooms">Numero Bagni *</label>
            <input class="form-control @error('bathrooms') is-invalid @enderror" type="number" name="bathrooms"
                id="bathrooms" value="1" required min="1" max="10">
            @error('bathrooms')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        {{-- metri quadrati --}}
        <div class="mb-3">
            <label class="form-label" for="mq">Metri Quadrati *</label>
            <input class="form-control @error('mq') is-invalid @enderror" type="number" name="mq" id="mq"
                value="1" required min="1" max="500">
            @error('mq')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        {{-- <div class="mb-3">
            <label class="form-label" for="latitude">Latitude *</label>
            <input class="form-control @error('latitude') is-invalid @enderror" type="text" name="latitude" id="latitude" value="">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="longitude">Longitudine *</label>
            <input class="form-control @error('longitude') is-invalid @enderror" type="text" name="longitude" id="longitude" value="">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div> --}}
        {{-- indirizzo --}}
        {{-- <div class="mb-3">
            <label class="form-label" for="address">Indirizzo *</label>
            <input class="form-control @error('address') is-invalid @enderror" type="text" name="address" id="address"
                value="" required minlength="1" maxlength="20">
            @error('address')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div> --}}

        {{-- Indirizzo con autocompletamento --}}
        <div id="back">
            <find-address></find-address>
        </div>

        {{-- tipo di struttura --}}
        <div class="mb-3">
            <label class="form-label" for="type">Tipo di Struttura: *</label>
            <input class="form-control @error('type') is-invalid @enderror" type="text" name="type" id="type"
                value="" required pattern="[Aa]ppartamento|[Aa]ttico|[Vv]illa|[Mm]asseria|[Cc]asale"
                placeholder="Appartamento, Attico, Villa, Masseria, Casale.">
            @error('type')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>


        {{-- immagini --}}
        <div class="mb-3">
            <label class="form-label" for="cover_photo">Image</label>
            <input class="form-control @error('cover_photo') is-invalid @enderror" type="file" name="cover_photo"
                id="cover_photo" accept="image/*">
            @error('cover_photo')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror




            {{-- visible --}}
            <div class="mb-3">
                <div>
                    <label for="visible">Visible*</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input @error('flexRadioDefault1') is-invalid @enderror" type="radio"
                        name="visible" id="flexRadioDefault1" value="1" required>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Yes
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input @error('flexRadioDefault2') is-invalid @enderror" type="radio"
                        name="visible" id="flexRadioDefault2" value="0" required>
                    <label class="form-check-label" for="flexRadioDefault2">
                        No
                    </label>
                </div>
                @error('visible')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror





            </div>

            {{-- checkbox --}}
            <fieldset class="mb-3">
                <legend>Services</legend>
                @foreach ($services as $service)
                    <div class="form-check">
                        {{-- <input type="hidden" name="services[]" value="0" /> --}}
                        <input required class="form-check-input" type="checkbox" name="services[]"
                            value="{{ $service->id }}" id="service{{ $service->id }}"
                            @if (in_array($service->id, old('services') ?: [])) checked @endif
                            @if ($service->name_services == 'Nessun servizio') checked @endif>
                        <label class="form-check-label"
                            for="service{{ $service->id }}">{{ $service->name_services }}</label>
                    </div>
                @endforeach

                @foreach ($errors->get('services.*') as $messages)
                    @foreach ($messages as $message)
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @endforeach
                @endforeach
            </fieldset>

            <button type="submit" class="btn btn-primary">Save</button>
    </form>
    <script src="{{ asset('js/vue.js') }}" defer></script>
@endsection

