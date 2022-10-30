@extends('headerfooter')
@section('content')

<div>
    <div style="padding-top:200px;" >
        <!-- image -->
        <div>
            <img src="/img/banner-4.jpg">
        </div>
    </div>
    <div class="container">
        <!-- title -->
        <div class="row container text-center text-white justify-content-center justify-items-center bg-dark" style="transform:translate(0,-10px);">
            SERVICES
        </div>
    <!-- path -->
        <div class="row text-inline mt-5 mb-5">
            <ul class="list-inline list-unstyled list" style="font-size:14px;">
                    <li class="list-inline-item list-unstyled"><a href="/" class="text-dark text-decoration-none"><h5>Home</h5></a></li>
                    >
                    <li class="list-inline-item list-unstyled text"><h5 class="font-weight-normal text-secondary">Services</h5></li>
            </ul>
        </div>
        <div class="row h5 text-center justify-content-center text-dark">
            <strong>Services</strong>
        </div>
    <!-- services description in paragraph -->
        <div class="row container text-left justify-content-center justify-items-center">
            <p class="lead mb-5">
            You can order our products online Now, and simply Place orders & pay on our website. 
            Our team will provide professional services to guide. Customers can also contact us at anytime.
            </p>
        </div>
    <!-- left services section -->
        <div class="row">
            <div class="col-md-4">
                <ul class="list-group list-unstyled ">
                    <li class="list-group-items bg-secondary p-3"><a href="/deliveryinfo" class="text-white font-weight-bold-bold text-decoration-none">DELIVERY INFO</a></li>
                    <li class="list-group-items bg-light p-3"><a href="/warrenty" class="text-decoration-none text-dark">WARRENTY</a></li>
                    <li class="list-group-items bg-light p-3"><a href="/quality" class="text-decoration-none text-dark">QUALITY</a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <h3>QUALITY</h3>
                <hr class="w-25 color-dark">
                <p class="lead">We provide outstanding quality of products with warranty and delivery.
                    We have experince team for the production of the products.</p>
            </div>
        </div>
    </div>
</div>
@yield('content')
@endsection
