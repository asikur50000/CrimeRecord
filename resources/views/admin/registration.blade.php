<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Registration Form</title>

    <!-- Icons font CSS-->
    <link href="{{asset('registration')}}/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="{{asset('registration')}}/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('registration')}}/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{asset('registration')}}/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('registration')}}/css/main.css" rel="stylesheet" media="all">
</head>

<!--alert message-->
@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
    @endforeach  
@endif

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form method="POST" action="{{ route('admin.storeRegistration') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select id="role" required name="role" class="form-control">
                              <option selected>user</option>
                            </select>
                          </div>

                        <div class="row row-space">
                           
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="name">Name</label>
                                    <input required class="input--style-4" type="text" name="name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="username">Username</label>
                                    <input class="input--style-4" type="text" name="username">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="age">Age</label>
                                    <div class="input-group">
                                        <input class="input--style-4" type="number" name="age">
                                        <i class=""></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="gender">Gender</label>
                                    <select id="gender" required name="gender" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                      </select>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="email">Email</label>
                                    <input class="input--style-4" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="phone">Phone Number</label>
                                    <input class="input--style-4" type="number" name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="nid">NID</label>
                                    <input class="input--style-4" type="number" name="nid">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="address">Address</label>
                                    <input class="input--style-4" type="text" name="address">
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                            <label for="image">Your Picture</label>
                            <input type="file" name="image" class="form-control" value="" id="image" placeholder="">
                          </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="password">Password</label>
                                <input class="input--style-4" type="password" name="password">
                            </div>
                        </div>
                    
                       
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                            <a class="btn btn-info" style="color: green" href="http://localhost/CrimeRecord/public/">Back to Home</a>
                        </div>
                      
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{asset('registration')}}/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="{{asset('registration')}}/vendor/select2/select2.min.js"></script>
    <script src="{{asset('registration')}}/vendor/datepicker/moment.min.js"></script>
    <script src="{{asset('registration')}}/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="{{asset('registration')}}/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->