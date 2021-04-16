@extends('master')

@section('page')
<div class="container">
<h3>Manage Category List</h3>
@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
    @endforeach  
@endif

    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Serial No.</th>
                <th scope="col">Category Name</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
               
               
            </tr>
            </thead>
            <tbody>
                @foreach($categorys as $key => $category)

            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{$category->categoryname}}</td>
                <td>{{$category->categorydescription}}</td>
                
               
                
                

                <td>
                    <a class="btn btn-primary" href="{{ route('edit.category', $category->id) }}">Edit</a>
                    <a class="btn btn-danger" onclick="return confirm('Are you sure?')"  href="{{ route('delete.category',$category->id) }}">Delete</a>
{{--                    <a class="btn btn-warning" href="">View</a>--}}
           {{--     <a class="btn btn-success" href="rou }}te('category.all.products',$category->id)}}">View all Prison Cell</a> --}}

                </td>
            </tr>
            @endforeach
            </tbody>



        </table>
        {{ $categorys->links() }}
    </div>

    @stop
