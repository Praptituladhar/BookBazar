@extends('headerfooter')
@section('content')
<style>
    .vertical {
        height: 650px;
        border-right: 1px solid gray;
    }
</style>
<div>
    <div style="padding-top:200px;" >
        
    </div>
    <div class="container border-right-dark">
        <!-- title -->
        <div class="row container text-center text-white justify-content-center justify-items-center bg-dark" style="transform:translate(0,-10px);">
            PRODUCTS
        </div>
    <!-- path -->
        <div class="row text-inline mt-5 mb-5">
            <ul class="list-inline list-unstyled list" style="font-size:14px;">
                    <li class="list-inline-item list-unstyled"><a href="/" class="text-dark text-decoration-none"><h5>Home</h5></a></li>
                    >
                    <li class="list-inline-item list-unstyled text"><h5 class="font-weight-normal text-secondary">Products</h5></li>
            </ul>
        </div>
    <!-- left side best seller -->
        <div class="row">
            <div class="col-md-3 vertical">
                <h6>BEST SELLER</h6>
                <hr class="w-75">
                <!-- for the images of products -->
                <div>
                    <ul class="justify-content-between justify-items-center p-0">
                        <li class="list-unstyled text-center">
                            <a href="#" class="text-center text-secondary text-decoration-none text-center">
                            <img src="/img/PFDB.jpg" width="200" height="20" class="float-left"><br>
                            <strong class="text-dark">Premium Fancy Dark Brown</strong> 
                            <div class="text-inline"><del>$ 680</del><span class="text-dark ">  $ 339</span></div>
                            </a>
                        </li>
                        <li class="list-unstyled text-center">
                            <a href="#" class="text-center text-secondary text-decoration-none text-center">
                                <img src="/img/CRBA2.png" width="200" height="200"><br>
                                <strong class="text-dark">Classic Rattan Big Adult</strong>
                                <div class="text-inline"><del>$ 500</del><span class="text-dark "> $ 279</span></div>
                            </a>
                        </li>
                        <li class="list-unstyled text-center">
                            <a href="#" class="text-center text-secondary text-decoration-none text-center">
                            <img src="/img/CRBA3.png" width="200" height="200"><br>
                            <strong class="text-dark">Classic Rattan Big Adult- White</strong>
                            <div class="text-inline"><del>$ 500</del><span class="text-dark "> $ 279</span></div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        <!-- dropdownlist of sorting -->
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12 dropdown">
                    
                    <select class="dropdown-toggler bg-light border-0 text-secondary" name="category_name">
                        <option value="option1">Default softing</option>
                        <option value="option1">Sort by price low to high</option>
                        <option value="option1">Sort by price high to low</option>
                        <option value="option1">Sort by new first</option>
                        <option value="option1">Sort by old first</option>
                    </select>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item text-secondary" href="#">Action</a>
                        <a class="dropdown-item text-secondary" href="#">Another action</a>
                        <a class="dropdown-item text-secondary" href="#">Something else here</a>
                    </div>
                </div>
            </div>
        <!-- the list of items -->
            <div class="row justify-content-center justify-items-center">
                @foreach($productentry as $product)
                <a href="description/{{$product->id}}">
                    <div class="col-md-4 text-center cart">
                        <a href="/description"><img src="/images/{{$product->photo1}}" width="200" height="200"></a>
                        <a href="/description" class="productname text-secondary text-decoration-none"><strong>{{ $product->pname }}</strong></a>
                        <div class="text-inline text-secondary font-weight-bold"><del>$ {{ $product->previous_price }}</del>  $ {{ $product->current_price }}</div>
                        <div class="btn-group-toggle righticon right" data-toggle="buttons" onclick="ClickCounter()">
                            <label class="btn text-dark text-decoration-none active">
                                <svg xmlns="http://www.w3.org/2000/svg" 
                                width="1em" 
                                height="1em" color="black"
                                viewBox="0 0 24 24"><g fill="none"><path d="M3.977 9.84A2 2 0 0 1 5.971 8h12.058a2 2 0 0 1 1.994 1.84l.803 10A2 2 0 0 1 18.833 22H5.167a2 2 0 0 1-1.993-2.16l.803-10z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 11V6a4 4 0 0 0-4-4v0a4 4 0 0 0-4 4v5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g></svg>
                            </label>
                        </div>    
                    </div></a>
                @endforeach
            </div>   
    </div>
</div>
@yield('content')
@endsection