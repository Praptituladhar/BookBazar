@extends('headerfooter')
@section('content')
<div style="padding-top:200px;">
    
    </div>
    <div class=" container justify-content-center justify-items-center">
    <!-- title -->
        <div class="row container text-center text-white justify-content-center justify-items-center bg-dark" style="transform:translate(0,-10px);">
            Search
        </div>
        <br>
    <!-- search -->
    <div class="row justify-content-center justify-items-center">
        @foreach($productentry as $product)
            <div class="col-md-3 text-center cart">
                <a href="/description"><img src="/images/{{$product->photo1}}" width="200" height="300"></a><br>
                <a href="/description" class="productname text-secondary text-decoration-none"><strong>{{ $product->pname }}</strong></a>
                <div class="text-inline text-secondary font-weight-bold">Rs. {{ $product->current_price }}</div>
                <div class="btn-group-toggle righticon right" data-toggle="buttons" onclick="ClickCounter()">
                    <label class="btn text-dark text-decoration-none active">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                        width="1em" 
                        height="1em" color="black"
                        viewBox="0 0 24 24"><g fill="none"><path d="M3.977 9.84A2 2 0 0 1 5.971 8h12.058a2 2 0 0 1 1.994 1.84l.803 10A2 2 0 0 1 18.833 22H5.167a2 2 0 0 1-1.993-2.16l.803-10z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 11V6a4 4 0 0 0-4-4v0a4 4 0 0 0-4 4v5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g></svg>
                    </label>
                </div>    
            </div>
        @endforeach
    </div>  
</div>
@endsection