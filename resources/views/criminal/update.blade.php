@extends('master')
@section('page')

<div class='container'>
  
  <h3>Update Criminal Details</h3>


<!--alert message-->
@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
    @endforeach  
@endif



<form method="post" action="{{ route('update.criminal',$criminal->id) }}">
@csrf

  
  <div class="form-group">
    <label for="criminalname">*Criminal Name</label>
    <input type="text" name="criminalname" class="form-control" id="criminalname" value="{{ $criminal->criminalname }}" placeholder="">
  </div>
  <div class="form-group">
    <label for="mobilenumber">*Criminal Emergency Contact Number</label>
    <input type="number" name="mobilenumber" class="form-control" id="mobilenumber" value="{{ $criminal->mobilenumber }}" placeholder="">
  </div>
  <div class="form-group">
    <label for="criminaldateofbirth">*Criminal Date of Birth</label>
    <input type="date" name="criminaldateofbirth" class="form-control" id="criminaldateofbirth" value="{{ $criminal->criminaldateofbirth }}" placeholder="">
  </div>
  <div class="form-group">
    <label for="crimetype">*Crime Type</label>
    <input type="text" name="crimetype" class="form-control" id="crimetype" value="{{ $criminal->crimetype }}" placeholder="">
  </div>
  <div class="form-group">
    <label for="crimetime">*Crime Time</label>
    <input type="text" name="crimetime" class="form-control" id="crimetime" value="{{ $criminal->crimetime }}" placeholder="">
  </div>
  <div class="form-group">
    <label for="crimedate">Crime Date</label>
    <input type="date" name="crimedate" class="form-control" id="email" value="{{ $criminal->crimedate }}" placeholder="">
  </div>
  
  <div class="form-group">
    <label for="zipcode">*Area Zip Code</label>
    <input type="number" name="zipcode" class="form-control" id="zipcode" value="{{ $criminal->zipcode }}" placeholder="">
  </div>
  <div class="form-group">
    <label for="crimecity">*Crime City</label>
    <input type="text" name="crimecity" class="form-control" id="crimecity" value="{{ $criminal->crimecity }}" placeholder="">
  </div>
  <div class="form-group">
    <label for="policestation">*Police Station</label>
    <input type="text" name="policestation" class="form-control" id="policestation" value="{{ $criminal->policestation }}" placeholder="">
  </div>

  
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Add</button>
  </div>
</form>
@stop