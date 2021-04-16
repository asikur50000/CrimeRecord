@extends('master')
@section('page')

<div class='container'>
  <h1>Add Police Station Details</h1>


<!--alert message-->
@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
    @endforeach  
@endif



<form method="post" action="{{route('station.store')}}">
@csrf

  <div class="form-group">
    <label for="name">*Police Station Name</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="">
  </div>
  <div class="form-group">
    <label for="code">*Police Station Code</label>
    <input type="text" name="code" class="form-control" id="code" placeholder="">
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
@stop