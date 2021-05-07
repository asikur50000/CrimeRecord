@extends('master')
@section('page')

<div class='container'>
  
  <h3>Add Criminal Details</h3>


<!--alert message-->
@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
    @endforeach  
@endif



<form method="post" action="{{route('criminal.store')}}" enctype="multipart/form-data">
@csrf

  
  <div class="form-group">
    <label for="criminalname">Criminal Name</label>
    <input type="text" name="criminalname" class="form-control" id="criminalname" placeholder=" Maximum 20 Character">
  </div>
  <div class="form-group">
    <label for="criminalage">Criminal Age</label>
    <input type="number" name="criminalage" class="form-control" id="criminalage" placeholder="Maximum 2 Digit">
  </div>

  <div class="form-group">
    <label for="criminalheight">Criminal Height</label>
    <input type="number" name="criminalheight" class="form-control" id="criminalheight" placeholder="Enter Height">
  </div>
  
  <div class="form-group">
    <label for="mobilenumber">Criminal Emergency Contact Number</label>
    <input type="number" name="mobilenumber" class="form-control" id="mobilenumber" placeholder="Minimum 10 Digit">
  </div>
  <div class="form-group">
    <label for="criminaldateofbirth">Criminal Date of Birth</label>
    <input type="date" name="criminaldateofbirth" class="form-control" id="criminaldateofbirth" placeholder="Enter Birthdate">
  </div>
  
  <div class="form-group">
    <label for="crimedate">Crime Date</label>
    <input type="date" name="crimedate" class="form-control" id="email" placeholder="Enter Crime Date">
  </div>



  <div class="form-group">
    <label for="crimetime">Crime Time</label>
    <input type="text" name="crimetime" class="form-control" id="crimetime" placeholder="Enter Crime Time">
  </div>
  
  <div class="form-group">
    <label for="crimecity">Crime Area/City</label>
    <input type="text" name="crimecity" class="form-control" id="crimecity" placeholder="Maximum 20 Characters">
  </div>
  
  <div class="form-group">
    <label for="zipcode">Area Zip Code</label>
    <input type="number" name="zipcode" class="form-control" id="zipcode" placeholder="Maximum 4 Digit">
  </div>

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
    <label for="policestation">Police Station</label>
    <select class="form-control" name="policestation" id="policestation">
      <option selected>Choose...</option>
        @foreach ($stations as $station)
        <option value="{{$station->id}}">{{$station->name}}</option>
        @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="image">Criminal Image</label>
    <input type="file" name="image" class="form-control" value="" id="image" placeholder="Select Image">
  </div>


  
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Add</button>
  </div>
</form>
@stop