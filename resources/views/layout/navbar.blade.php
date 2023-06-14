<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                People
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="nav-link" href="{{url("/people/create")}}">Create new person <span class="visually-hidden"></span></a>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Health
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="nav-link" href="{{url("/healths/create")}}">Create health information <span class="visually-hidden"></span></a>
                                <a class="nav-link" href="{{url("/healths")}}">Health list<span class="visually-hidden"></span></a>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Doctor
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="nav-link" href="{{url("/doctors/create")}}">Create new doctor <span class="visually-hidden"></span></a>
                                <a class="nav-link" href="{{url("/doctors")}}">Doctor list<span class="visually-hidden"></span></a>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Prescription
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="nav-link" href="{{url("/prescriptions/create")}}">Create new person <span class="visually-hidden"></span></a>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                MedicalCheck
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="nav-link" href="{{url("/checks/create")}}">Create MedicalCheck <span class="visually-hidden"></span></a>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            Category
        </button>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <div>
            <ul class="navbar-nav ml-auto">
                @if (Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ Auth::user()->name }} <span class="visually-hidden"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Logout <span class="visually-hidden"></span></a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login<span class="visually-hidden"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Register<span class="visually-hidden"></span></a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
