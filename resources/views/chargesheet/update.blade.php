@extends('master')

@section('page')


<div class="container">
    <h3>Fill Chargesheet Details</h3>
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
                   
    
                        <!--a class="btn btn-danger" onclick="return confirm('Are you sure?')"  href="{{ route('delete.fir',$fir->id) }}">Delete</a-->
    
    
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    
        <div class="container">
            <h3>Fill Chargesheet Details</h3>

        <form action="{{ route('chargesheet.update',$fir->id) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="sectionoflaw">Section of Law</label>
                <input type="text" name="sectionoflaw" class="form-control" id="sectionoflaw" placeholder="">
              </div>

              <div class="form-group">
                <label for="officer">Name Of Investigation Officer</label>
                <input type="text" name="officer" class="form-control" id="officer" placeholder="">
              </div>

              <div class="form-group">
                <label for="investigationdetails">Investigation Details</label>
                <textarea type="text" name="investigationdetails" class="form-control" id="investigationdetails" placeholder="" cols="20" rows="5"></textarea>
              </div>

             

              <div class="form-group">
                <label for="chargesheet_status"> Chargesheet Status</label>
                <select name="chargesheet_status" id="chargesheet_status" class="form-control">
                    <option selected>Choose..</option>
                     <option >Completed</option>
                     <option >Cancelled</option>
                </select>
               </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add</button>
                  </div>
                
          
      </form>
           








@endsection