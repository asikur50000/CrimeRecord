@extends('master')

@section('page')
<div class="container">
<h3>FIR Details</h3>
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
            <!--<thead>
               
     
               
            
            </thead>-->
            <tbody>
                @foreach($firs as $key => $fir)

            <tr>
                <th scope="col">Serial No.</th> 
                <th scope="row">{{ $key+1 }}</th>
                <th scope="col">Police Station</th>
                <td>{{$fir->station->name}}</td>
                <th scope="col">Crime Type</th>
                <td>{{$fir->category->categoryname}}</td>
                
            </tr>
            <tr>
                <th scope="col">Name of Accused</th>
                <td>{{$fir->nameofaccused}}</td>
                <th scope="col">Victim Name</th>
                <td>{{$fir->name}}</td>
                <th scope="col">Purpose of Applying FIR</th>
                <td>{{$fir->purposeofapplyingfir}}</td>
            </tr>
            <tr>
                <th scope="col">Mobile Number</th>
                <td>{{$fir->mobilenumber}}</td>
                <th scope="col">Address</th>
                <td>{{$fir->address}}</td>
                <th scope="col">Email</th>
                
                <td>{{$fir->email}}</td>
                
            </tr>
            <tr>
                <th scope="col">Date of FIR</th>
                <td>
                    @if(isset($fir->created_at))
                    {{ $fir->created_at->format('d/m/Y')}}
                    @else
                    {{'-'}}
                    @endif
                </td>
            
            <th scope="col">Status</th>
                <td style="color: green">{{$fir->status}}</td>
                
            </tr>    
               
               
                
                
               
                <td class="text-align: center">


                   <!-- Take action modal will be here-->
                   
                   <div  style="text-align: center">
                   <a style="text-align: center"  class="btn btn-sm btn-info float-right " data-toggle="modal" data-target="#modal-<?php echo $fir->id;?>" value=<?php echo $fir->id;?> href="#">Take Action</a>
              
                   <!-- Modal -->
<div class="modal fade" id="modal-<?php echo $fir->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
       <div class="modal-content">
       <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLongTitle">Update Fir Details</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
           </button>
       </div>
       <div class="modal-body">



       <form method="post" action="{{ route('update.fir',$fir->id) }}">
        @csrf
        <div class="form-group">
            <label for="remark">Remark</label>
            <textarea type="text" name="remark" class="form-control" id="remark" placeholder="" cols="20" rows="5"></textarea>
          </div>
       <div class="form-group">
           <label for="status">Status</label>
           <select name="status" id="status" class="form-control">
               <option selected>Choose..</option>
                <option >Approved</option>
                <option >Cancelled</option>
           </select>
           
       </div>
      
       <div class="form-group">
           <label for="fir_no">FIR No.</label>
           <input type="text" class="form-control" id="fir_no" placeholder="" name="fir_no" value="">
       </div>
      
      

       </div>
       <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
           <input type="submit" value="submit" class="btn btn-primary">
   
       </div>
       </form>
       </div>
   </div>
   </div>





                    <!--a class="btn btn-danger" onclick="return confirm('Are you sure?')"  href="{{ route('delete.fir',$fir->id) }}">Delete</a-->


                </td>
            </tr>
            @endforeach
            </tbody>



        </table>
        {{ $firs->links() }}
    </div>

    @stop