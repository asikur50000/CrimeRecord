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
    
    
    <div class="container emp-profile">
                <form method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-img">
                                <img src="{{ url('/uploads/user/' .$user->image) }}" alt="photo is missing">
                               
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile-head">
                                        <h5 style="font-weight: bold">
                                           Police Name : {{ $user->name}}
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
                                                    <label>Police Age</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p> {{ $user->age}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Police NID</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p> {{ $user->nid}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Police Gender</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>{{ $user->gender}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Police Email</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>{{ $user->email}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Police Address</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>{{ $user->address}}</p>
                                                </div>
                                            </div>
                                          
                                              <div class="row">
                                                <div class="col-md-6">
                                                    <label>Police Station</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>{{optional($user->station)->name}}</p>
                                                </div>
                                            </div>
    
    
    
                                            
                                </div>

                               
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                              
                                        
                                           
                                    <div class="row">
                                        <div class="col-md-12">
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

            @endsection
