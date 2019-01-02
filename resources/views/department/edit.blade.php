@extends('layout.layout')

@section('title', 'Deparments')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="text-primary bold"><h2>Edit Deparment</h2></div>
{!! Form::model($department, ['method'=> 'PATCH','url' => [ 'departments', $department->id]]) !!}
    @include('department.form',['submitText'=> 'Update'])
{!! Form::close() !!}
@endsection