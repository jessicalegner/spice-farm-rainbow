@extends('layouts.default')
@section('content')

    {{ Form::open(array('route' => array('handleAddSpice'), 'class' => 'form-horizontal')) }}
        <h2 class="">Add Spice</h2>
        <div class="form-group">
            <div class="col-sm-1">
                {{ Form::label('name', '', array('class' => 'control-label')) }}
            </div>
            <div class="col-sm-3">
                {{ Form::text('name', '', array('class' => 'form-control', 'placeholder' => 'Name of Item')) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-1">
                {{ Form::label('expiration', '', array('class' => 'control-label')) }}
            </div>
            <div class="col-sm-3">
                {{ Form::input('date', 'expiration', null, ['class' => 'form-control', 'placeholder' => 'Expiration Date']) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2">
                {{ Form::submit('Submit!', array('class' => 'btn btn-info')) }}
            </div>
        </div>
    {{ Form::close() }}

@stop