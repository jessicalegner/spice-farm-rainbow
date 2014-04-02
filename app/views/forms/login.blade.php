@extends('layouts.default')
@section('content')

    @if(Session::has('error'))
        <div class="alert alert-danger text-center">
            <h4>{{ Session::get('error') }}</h4>
        </div>
    @endif

    {{ Form::open(array('route' => array('handleLogin'), 'class' => 'form-signin')) }}
        <h2 class="form-signin-heading">Please Sign In</h2>
        {{ Form::email('email', '', array('class' => 'form-control', 'placeholder' => 'Email'))}}
        {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password'))}}
        {{ Form::submit('Submit!', array('class' => 'btn btn-info btn-block')) }}
    {{ Form::close() }}

@stop