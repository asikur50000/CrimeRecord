@extends('master')

@section('page')
<div class="container">
<h3>Manage Police List</h3>
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
                <th scope="col">#</th>
                <th scope="col">Station Name</th>
                <th scope="col">Police Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Address</th>
               
                <th scope="col">Action</th>
                
               
            </tr>
            </thead>
            <tbody>
                @foreach($polices as $key => $police)

            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{$police->station->name}}</td>
                <td>{{$police->policename}}</td>
                <td>{{$police->email}}</td>
                <td>{{$police->mobile}}</td>
                <td>{{$police->address}}</td>
                
                
                

                <td>
                    <a class="btn btn-primary" href="{{ route('edit.police',$police->id) }}">Edit</a>
                    <a class="btn btn-danger" onclick="return confirm('Are you sure?')"  href="{{ route('delete.police',$police->id) }}">Delete</a>
{{--                    <a class="btn btn-warning" href="">View</a>--}}
           {{--     <a class="btn btn-success" href="rou }}te('category.all.products',$category->id)}}">View all Prison Cell</a> --}}

                </td>
            </tr>
            @endforeach
            </tbody>



        </table>
        {{ $polices->links() }}
    </div>

    @stop
