@extends('layout.layout')

@section('title', 'companies')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="text-primary bold"><h2>Edit Company</h2></div>
{!! Form::model($company, ['method'=> 'PATCH','url' => [ 'companies', $company->id]]) !!}
    @include('department.form',['submitText'=> 'Update'])
{!! Form::close() !!}
@endsection