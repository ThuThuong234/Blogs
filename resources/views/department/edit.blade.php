@extends('layout.layout')

@section('title', 'Deparments')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="text-primary bold"><h2>Edit Deparment</h2></div>
{!! Form::model($deparment, ['method'=> 'PATCH','url' => [ 'deparments', $deparment->id]]) !!}
    @include('company.form',['submitText'=> 'Update'])
{!! Form::close() !!}
@endsection