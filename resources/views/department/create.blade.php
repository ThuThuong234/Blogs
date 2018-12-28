@extends('layout.layout')

@section('title', 'companies')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="text-primary bold"><h2>Create Company</h2></div>
    {!! Form::open(['url'=>'companies','method'=>'POST']) !!}
    @include('department.form')
    {!! Form::close() !!}
@endsection