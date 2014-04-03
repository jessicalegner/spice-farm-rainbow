@extends('layouts.default')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Your Spices</h1>
            <p class="pull-right">
                <a href="/spice/new" class="btn btn-primary"><i class="fa fa-plus"></i> Add New Spice</a>
            </p>
        </div>
    </div>
    @foreach ($spices as $spice)
    <div class="row">
        <div class="col-md-4">
          <p><a href="/spices/{{ $spice->id }}/edit">{{ $spice->name }}</a></p>
        </div>
        <div class="col-md-3">
            {{ $spice->manufacturer }}
        </div>
        <div class="col-md-3">
          <span class="label label-danger">Expires on:</span> {{ $spice->expiration }}
        </div>
        <div class="col-md-2">
            <a href="/spice/destroy/{{ $spice->id }}" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a>
        </div>
    </div>
    <hr>
    @endforeach
</div>

@stop