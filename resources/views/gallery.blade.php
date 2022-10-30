@extends('headerfooter')
@section('content')

<div style="padding-top:200px;">
    <div class=" container justify-content-center justify-items-center">
    <!-- title -->
        <div class="row container text-center text-white justify-content-center justify-items-center bg-dark" style="transform:translate(0,-10px);">
            GALLERY
        </div>
    <!-- path -->
        <div class="row text-inline mt-5 mb-5">
            <ul class="list-inline list-unstyled list" style="font-size:14px;">
                    <li class="list-inline-item list-unstyled"><a href="/" class="text-dark text-decoration-none"><h5>Home</h5></a></li>
                    >
                    <li class="list-inline-item list-unstyled text"><h5 class="font-weight-normal text-secondary">Gallery</h5></li>
            </ul>
        </div>
    <!-- gallery -->
        <div class="container-fluid">
            <div class="d-flex flex-row flex-wrap justify-content-center justify-items-center">
                <div class="d-flex flex-column text-center text-secondary align-items-center m-2">
                    <img src="/images/1459895855.jpg" width="200" height="300"></a>
                </div>
                <div class="d-flex flex-column text-center text-secondary align-items-center m-2">
                    <img src="/images/2028527286.jpg" width="200" height="300">                
                </div>
                <div class="d-flex flex-column text-center text-secondary align-items-center m-2">
                    <img src="/images/386081721.jpg" width="200" height="300">
                </div>
                <div class="d-flex flex-column text-center text-secondary align-items-center m-2">
                    <img src="/images/812997284.jpg" width="200" height="300">                
                </div>
                <div class="d-flex flex-column text-center text-secondary align-items-center m-2">
                    <img src="/images/872350811.jpg" width="200" height="300">                
                </div>
                <div class="d-flex flex-column text-center text-secondary align-items-center m-2">
                    <img src="/images/26863350.jpg" width="300" height="300">                
                </div>
                
        </div>
    </div>
</div>

@yield('content')
@endsection