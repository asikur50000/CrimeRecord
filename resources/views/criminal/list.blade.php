@extends('master')

@section('page')
<div class="container">
<h3>Manage Criminals List</h3>
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
                <th scope="col">Police Station</th>
                <th scope="col">Criminal Name</th>
                <th scope="col">Mobile Number</th>
                <th scope="col">Action</th>
               
               
            </tr>
            </thead>
            <tbody>
                @foreach($criminals as $key => $criminal)

            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{$criminal->station->name}}</td>
                <td>{{$criminal->criminalname}}</td>
                <td>{{$criminal->mobilenumber}}</td>
                
               
                
                

                <td>
                    <a class="btn btn-primary" href="{{ route('edit.criminal',$criminal->id) }}">Edit</a>
                    <a class="btn btn-danger" onclick="return confirm('Are you sure?')"  href="{{ route('delete.criminal',$criminal->id) }}">Delete</a>
{{--                    <a class="btn btn-warning" href="">View</a>--}}
           {{--     <a class="btn btn-success" href="rou }}te('category.all.products',$category->id)}}">View all Prison Cell</a> --}}

                </td>
            </tr>
            @endforeach
            </tbody>



        </table>
        {{ $criminals->links() }}
    </div>

    @stop
