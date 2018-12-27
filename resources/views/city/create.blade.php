@extends('layout.layout')

@section('title', 'Cities')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="text-primary bold"><h2>Edit City</h2></div>
    {!! Form::open(['url'=>'cities','method'=>'POST']) !!}
    @include('city.form')
    {!! Form::close() !!}
@endsection