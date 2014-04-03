@extends('layouts.default')
<SCRIPT LANGUAGE="JavaScript">
     function tryscan() {
      setTimeout(function() {
      // if pic2shop not installed yet, go to App Store
      window.location = "https://itunes.apple.com/us/app/pic2shop-barcode-scanner-qr/id308740640";
     }, 25);
     // launch pic2shop
     window.location="pic2shop://scan?callback=http%3A//jessicalegner.com/new/%3DEAN%26";
     }
 </SCRIPT>
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
            <div class="col-sm-1">
                 <a href="pic2shop://scan?callback=http%3A//jessicalegner.com/spice-farm-rainbow/public/new/EAN" onclick="tryscan" class="btn btn-primary"><i class="fa fa-barcode"></i></a>
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