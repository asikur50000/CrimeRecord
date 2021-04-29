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

     

        <table class="table">
            <thead>
            
                <th scope="col">FIR Number</th>
                
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
                @if($fir->status == 'Approved')
                <td>{{$fir->fir_no}}</td>
                <td>{{$fir->station->name}}</td>
                <td>{{$fir->name}}</td>
                <td>{{$fir->mobilenumber}}</td>
                <td>{{$fir->email}}</td>
               
                <td style="color: green" >{{$fir->status}}</td>  

               <td> 
                         <a class="btn btn-primary" href="{{ route('chargesheet.edit',$fir->id,) }}">Take Action</a> 
                </td>

                @endif

                <td>
                </td>
            </tr>
            @endforeach
            </tbody>
           
        </table>

      

        {{ $firs->links() }}
 
    </div>

    @stop
