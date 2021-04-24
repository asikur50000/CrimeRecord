@extends('master')

@section('page')
<div class="container">
<h3>Approved FIR for Chargesheet</h3>
@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
    @endforeach  
@endif

    <div class="row">

        @if($firs->status == 'Approved')

        <table class="table">
            <thead>
            
                <th scope="col">Serial No.</th>
                
                <th scope="col">Police Station</th>
                <th scope="col">Name</th>
                <th scope="col">Mobile Number</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
                
                
                <th scope="col">Action</th>
               
               
            
            </thead>
            <tbody>
                @foreach($firs as $key => $fir)

            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{$fir->station->name}}</td>
                <td>{{$fir->name}}</td>
                <td>{{$fir->mobilenumber}}</td>
                <td>{{$fir->email}}</td>
                <td>{{$fir->status}}</td>    
                

                <td>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>

        @endif

        {{ $firs->links() }}
    </div>

    @stop
