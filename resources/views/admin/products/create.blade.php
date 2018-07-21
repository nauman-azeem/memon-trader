@extends('layouts.admin')
@section('content')
  <h1>Create Users</h1>
  {!! Form::open(['method'=>'POST', 'action'=>'AdminProductsController@store', 'files'=>true]) !!}
    <div class="form-group">
      
    </div>
  {!! Form::close() !!}
  @include('includes.form_error')
@endsection
@section('footer')
@endsection