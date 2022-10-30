@extends('headerfooter')
@section('content')
<!-- Carousel -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="padding-top:165px;">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/img/banner-3.jpg" alt="First slide">
    </div>
  </div>
</div>

<!-- featured categories -->
<section style="padding-top:20px;">
<div class="d-flex align-items-center justify-content-center">
  <div class="row  container">
    <div class="col-12 text-center  section__title--2">
      <hr style="position: relative;top: 35px;z-index: -1;">
      <h2 class="title__line">FEATURED CATEGORIES</h2>
    </div>
  </div>
</div>
<!-- image and price of featured categories -->
<div class="container-fluid">
  <div class="row justify-content-center justify-items-center">
    <div class="col-md-2 text-center">
        <a href="/products"><img src="/images/386081721.jpg" width="200" height="300"></a><br>
        <a href="/products" class="productname text-secondary text-decoration-none"><strong>Fiction & Literature</strong></a>
    
    </div>
    <div class="col-md-2 text-center">
        <a href="/products"><img src="/images/1459895855.jpg" width="200" height="300"></a><br>
        <a href="/products" class="productname text-secondary text-decoration-none"><strong>LifeStyle & Wellness</strong></a>
    
    </div>
    <div class="col-md-2 text-center">
        <a href="/products"><img src="/images/26863350.jpg" width="300" height="300"></a><br>
        <a href="/products" class="productname text-secondary text-decoration-none"><strong>+2 Books</strong></a>
    
    </div>
    <div class="col-md-2 text-center">
        <a href="/products"><img src="/images/872350811.jpg" width="200" height="300"></a><br>
        <a href="/products" class="productname text-secondary text-decoration-none"><strong>Bachelor's Books</strong></a>
    
    </div>
    <div class="col-md-2 text-center">
        <a href="/products"><img src="/images/2028527286.jpg" width="200" height="300"></a><br>
        <a href="/products" class="productname text-secondary text-decoration-none"><strong>Graphic Novels</strong></a>
    
    </div>
    <div class="col-md-2 text-center">
        <a href="/products"><img src="/images/812997284.jpg" width="200" height="300"></a><br>
        <a href="/products" class="productname text-secondary text-decoration-none"><strong>Academic & Reference</strong></a>
    
    </div>
</div>
</section>

<!-- Best Seller -->
<section style="padding-top:20px;">
<div class="d-flex align-items-center justify-content-center">
  <div class="row  container">
    <div class="col-12 text-center section__title--2">
      <hr style="position: relative;top: 35px;z-index: -1;">
      <h2 class="title__line">BEST SELLER</h2>
    </div>
  </div>
</div>
<!-- image and price of best seller -->
<div class="container-fluid">
  <div class="row justify-content-center justify-items-center">
  
  @foreach($productentry as $product)
  
    <div class="col-md-3 text-center cart">
    <a href="/description/{{$product->id}}" class="text-center cart">
        <a href="/description/{{$product->id}}"><img src="/images/{{$product->photo1}}" width="300" height="400"></a><br>
        <a href="/description/{{$product->id}}" class="productname text-secondary text-decoration-none"><strong>{{ $product->pname }}</strong></a>
        <div class="text-inline text-secondary font-weight-bold"> Rs. {{ $product->current_price }}</div>
        <form action="/add_to_cart" method="POST">
          @csrf
          <input type="hidden" name="product_id" value="{{$product->id}}"></input>

            <button class="btn btn-group-toggle righticon right" data-toggle="buttons" onclick="ClickCounter()">
                <label class="btn text-dark text-decoration-none active">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                    width="1em" 
                    height="1em" color="black"
                    viewBox="0 0 24 24"><g fill="none"><path d="M3.977 9.84A2 2 0 0 1 5.971 8h12.058a2 2 0 0 1 1.994 1.84l.803 10A2 2 0 0 1 18.833 22H5.167a2 2 0 0 1-1.993-2.16l.803-10z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 11V6a4 4 0 0 0-4-4v0a4 4 0 0 0-4 4v5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g></svg>
                </label>
            </button>
        </form>   
      </a> 
    </div>
    @endforeach
  </div>
</div>
</section>
@yield('content')
@endsection