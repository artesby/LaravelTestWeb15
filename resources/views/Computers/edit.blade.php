@extends('Computers.sample')

@section('title', 'Edit')

@section('body')
<h1>Edit computer</h1>

{!! Form::open(['action' => 'ComputersController@index', 'method' => 'GET', 'style'=>'display:inline']) !!}
{!! Form::submit('back', ['class' => 'button']) !!}
{!! Form::close() !!}

@endsection
