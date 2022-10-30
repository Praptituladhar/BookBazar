@extends('headerfooter')
@section('content')
<div>
    <div style="padding-top:165px;">
    </div>
    <div class=" container justify-content-center justify-items-center">
    <!-- title -->
        <div class="row container text-center text-white justify-content-center justify-items-center bg-dark" style="transform:translate(0,-10px);">
            ABOUT US
        </div>
    <!-- path -->
        <div class="row text-inline mt-5 mb-5">
            <ul class="list-inline list-unstyled list" style="font-size:14px;">
                    <li class="list-inline-item list-unstyled"><a href="/" class="text-dark text-decoration-none"><h5>Home</h5></a></li>
                    >
                    <li class="list-inline-item list-unstyled text"><h5 class="font-weight-normal text-secondary">About Us</h5></li>
            </ul>
        </div>
    <!-- about us description in paragraph -->
        <div class="row container text-left justify-content-center justify-items-center">
            <p class="lead mb-5">
                We are the second hand books supplier. Through web browser, customer can search for the book, later add to the cart and finally purchase it. 
                Books can just be simply be uploaded to the website and another student or person can have access to buy the book by just visiting the website.
            </p>
            <p class="lead mb-5">
                We believe in high customer service. Thus, we offer our customer with the needed books 
                in affordable budget.
            </p>
            <p class="lead mb-5">
            Those who enjoy reading a lot can purchase books from this site for a reasonable price. By just providing the book's details, a seller who wants to sell 
            their book can do so. Therefore, any viable source of money is always appreciated. All of these goals will be met by developing a user-friendly, all-inclusive 
            online marketplace for buying and selling used books.
            </p>
        </div>
        
   
    </div>
</div>
@yield('content')
@endsection