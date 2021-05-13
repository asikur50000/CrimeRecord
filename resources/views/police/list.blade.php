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
                
                <th scope="col">Police Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Address</th>
               
                <th scope="col">Action</th>
                
               
            </tr>
            </thead>
            <tbody>
                @foreach($users as $key => $user)

            <tr>
                @if($user->role == 'Police')
                <th scope="row">#</th>
           
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->mobile}}</td>
                <td>{{$user->address}}</td>
                
                <th> view</th>
                
               @endif
              
            </tr>
            @endforeach
            </tbody>



        </table>
        {{ $users->links() }}
    </div>

    @stop
