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
            
                <th scope="col">FIR Number</th> 
                <th scope="col">Police Station</th>
                <th scope="col">Victim Name</th>
                <th scope="col"> Victim Mobile Number</th> 
                <th scope="col"> Name Of Accused Person</th>
                <th scope="col">Chargesheet Status</th>
               
               
            
            </thead>
            <tbody>
                @foreach($firs as $key => $fir)

            <tr>
                @if($fir->chargesheet_status == 'Completed')
                <td>{{$fir->fir_no}}</td>
                <td>{{$fir->station->name}}</td>
                <td>{{$fir->name}}</td>
                <td>{{$fir->mobilenumber}}</td>
                <td>{{$fir->nameofaccused}}</td>
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
