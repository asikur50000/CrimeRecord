@extends('master')
@section('page')

<div class='container'>
  
  <h3>New FIR Form</h3>


<!--alert message-->
@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
    @endforeach  
@endif



<form method="post" action="{{route('fir.store')}}">
@csrf

  <div class="form-group">
    <label for="policestation">*Police Station</label>
    <input type="text" name="policestation" class="form-control" id="policestation" placeholder="">
  </div>

  <div class="form-group">
    <label for="crimetype">*Crime Type</label>
    <input type="text" name="crimetype" class="form-control" id="crimetype" placeholder="">
  </div>

  <div class="form-group">
    <label for="nameofaccused">*Name of Accused</label>
    <input type="text" name="nameofaccused" class="form-control" id="nameofaccused" placeholder="">
  </div>


  
    <h2>Applicant's Details(Victim)</h2>

  
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="">
  </div>
  <div class="form-group">
    <label for="mobilenumber">Victim Mobile Number</label>
    <input type="number" name="mobilenumber" class="form-control" id="mobilenumber" placeholder="">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" name="address" class="form-control" id="address" placeholder="">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" name="email" class="form-control" id="email" placeholder="">
  </div>
   <!--
  <div class="form-group">
    <label for="relationwithaccusedperson">Relation With Accused Person</label>
    <input type="text" name="relationwithaccusedperson" class="form-control" id="relationwithaccusedperson" placeholder="">
  </div>
  -->
 
  <div class="form-group">
    <label for="purposeofapplyingfir">Purpose of Applying FIR</label>
    <input type="text" name="purposeofapplyingfir" class="form-control" id="purposeofapplyingfir" placeholder="">
  </div>
  

  
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Add</button>
  </div>
</form>
@stop