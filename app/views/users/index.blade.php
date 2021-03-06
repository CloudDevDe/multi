@extends('layouts.master')

@section ('title')
    Benutzerübersicht
@stop

@section('content')
<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div class="box box-primary">
    <div class="box-header">
        <div class="pull-right box-tools">
                <a class="btn btn-small btn-info" href="{{ URL::to('users/create') }}">Anlegen</a>
            </a>
        </div>
        <i class="fa fa-user"></i>
        <h3 class="box-title">Benutzerverwaltung</h3>
    </div>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Nr.</td>
            <td>Benutzername</td>
            <td>Email</td>
            <td>Aktionen</td>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->email }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->
                {{ Form::open(array('url' => 'users/' . $user->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Löschen', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}
                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('users/' . $user->id) }}">Profil</a>

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('users/' . $user->id . '/edit') }}">Bearbeiten</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@stop