@extends('layout.layout')

@section('title', 'departments')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="text-primary bold"><h2>Create Deparment</h2></div>
    {!! Form::open(['url'=>'companies','method'=>'POST']) !!}
    @include('company.form')
    {!! Form::close() !!}
@endsection