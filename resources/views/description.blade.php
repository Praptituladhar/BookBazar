@extends('headerfooter')
@section('content')
<div style="padding-top:165px;">
    
</div>
<div class=" container justify-content-center justify-items-center">
    <!-- title -->
        <div class="row container text-center text-white justify-content-center justify-items-center bg-dark" >
            BOOK DETAILS
        </div>
    <!-- path -->
        <div class="row text-inline mt-5 mb-5">
            <ul class="list-inline list-unstyled list" style="font-size:14px;">
                    <li class="list-inline-item list-unstyled"><a href="/" class="text-dark text-decoration-none"><h5>Home</h5></a></li>
                    >
                    <li class="list-inline-item list-unstyled text"><h5 class="font-weight-normal text-secondary">Description</h5></li>
            </ul>
        </div>
    <!-- left side picture display -->
    <div class="row">
    <!-- <i class="fa fa-scissors" aria-hidden="true"></i> -->
        <div class="col-md-4">
            <div class="row">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="/images/{{$product->photo1}}" alt="First slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark" style="border-radius:25px;" aria-hidden="true"></span>  
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon bg-dark" style="border-radius:30px;" aria-hidden="true"></span>
                    </a>
                    </div>
                </div>
            </div>
            <div class="col-md-7 border border-gray ml-2">
                <!-- title -->
                <div class="lead fw-bold">DESCRIPTION</div>
                <div class="text-secondary lead"><?php echo "$product->description" ?>{{$product->description}}</div>
            </div>
</div>
    <hr class="w-100">
    <div class="row lead">
        <div class="col-md-4 p-0 m-0"><h6 class="back p-3 mb-2">Product Name</h6></div>
        <div class="col-md-8 my-auto leftspace"><h5>{{$product->pname}}</h5></div>
    
        <div class="col-md-4 p-0 m-0"><h6 class="back p-3 mb-2">Price</h6></div>
        <div class="col-md-8 my-auto leftspace"><div class="text-inline text-secondary text-dark">Rs. {{$product->current_price}}</div></div>
    
        <div class="col-md-4 p-0 m-0"><h6 class="back p-3 mb-2">Categories</h6></div>
        <div class="col-md-8 my-auto leftspace">{{$product->category_name}}</div>
    
        <div class="col-md-4 back p-2 mb-2"><h6>Author</h6></div>
        <div class="col-md-8 my-auto leftspace">{{$product->author}}</div>

        <div class="col-md-4 back p-2 mb-2"><h6>ISBN</h6></div>
        <div class="col-md-8 my-auto leftspace">{{$product->isbn}}</div>
        
        <div class="col-md-4 back p-2 mb-2"><h6>Format</h6></div>
        <div class="col-md-8 my-auto leftspace">{{$product->format}}</div>

        <div class="col-md-4 back p-2 mb-2"><h6>Language</h6></div>
        <div class="col-md-8 my-auto leftspace">{{$product->language}}</div>

        <div class="col-md-4 back p-2 mb-2"><h6>Release Date</h6></div>
        <div class="col-md-8 my-auto leftspace">{{$product->release_date}}</div>
        
        <div class="col-md-4 back p-2 mb-2"><h6>Publisher</h6></div>
        <div class="col-md-8 my-auto leftspace">{{$product->publisher}}</div>

        <div class="col-md-4 back p-2 mb-2"><h6>Pages</h6></div>
        <div class="col-md-8 my-auto leftspace">{{$product->pages}}</div>

        <div class="col-md-4 back p-2 mb-2"><h6>Condition</h6></div>
        <div class="col-md-8 my-auto leftspace">{{$product->condition}}</div>

        <div class="col-md-12 col-xs-12 text-center pt-5">
            <a class="btn bg-dark text-white" data-toggle="buttons" onclick="ClickCounter()">Add to cart</a>
            <a class="btn bg-dark text-white" href="/checkout">Buy Now</a>
        </div>
    </div>
    </div>
 </div>
 
 
@endsection