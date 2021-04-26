@extends('master')

@section('page')
<div class="container">
<h3>Completed Chargesheet</h3>
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
                <th scope="col">Email</th>
                <th scope="col">Chargesheet Status</th>
               
               
            
            </thead>
            <tbody>
                @foreach($firs as $key => $fir)

            <tr>
                @if($fir->chargesheet_status == 'Completed')
                <th scope="row">{{ $key+1 }}</th>
                <td>{{$fir->station->name}}</td>
                <td>{{$fir->name}}</td>
                <td>{{$fir->mobilenumber}}</td>
                <td>{{$fir->email}}</td>
                <td style="color: green" >{{$fir->chargesheet_status}}</td>

               
                
                
               
                
                

                <td>


                   

                    

                </td>
                @endif
            </tr>
            @endforeach
            </tbody>



        </table>
        {{ $firs->links() }}
    </div>

    @stop
