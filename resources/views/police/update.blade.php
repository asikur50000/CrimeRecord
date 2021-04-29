@extends('master')
@section('page')

<div class='container'>
  
  <h3>Update Police Details</h3>


<!--alert message-->
@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
    @endforeach  
@endif



<form method="post" action="{{ route('update.police',$police->id) }}">
@csrf

  <div class="form-group">
    <label for="policestation">*Police Station</label>
    <input type="text" name="policestation" class="form-control" id="policestation" value="{{ $police->policestation }}" placeholder="">
  </div>


  <div class="form-group">
    <label for="policename">*Police Name</label>
    <input type="text" name="policename" class="form-control" id="policename" value="{{ $police->policename }}" placeholder="">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="Email" name="email" class="form-control" id="email" value="{{ $police->email }}" placeholder="">
  </div>
  <div class="form-group">
    <label for="mobile">*Mobile Number</label>
    <input type="number" name="mobile" class="form-control" id="mobile" value="{{ $police->mobile }}" placeholder="">
  </div>
  <div class="form-group">
    <label for="address">*Address</label>
    <input type="text" name="address" class="form-control" id="address" value="{{ $police->address }}" placeholder="">
  </div>
  <!--
  <div class="form-group">
    <label for="password">*Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
  </div>
  -->
  <div class="form-group">
    <button type="submit" class="btn btn-info">Update</button>
  </div>
</form>
@stop