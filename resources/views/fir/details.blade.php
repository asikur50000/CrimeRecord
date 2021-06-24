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
<center> <button type="button" onclick="printDiv()" class="btn btn-success" style="margin-bottom: 50px;margin-top: 50px">Print</button></center>
<div id="printArea" >

    <script type="text/javascript">
        function printDiv(){
            var printContents = document.getElementById("printArea").innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
    <div class="row">
        <table class="table">
            <!--<thead>
               
     
               
            
            </thead>-->
            <tbody>
               

            <tr>
                
                <th scope="col">Police Station</th>
                <td>{{optional($fir->station)->name}}</td>
                <th scope="col">Crime Type</th>
                <td>{{optional($fir->category)->categoryname}}</td>
                
          
        
                <th scope="col">Name of Accused</th>
                <td>{{$fir->nameofaccused}}</td>
            </tr>
         <tr>
                <th scope="col">Victim Name</th>
                <td>{{$fir->name}}</td>
                <th scope="col">Purpose of Applying FIR</th>
                <td>{{$fir->purposeofapplyingfir}}</td>
            
                <th scope="col">Mobile Number</th>
                <td>{{$fir->mobilenumber}}</td>
            </tr>
            <tr>
                <th scope="col">Address</th>
                <td>{{$fir->address}}</td>
                <th scope="col">Email</th>
                
                <td>{{$fir->email}}</td>
                
                <th scope="col">Date of FIR</th>
                <td>
                    @if(isset($fir->created_at))
                    {{ $fir->created_at->format('d/m/Y')}}
                    @else
                    {{'-'}}
                    @endif
                </td>
            
                
            </tr>    
               
  </div>             
  </div>             
                
            @if(Auth::check() && Auth::user()->role  == "admin" || Auth::user()->role  == "Police")       
               
                <td class="text-align: center">

                   <!-- Take action modal will be here-->
                   
                   <div  style="text-align: center">
                   <a style="text-align: center"  class="btn btn-sm btn-info float-left " data-toggle="modal" data-target="#modal-<?php echo $fir->id;?>" value=<?php echo $fir->id;?> href="#">Take Action</a>
                 
                    

                
                
              
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
            <label for="fir_no">FIR No.</label>
            <input type="text" class="form-control" id="fir_no" placeholder="" name="fir_no" value="">
        </div>
       <div class="form-group">
           <label for="status">Status</label>
           <select name="status" id="status" class="form-control">
               <option selected>Choose..</option>
                <option >Approved</option>
                <option >Cancelled</option>
           </select>
           
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
                @endif
            </tr>
           
            </tbody>



        </table>
        
    </div>

    @stop