@extends('master')

@section('page')











<style>


    body{
        background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    }
    .emp-profile{
        padding: 3%;
        margin-top: 3%;
        margin-bottom: 3%;
        border-radius: 0.5rem;
        background: #fff;
    }
    .profile-img{
        text-align: center;
    }
    .profile-img img{
        width: 70%;
        height: 100%;
    }
    .profile-img .file {
        position: relative;
        overflow: hidden;
        margin-top: -20%;
        width: 70%;
        border: none;
        border-radius: 0;
        font-size: 15px;
        background: #212529b8;
    }
    .profile-img .file input {
        position: absolute;
        opacity: 0;
        right: 0;
        top: 0;
    }
    .profile-head h5{
        color: #333;
    }
    .profile-head h6{
        color: #0062cc;
    }
    .profile-edit-btn{
        border: none;
        border-radius: 1.5rem;
        width: 70%;
        padding: 2%;
        font-weight: 600;
        color: #6c757d;
        cursor: pointer;
    }
    .proile-rating{
        font-size: 12px;
        color: #818182;
        margin-top: 5%;
    }
    .proile-rating span{
        color: #495057;
        font-size: 15px;
        font-weight: 600;
    }
    .profile-head .nav-tabs{
        margin-bottom:5%;
    }
    .profile-head .nav-tabs .nav-link{
        font-weight:600;
        border: none;
    }
    .profile-head .nav-tabs .nav-link.active{
        border: none;
        border-bottom:2px solid #0062cc;
    }
    .profile-work{
        padding: 14%;
        margin-top: -15%;
    }
    .profile-work p{
        font-size: 12px;
        color: #818182;
        font-weight: 600;
        margin-top: 10%;
    }
    .profile-work a{
        text-decoration: none;
        color: #495057;
        font-weight: 600;
        font-size: 14px;
    }
    .profile-work ul{
        list-style: none;
    }
    .profile-tab label{
        font-weight: 600;
    }
    .profile-tab p{
        font-weight: 600;
        color: #0062cc;
    }
    </style>

    <!--alert message-->
@if(session()->has('message'))
<p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if($errors->any())
@foreach($errors->all() as $er)
    <p class="alert alert-danger">{{$er}}</p>
@endforeach  
@endif
    
    
    <div class="container emp-profile">
                <form method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-img">
                              <img src="http://localhost/CrimeRecord/public/frontend/police.jpg">
                                <div class="file btn btn-lg btn-primary">
                                 
                                    <input type="file" name="file"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile-head">
                                        <h5 style="color:red">
                                           FIR NUMBER : {{ $fir->fir_no}}
                                        </h5>
                                        <h6>
                                           
                                        </h6>
                                        <p class="proile-rating"> <span></span></p>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                    </li>
                                    
                                    
                                </ul>
                            </div>
                        </div>
                     
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            
                        </div>
                        <div class="col-md-8">
                            <div class="tab-content profile-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Police Station Name</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p> {{ $fir->station->name}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Crime Type</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p> {{ $fir->category->categoryname}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Name of Accused Person</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>{{ $fir->nameofaccused}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Victim Name</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>{{ $fir->name}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Victim Mobile Number</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>{{ $fir->mobilenumber}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Victim Address</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>{{ $fir->address}}</p>
                                                </div>
                                            </div>
      
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Victim Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $fir->email}}</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Date of FIR</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p> {{ $fir->created_at->format('d/m/Y')}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label style="color: green">Status</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p style="color: green">{{ $fir->status}}</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        
                                           
                                    
                                            <label></label><br/>
                                            <p></p>
                                        </div>
                                    </div>
                                   
                                </div>
    
                            </div>
                        </div>
                    </div>
                </form>   
                      
            </div>



















    
        <div class="container">
            <h3>Fill Chargesheet Details</h3>

        <form action="{{ route('chargesheet.update',$fir->id) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="sectionoflaw">Section of Law</label>
                <input type="text" name="sectionoflaw" class="form-control" id="sectionoflaw" placeholder="Maximum 10 Character">
              </div>

              <div class="form-group">
                <label for="officer">Name Of Investigation Officer</label>
                <input type="text" name="officer" class="form-control" id="officer" placeholder="Maximum 20 Character">
              </div>

              <div class="form-group">
                <label for="investigationdetails">Investigation Details</label>
                <textarea type="text" name="investigationdetails" class="form-control" id="investigationdetails" placeholder="Maximum 255 Character" cols="20" rows="5"></textarea>
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
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                
          
      </form>
           








@endsection