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
            
                <th scope="col">#</th>
                
                <th scope="col">Police Station Name</th>
                <th scope="col">Victim Name</th>
                <th scope="col">Victim Number</th>
                <th scope="col">Accused Person Name</th>
                <th scope="col">Victim Email</th>
                <th scope="col">FIR Status</th>
                
                
                <th scope="col">Action</th>
               
               
            
            </thead>
            <tbody>
                @foreach($firs as $key => $fir)

            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{optional($fir->station)->name}}</td>
                <td>{{$fir->name}}</td>
                <td>{{$fir->mobilenumber}}</td>
                <td>{{$fir->nameofaccused}}</td>
                <td>{{$fir->email}}</td>
                <td>{{$fir->status}}</td>
               
                
                
               
                
                
                <td>


                    <a class="btn btn-success" href="{{ route('fir.details',$fir->id) }}">View</a>

                    <button type="button" onclick="printDiv()" class="btn btn-success">Print</button>

                    @if(Auth::check() && Auth::user()->role  == "admin" || Auth::user()->role  == "Police")
                    <a class="btn btn-danger" onclick="return confirm('Are you sure?')"  href="{{ route('delete.fir',$fir->id) }}">Delete</a>
                    @endif

                </td>
               
            </tr>
            
            @endforeach
            </tbody>



        </table>
        {{ $firs->links() }}
    </div>
    <script type="text/javascript">
        function printDiv(){
            var printContents = document.getElementById("printArea").innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>

    @stop
