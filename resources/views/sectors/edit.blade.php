@extends('layouts.admin')

@section('content')
<div class="">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Sector #{{ $sector->id }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('errors'))
                        <div class="alert alert-danger" role="alert">
                            @foreach(session('errors')->all() as $error)
                                * {{ $error }}<br />
                            @endforeach
                        </div>
                    @endif
                    <h3></h3>
                    {{ Form::open(['method' => 'PUT', 'action' => ['SectorController@update', $sector->id]]) }}

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                {{ Form::label('sector', 'Sector Name') }}
                                {{ Form::text('sector', $sector->name, ['class' => 'form-control', 'placeholder' => 'Sector Name']) }}
                            </div>
                        </div>

                        {{ Form::submit('Update', ['class' => 'btn btn-primary']) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
