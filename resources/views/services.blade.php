@extends('headerfooter')
@section('content')

<div>
    <div style="padding-top:200px;" >
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
            <br>
            We offer quality used and new books, accurately graded, at everyday low prices, delivered directly to our cherished customers.
            If, for any reason you are not satisfied with your purchase, please contact us and we will do our best to ensure your satisfaction.
            </p>
        </div>
    
    </div>
</div>
@yield('content')
@endsection