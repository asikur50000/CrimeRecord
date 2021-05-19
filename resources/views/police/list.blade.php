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
                
                
                <th scope="col">Police Name</th>
                <th scope="col">Email</th>
                <th scope="col">NID</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
               
                <th scope="col">Action</th>
                
               
            </tr>
            </thead>
            <tbody>
                @foreach($users as $key => $user)

            <tr>
                @if($user->role == 'Police')
              
           
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->nid}}</td>
                <td>{{$user->age}}</td>
                <td>{{$user->gender}}</td>
                
                <td>
                    <a class="btn btn-success" href="{{ route('view.police',$user->id) }}">View</a>
                
               @endif
              
            </tr>
            @endforeach
            </tbody>



        </table>
        {{ $users->links() }}
    </div>

    @stop
