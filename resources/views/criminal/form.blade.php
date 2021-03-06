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
    <input type="text" name="criminalname" class="form-control" id="criminalname" placeholder="">
  </div>
  <div class="form-group">
    <label for="criminalage">Criminal Age</label>
    <input type="number" name="criminalage" class="form-control" id="criminalage" placeholder="">
  </div>

  <div class="form-group">
    <label for="criminalheight">Criminal Height(cm)</label>
    <input type="number" name="criminalheight" class="form-control" id="criminalheight" placeholder="">
  </div>
  
  <div class="form-group">
    <label for="gender">Criminal Gender</label>
    <select id="gender" required name="gender" class="form-control">
      <option selected>Choose...</option>
      <option>Male</option>
      <option>Female</option>
    </select>
  </div>
  
  <div class="form-group">
    <label for="mobilenumber">Criminal Emergency Contact Number</label>
    <input type="number" name="mobilenumber" min="0" oninput="validity.valid||(value='');" class="form-control" id="mobilenumber" placeholder="">
  </div>
  <div class="form-group">
    <label for="criminaldateofbirth">Criminal Date of Birth</label>
    <input type="date" name="criminaldateofbirth" class="form-control" id="criminaldateofbirth" placeholder="">
  </div>
  
  <div class="form-group">
    <label for="crimedate">Crime Date</label>
    <input type="date" name="crimedate" class="form-control" id="email" placeholder="">
  </div>



  <div class="form-group">
    <label for="crimetime">Crime Time</label>
    <input type="text" name="crimetime" class="form-control" id="crimetime" placeholder="">
  </div>
  
  <div class="form-group">
    <label for="crimecity">Crime Area/City</label>
    <input type="text" name="crimecity" class="form-control" id="crimecity" placeholder="">
  </div>
  
  <div class="form-group">
    <label for="zipcode">Area Zip Code</label>
    <input type="number" name="zipcode"  class="form-control" id="zipcode" placeholder="">
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