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



<form method="post" action="{{route('admin.storeRegistration')}}" enctype="multipart/form-data">
@csrf

<div class="form-group">
  <label for="role">Role</label>
  <select id="role" required name="role" class="form-control">
    <option selected>Police</option>
  </select>
</div>

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
    <label for="image">Police Image</label>
    <input type="file" name="image" class="form-control" value="" id="image" placeholder="">
  </div>

  <div class="form-group">
    <label for="name">Police Name</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="">
  </div>

 

  <div class="form-group">
    <label for="email">Email</label>
    <input type="Email" name="email" class="form-control" id="email" placeholder="">
  </div>
  <div class="form-group">
    <label for="nid">NID Number</label>
    <input type="number" name="nid"  class="form-control" id="nid" placeholder="">
  </div>
  <div class="form-group">
    <label for="age">Age</label>
    <input type="number" name="age"  class="form-control" id="age" placeholder="">
  </div>

  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" name="address" class="form-control" id="address" placeholder="">
  </div>

  <div class="form-group">
    <label for="gender">Gender</label>
    <select id="gender" required name="gender" class="form-control">
      <option selected>Choose...</option>
      <option>Male</option>
      <option>Female</option>
    </select>
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Provide Initial Password for POlice Officer">
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