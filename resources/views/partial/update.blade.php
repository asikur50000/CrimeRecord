@extends('master')
@section('page')
<div class="container"> 
<h1>
Update Profile
</h1>
@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
    @endforeach  
@endif
<form action=""></form>
<form method="post" action="{{ route('update.profile',$user->id) }}" enctype="multipart/form-data">
@csrf
  <div class="form-group" >
    <label for="name"> Name</label>
    <input type="text" required name="name" class="form-control" value="{{$user->name}}"  id="name" aria-describedby="emailHelp" placeholder="Enter your name">
  </div>

  <div class="form-group" >
    <label for="username"> Username</label>
    <input type="text" required name="username" class="form-control" value="{{$user->username}}"  id="username" aria-describedby="emailHelp" placeholder="Enter your user name">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email"value="{{$user->email}}" >
  </div>

  <div class="form-group">
    <label for="nid">National ID Card</label>
    <input type="string" name="nid" class="form-control" id="nid" placeholder="Enter your NID"value="{{$user->nid}}" >
  </div>

 

  <div class="form-group">
    <label for="age">Age</label>
    <input type="number" name="age" class="form-control" id="age" placeholder="Enter your age"value="{{$user->age}}" >
  </div>
  
  <div class="form-group">
    <label for="address">Address</label>
    <input type="string" name="address" class="form-control" id="address" placeholder="Enter your address"value="{{$user->address}}" >
  </div>
   
  <div class="form-group">
      <label for="gender">Gender</label>
      <select id="gender" required name="gender" class="form-control"" >
        <option selected >{{$user->gender}}</option>
        <option>Male</option>
        <option>Female</option>
      </select>
    </div>
    <div class="form-group">
        <label for="image">User Image</label>
        <input type="file" name="image" class="form-control" value="{{ $user->image }}" id="image" placeholder="Select Image">
      </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop