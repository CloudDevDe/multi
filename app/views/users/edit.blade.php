@extends('layouts.master')

@section ('title')
    Benutzer bearbeiten
@stop

@section ('content')

<div class="box box-primary">
    <div class="box-header">
<br>
    </div>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}

    <div class="form-group">
        {{ Form::label('username', 'Benutzername', ['class' => 'col-sm-1 control-label']) }}
        <div class="col-sm-6">
        {{ Form::text('username', null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email', ['class' => 'col-sm-1 control-label']) }}
        <div class="col-sm-6">
        {{ Form::text('email', null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-1 col-sm-6">
            {{ Form::submit('Bearbeiten', ['class' => 'btn btn-default']) }}
        </div>
    </div>

{{ Form::close() }}
<br>

@stop