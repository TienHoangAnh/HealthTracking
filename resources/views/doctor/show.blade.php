@extends('layout.layout')
@section('title', 'Doctor Details')
@section('content')
<section class="u-clearfix u-container-align-center u-palette-5-base u-section-1" id="sec-44e8">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div  class="u-container-align-center u-container-style u-image u-layout-cell u-size-25 u-image-1" data-image-width="826" data-image-height="551" >
                <img  style="  width: 200px; height: 200px; object-fit: cover;" src="{{url("/upload/".$doctor->photo)}}" class="img-fluid rounded-top" alt="">
                <div class="u-container-layout u-container-layout-1"></div>
            </div>
            <div class="u-container-align-left u-container-style u-layout-cell u-size-35 u-white u-layout-cell-2">
              <div class="u-container-layout u-valign-middle u-container-layout-2">
                <h2 style="color:black" class="u-align-left u-text u-text-default u-text-1"> Doctor {{$doctor->name}}</h2>
                <p style="color:black" class="u-align-left u-text u-text-default u-text-2"> Department: {{$doctor->department}}</p>
                <p style="color:black" class="u-align-left u-text u-text-default u-text-3">Description: {{$doctor->description}}</a>
                </p>
                <a href="https://nicepage.com/wordpress-themes" class="u-active-none u-align-left u-btn u-button-style u-hover-none u-none u-text-active-palette-5-base u-text-hover-palette-5-base u-btn-2"><span class="u-icon u-text-palette-5-base"><svg class="u-svg-content" viewBox="0 0 405.333 405.333" x="0px" y="0px" style="width: 1em; height: 1em;"><path d="M373.333,266.88c-25.003,0-49.493-3.904-72.704-11.563c-11.328-3.904-24.192-0.896-31.637,6.699l-46.016,34.752    c-52.8-28.181-86.592-61.952-114.389-114.368l33.813-44.928c8.512-8.512,11.563-20.971,7.915-32.64    C142.592,81.472,138.667,56.96,138.667,32c0-17.643-14.357-32-32-32H32C14.357,0,0,14.357,0,32    c0,205.845,167.488,373.333,373.333,373.333c17.643,0,32-14.357,32-32V298.88C405.333,281.237,390.976,266.88,373.333,266.88z"></path></svg></span>&nbsp;{{$doctor->phone}}
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection


{{-- <div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Photo</th>
                <th scope="col">Department</th>
                <th scope="col">Phone</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row">{{$doctor->name}}</td>
                <td>
                    <img  style="  width: 200px; height: 200px; object-fit: cover;" src="{{url("/upload/".$doctor->photo)}}" class="img-fluid rounded-top" alt="">
                </td>
                <td>{{$doctor->department}}</td>
                <td>{{$doctor->phone}}</td>
                <td>{{$doctor->description}}</td>
            </tr>
        </tbody>
    </table>
   </div> --}}