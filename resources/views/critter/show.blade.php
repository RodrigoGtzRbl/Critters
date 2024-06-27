@extends('layouts.app')

@section('template_title')
    {{ $critter->name ?? __('Show') . " " . __('Critter') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Critter</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('critters.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Name:</strong>
                                    {{ $critter->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Species:</strong>
                                    {{ $critter->species }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Type 1:</strong>
                                    {{ $critter->type_1 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Type 2:</strong>
                                    {{ $critter->type_2 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Type 3:</strong>
                                    {{ $critter->type_3 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Description:</strong>
                                    {{ $critter->description }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Region:</strong>
                                    {{ $critter->region }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>User Id:</strong>
                                    {{ $critter->user_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Encounter Difficulty:</strong>
                                    {{ $critter->encounter_difficulty }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Sound:</strong>
                                    {{ $critter->sound }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
