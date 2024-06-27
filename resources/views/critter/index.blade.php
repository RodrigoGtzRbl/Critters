@extends('layouts.app')

@section('template_title')
    Critters
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Critters') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('critters.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Name</th>
									<th >Species</th>
									<th >Type 1</th>
									<th >Type 2</th>
									<th >Type 3</th>
									<th >Description</th>
									<th >Region</th>
									<th >User Id</th>
									<th >Encounter Difficulty</th>
									<th >Sound</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($critters as $critter)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $critter->name }}</td>
										<td >{{ $critter->species }}</td>
										<td >{{ $critter->type_1 }}</td>
										<td >{{ $critter->type_2 }}</td>
										<td >{{ $critter->type_3 }}</td>
										<td >{{ $critter->description }}</td>
										<td >{{ $critter->region }}</td>
										<td >{{ $critter->user_id }}</td>
										<td >{{ $critter->encounter_difficulty }}</td>
										<td >{{ $critter->sound }}</td>

                                            <td>
                                                <form action="{{ route('critters.destroy', $critter->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('critters.show', $critter->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('critters.edit', $critter->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $critters->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
