@extends('master')

@section('page')
<div class="container">
<h3>Police Station List</h3>
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
                <th scope="col">Police Station Name</th>
                <th scope="col">Police Station Code</th>
                <th scope="col">Action</th>
               
               
            </tr>
            </thead>
            <tbody>
                @foreach($stations as $key => $station)

            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{$station->name}}</td>
                <td>{{$station->code}}</td>
                
                

                <td>
                    <a class="btn btn-primary" href="{{ route('edit.station', $station->id) }}">Edit</a>
                    <a class="btn btn-danger" onclick="return confirm('Are you sure?')"  href="{{ route('delete.station',$station->id) }}">Delete</a>
{{--                    <a class="btn btn-warning" href="">View</a>--}}
           {{--     <a class="btn btn-success" href="rou }}te('category.all.products',$category->id)}}">View all Prison Cell</a> --}}

                </td>
            </tr>
            @endforeach
            </tbody>



        </table>
        {{ $stations->links() }}
    </div>

    @stop
