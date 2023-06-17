
 <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
 <nav style="background-color:black;" class="navbar navbar-expand-lg navbar-dark bg-dark">
   <div class="container-fluid">
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent"
       aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div>
         <img style="height: 50px; width:110px; border-radius:50px" src="/upload/ctd.png" alt="ctd">
     </div>
     <div style="margin-left: 100px; font-size:20px" class="collapse navbar-collapse" id="navbarToggleExternalContent">
       <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
             aria-expanded="false">
             People
           </a>
           <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
             <li><a class="dropdown-item" href="{{url("/people/create")}}">Create new person</a></li>
             <li><a class="dropdown-item" href="{{url("/people")}}">People list</a></li>
           </ul>
         </li>
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
             aria-expanded="false">
             Health
           </a>
           <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
             <li><a class="dropdown-item" href="{{url("/healths/create")}}">Create health information</a></li>
             <li><a class="dropdown-item" href="{{url("/healths")}}">Health list</a></li>
           </ul>
         </li>
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
             aria-expanded="false">
             Doctor
           </a>
           <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
             <li><a class="dropdown-item" href="{{url("/doctors/create")}}">Create new doctor</a></li>
             <li><a class="dropdown-item" href="{{url("/doctors")}}">Doctor list</a></li>
           </ul>
         </li>
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
             aria-expanded="false">
             Prescription
           </a>
           <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
             <li><a class="dropdown-item" href="{{url("/prescriptions/create")}}">Create new prescription</a></li>
             <li><a class="dropdown-item" href="{{url("/prescriptions")}}">Prescription list</a></li>
           </ul>
         </li>
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
             aria-expanded="false">
             MedicalCheck
           </a>
           <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
             <li><a class="dropdown-item" href="{{url("/checks/create")}}">Create MedicalCheck</a></li>
             <li><a class="dropdown-item" href="{{url("/checks")}}">MedicalCheck list</a></li>
           </ul>
         </li>
       </ul>
     </div>
     <div>
       <ul class="navbar-nav ml-auto" style="font-size:15px">
         @if (Auth::check())
         <li class="nav-item">
           <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="/logout">Logout</a>
         </li>
         @else
         <li class="nav-item">
           <a class="nav-link" href="/login">Login</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="/register">Register</a>
         </li>
         @endif
       </ul>
     </div>
   </div>
 </nav>
 