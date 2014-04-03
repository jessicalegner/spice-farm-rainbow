@extends('layouts.default')
@section('content')

    @if(isset($error))
        <div class="alert alert-danger text-center">
            <h4>{{ $error }}</h4>
        </div>
    @endif

    {{ Form::open(array('route' => array('handleAddSpice'), 'class' => 'form-horizontal')) }}
        <h2 class="">Add Spice</h2>
        <div class="form-group">
            <div class="pull-right">
                <a href="pic2shop://scan?callback=http%3A//jessicalegner.com/spice-farm-rainbow/public/spice/new/EAN" class="btn btn-primary"><i class="fa fa-barcode"></i> Scan Item</a>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2">
                {{ Form::label('name', '', array('class' => 'control-label')) }}
            </div>
            <div class="col-sm-4">
                {{ Form::text('name', isset($product['name']) ? $product['name'] : '', array('class' => 'form-control', 'placeholder' => 'Name of Item')) }} 
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2">
                {{ Form::label('manufacturer', '', array('class' => 'control-label')) }}
            </div>
            <div class="col-sm-4">
                {{ Form::text('manufacturer', isset($product['manufacturer']) ? $product['manufacturer'] : '', array('class' => 'form-control', 'placeholder' => 'Name of Item')) }} 
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2">
                {{ Form::label('expiration', '', array('class' => 'control-label')) }}
            </div>
            <div class="col-sm-4">
                {{ Form::input('date', 'expiration', null, ['class' => 'form-control', 'placeholder' => 'Expiration Date']) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2">
                {{ Form::submit('Submit!', array('class' => 'btn btn-info')) }}
            </div>
        </div>
    {{ Form::close() }}

@stop