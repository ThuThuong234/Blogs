@extends('layout.layout')

@section('title', 'Department')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="text-primary bold"><h2>Create Department</h2></div>
    {!! Form::open(['url'=>'departments','method'=>'POST']) !!}
    @include('department.form')
    {!! Form::close() !!}
@endsection