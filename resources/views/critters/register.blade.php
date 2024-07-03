<x-app-layout>
    <div class="container">

        <div class="row text-center mb-5">
            <h1>Crear Nuevo Critter</h1>
        </div>

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-danger">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('critters.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <div class="col-4 text-end">
                    <label for="name">Nombre:</label>
                </div>
                <div class="col-6">
                    <input class="form-control" type="text" id="name" name="name" value="{{ old('name') }}"
                        required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-4 text-end">
                    <label for="species">Especie:</label>
                </div>
                <div class="col-6">
                    <input class="form-control" type="text" id="species" name="species"
                        value="{{ old('species') }}" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-4 text-end">
                    <label for="type_1">Tipo 1:</label>
                </div>
                <div class="col-6">
                    <input class="form-control" type="text" id="type_1" name="type_1" value="{{ old('type_1') }}"
                        required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-4 text-end">
                    <label for="type_2">Tipo 2 (opcional):</label>
                </div>
                <div class="col-6">
                    <input class="form-control" type="text" id="type_2" name="type_2"
                        value="{{ old('type_2') }}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-4 text-end">
                    <label for="type_3">Tipo 3 (opcional):</label>
                </div>
                <div class="col-6">
                    <input class="form-control" type="text" id="type_3" name="type_3"
                        value="{{ old('type_3') }}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-4 text-end">
                    <label for="description">Descripción:</label>
                </div>
                <div class="col-6">
                    <textarea class="form-control" id="description" name="description" required>{{ old('description') }}</textarea>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-4 text-end">
                    <label for="habitat">Hábitat:</label>
                </div>
                <div class="col-6">
                    <input class="form-control" type="text" id="habitat" name="habitat"
                        value="{{ old('habitat') }}" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-4 text-end">
                    <label for="encounter_difficulty">Dificultad de Encuentro:</label>
                </div>
                <div class="col-6">
                    <select class="form-select" id="encounter_difficulty" name="encounter_difficulty" required>
                        <option value="common" {{ old('encounter_difficulty') == 'common' ? 'selected' : '' }}>Común
                        </option>
                        <option value="rare" {{ old('encounter_difficulty') == 'rare' ? 'selected' : '' }}>Raro
                        </option>
                        <option value="ultra rare" {{ old('encounter_difficulty') == 'ultra rare' ? 'selected' : '' }}>
                            Ultra Raro</option>
                        <option value="legendary" {{ old('encounter_difficulty') == 'legendary' ? 'selected' : '' }}>
                            Legendario</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-4 text-end">
                    <label for="image">Foto (PNG, max 5MB, 329x244px):</label>
                </div>
                <div class="col-6">
                    <input class="form-control" type="file" id="image" name="image" accept=".png" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-4 text-end">
                    <label for="sound">Sonido (MP3, max 2MB):</label>
                </div>
                <div class="col-6">
                    <input class="form-control" type="file" id="sound" name="sound" accept=".mp3" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12 text-center">
                    <button class="btn btn-primary" type="submit">Crear Critter</button>
                </div>
            </div>
        </form>

    </div>
</x-app-layout>
