<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $critter?->name) }}" id="name" placeholder="Name">
            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="species" class="form-label">{{ __('Species') }}</label>
            <input type="text" name="species" class="form-control @error('species') is-invalid @enderror" value="{{ old('species', $critter?->species) }}" id="species" placeholder="Species">
            {!! $errors->first('species', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="type_1" class="form-label">{{ __('Type 1') }}</label>
            <input type="text" name="type_1" class="form-control @error('type_1') is-invalid @enderror" value="{{ old('type_1', $critter?->type_1) }}" id="type_1" placeholder="Type 1">
            {!! $errors->first('type_1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="type_2" class="form-label">{{ __('Type 2') }}</label>
            <input type="text" name="type_2" class="form-control @error('type_2') is-invalid @enderror" value="{{ old('type_2', $critter?->type_2) }}" id="type_2" placeholder="Type 2">
            {!! $errors->first('type_2', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="type_3" class="form-label">{{ __('Type 3') }}</label>
            <input type="text" name="type_3" class="form-control @error('type_3') is-invalid @enderror" value="{{ old('type_3', $critter?->type_3) }}" id="type_3" placeholder="Type 3">
            {!! $errors->first('type_3', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="description" class="form-label">{{ __('Description') }}</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description', $critter?->description) }}" id="description" placeholder="Description">
            {!! $errors->first('description', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="region" class="form-label">{{ __('Region') }}</label>
            <input type="text" name="region" class="form-control @error('region') is-invalid @enderror" value="{{ old('region', $critter?->region) }}" id="region" placeholder="Region">
            {!! $errors->first('region', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            
            {{-- <label for="user_id" class="form-label">{{ __('User Id') }}</label> --}}
            <input hidden value="{{Auth::User()->id}}" type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ old('user_id', $critter?->user_id) }}" id="user_id" placeholder="User Id">
            {{-- {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!} --}}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="encounter_difficulty" class="form-label">{{ __('Encounter Difficulty') }}</label>
            <input type="text" name="encounter_difficulty" class="form-control @error('encounter_difficulty') is-invalid @enderror" value="{{ old('encounter_difficulty', $critter?->encounter_difficulty) }}" id="encounter_difficulty" placeholder="Encounter Difficulty">
            {!! $errors->first('encounter_difficulty', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="sound" class="form-label">{{ __('Sound') }}</label>
            <input type="text" name="sound" class="form-control @error('sound') is-invalid @enderror" value="{{ old('sound', $critter?->sound) }}" id="sound" placeholder="Sound">
            {!! $errors->first('sound', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>