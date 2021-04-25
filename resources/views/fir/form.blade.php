@extends('master')
@section('page')

<div class='container'>
  
  <h2>New FIR Form</h2>


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
  <label for="policestation">Police Station</label>
  <select class="form-control" name="policestation" id="policestation">
    <option selected>Choose...</option>
      @foreach ($stations as $station)
      <option value="{{$station->id}}">{{$station->name}}</option>
      @endforeach
  </select>
</div>

</head>

<div class="form-group">
  <label for="crimetype">Crime Type</label>
  <select class="form-control" name="crimetype" id="crimetype">
    <option selected>Choose...</option>
      @foreach ($categorys as $category)
      <option value="{{$category->id}}">{{$category->categoryname}}</option>
      @endforeach
  </select>
</div>

  <div class="form-group">
    <label for="nameofaccused">Name of Accused</label>
    <input type="text" name="nameofaccused" class="form-control" id="nameofaccused" placeholder="">
  </div>


  
    <h4>Applicant's Details(Victim)</h4>

  
  <div class="form-group">
    <label for="name"> Victim Name</label>
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
    <textarea type="text" name="purposeofapplyingfir" class="form-control" id="ipurposeofapplyingfir" placeholder="" cols="20" rows="5"></textarea>
  </div>
  

  
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Add</button>
  </div>
</form>
@stop