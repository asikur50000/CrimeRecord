@extends('master')

@section('page')
<div class="container">
<h3>FIR History</h3>
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
            
                <th scope="col">FIR No.</th>
                
                <th scope="col">Police Station</th>
                <th scope="col">Name</th>
                <th scope="col">Mobile Number</th>
                <th scope="col">Address</th>
                <th scope="col">Email</th>
                
                
                <th scope="col">Action</th>
               
               
            
            </thead>
            <tbody>
                @foreach($firs as $key => $fir)

            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{$fir->policestation}}</td>
                <td>{{$fir->name}}</td>
                <td>{{$fir->mobilenumber}}</td>
                <td>{{$fir->address}}</td>
                <td>{{$fir->email}}</td>
               
                
                
               
                
                

                <td>


                   

                    <a class="btn btn-danger" onclick="return confirm('Are you sure?')"  href="{{ route('delete.fir',$fir->id) }}">Delete</a>


                </td>
            </tr>
            @endforeach
            </tbody>



        </table>
        {{ $firs->links() }}
    </div>

    @stop
