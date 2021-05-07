@extends('master')
@section('page')

<div class='container'>
  
  <h3>Add Police Details</h3>


<!--alert message-->
@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
    @endforeach  
@endif



<form method="post" action="{{route('police.store')}}">
@csrf

  <div class="form-group">
    <label for="policestation">Police Station</label>
    <select class="form-control" name="policestation" id="policestation">
      <option selected>Choose...</option>
        @foreach ($stations as $station)
        <option value="{{$station->id}}">{{$station->name}}</option>
        @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="policename">Police Name</label>
    <input type="text" name="policename" class="form-control" id="policename" placeholder="Maximum 20 Character">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="Email" name="email" class="form-control" id="email" placeholder="Type Email">
  </div>
  <div class="form-group">
    <label for="mobile">Mobile Number</label>
    <input type="number" name="mobile" class="form-control" id="mobile" placeholder="Minimum 10 Digit">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" name="address" class="form-control" id="address" placeholder="Maximum 50 Character">
  </div>
  <!--
  <div class="form-group">
    <label for="password">*Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
  </div>
  -->
  <div class="form-group">
    <button type="submit" class="btn btn-info">Submit</button>
  </div>
</form>
@stop