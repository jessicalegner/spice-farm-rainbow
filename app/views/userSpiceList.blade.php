@extends('layouts.default')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Your Spices</h1>
            <span class="pull-right">
                <a href="/spice/add" class="btn btn-primary">Add</a>
            </span>
        </div>
    </div>
    @foreach ($spices as $spice)
        <div class="row">
        <div class="col-md-2">
          <p><a href="/spices/{{ $spice->id }}/edit">{{ $spice->name }}</a></p>
        </div>
        <div class="col-md-3">
          <span class="label label-danger">Expires on:</span> {{ $spice->expiration }}
        </div>
    </div>
    <hr>
    @endforeach
</div>

@stop