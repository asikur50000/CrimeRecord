 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="http://localhost/CrimeRecord/public/home">
   
    <div class="sidebar-brand-text mx-3" >Crime Record</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<!--<li class="nav-item active">
    <a class="nav-link" href="http://localhost/Crime Record/public/Crime Recorddashboard">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>
-->

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    
</div>

<!-- Nav Item - Pages Collapse Menu (Police Station) -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Police Station</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Components:</h6>
            <a class="collapse-item" href="{{route('station.form')}}">Add Police Station</a>
            <a class="collapse-item" href="{{route('station.list')}}">Manage Police Station</a>
        </div>
    </div>
</li>

<!-- Nav Item - Pages Collapse Menu (Police) -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwin"
        aria-expanded="true" aria-controls="collapseTwin">
        <i class="fas fa-fw fa-cog"></i>
        <span>Police</span>
    </a>
    <div id="collapseTwin" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Components:</h6>
            <a class="collapse-item" href="{{route('police.form')}}">Add Police</a>
            <a class="collapse-item" href="{{route('police.list')}}">Manage Police</a>
        </div>
    </div>
</li>

<!-- Crime Record Crime Category collapse menu-->

 
    <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsethree"
        aria-expanded="true" aria-controls="collapsethree">
        <i class="fas fa-fw fa-cog"></i>
        <span>Crime Category</span>
    </a>
    <div id="collapsethree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Components:</h6>
            <a class="collapse-item" href="{{route('category.form')}}">Add Category</a>
            <a class="collapse-item" href="{{route('category.list')}}">Manage Category</a>
            
           
        </div>
    </div>
</li>



<!-- Crime Record Criminal collapse menu-->

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefour"
        aria-expanded="true" aria-controls="collapsefour">
        <i class="fas fa-fw fa-cog"></i>
        <span>Criminal</span>
    </a>
    <div id="collapsefour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Components:</h6>
            <a class="collapse-item" href="{{route('criminal.form')}}">Add Criminal</a>
            <a class="collapse-item" href="{{route('criminal.list')}}">Manage Criminals</a>
        </div>
    </div>
</li>



<!-- Nav Item - Pages Collapse Menu (FIR) -->

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwice"
        aria-expanded="true" aria-controls="collapseTwice">
        <i class="fas fa-fw fa-cog"></i>
        <span>FIR</span>
    </a>
    <div id="collapseTwice" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Components:</h6>
                        
            <a class="collapse-item" href="{{route('fir.form')}}">FIR Form</a>
            <a class="collapse-item" href="{{route('fir.list')}}">FIR History</a>
            <a class="collapse-item" href="{{route('fir.details')}}">FIR Details</a>
           
        </div>
    </div>
</li>

<!-- Nav Item - Pages Collapse Menu (Charge Sheet) -->

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefifth"
        aria-expanded="true" aria-controls="collapsefifth">
        <i class="fas fa-fw fa-cog"></i>
        <span>Charge Sheet</span>
    </a>
    <div id="collapsefifth" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Components:</h6>
            <a class="collapse-item" href="{{route('chargesheet.list')}}">New Charge Sheet</a>
            <a class="collapse-item" href="{{route('chargesheet.complete')}}">Completed Chargesheet</a>
        </div>
    </div>
</li>



<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<!--
    <div class="sidebar-heading">
    Addons
</div>
-->



<!-- Nav Item - Tables -->
<!--li class="nav-item">
    <a class="nav-link" href="">
        <i class="fas fa-fw fa-table"></i>
        <span>Tables</span></a>
</li-->

<!-- Divider -->
<!--
    <hr class="sidebar-divider d-none d-md-block">
    -->

<!-- Sidebar Toggler (Sidebar) -->
<!--
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
-->

<!-- Sidebar Message -->
<!--
<div class="sidebar-card">
    <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="">
    <p class="text-center mb-2"><strong>Crime Record</strong></p>
    <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro"></a>
</div>
-->

</ul>
<!-- End of Sidebar -->