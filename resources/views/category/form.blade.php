@extends('master')
@section('page')

<div class='container'>
  
  <h3>Add Category</h3>


<!--alert message-->
@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
    @endforeach  
@endif



<form method="post" action="{{route('category.store')}}">
@csrf

  <div class="form-group">
    <label for="categoryname">Category Name</label>
    <input type="text" name="categoryname" class="form-control" id="categoryname" placeholder="">
  </div>
  <div class="form-group">
    <label for="categorydescription">Category Description</label>
    <textarea type="text" name="categorydescription" class="form-control" id="categorydescription" placeholder="" cols="20" rows="5"></textarea>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-info">Add</button>
  </div>
</form>
@stop