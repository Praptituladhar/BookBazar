@extends('headerfooter')
@section('content')
<main class="cart">
    <div>
        <div style="padding-top:165px;"></div>
    </div>
    <div class=" container justify-content-center justify-items-center">
    <!-- title -->
        <div class="row container text-center text-white justify-content-center justify-items-center bg-dark" style="transform:translate(0,-10px);">
            SHOPPING CART
        </div>
    <!-- path -->
        <div class="row text-inline mt-5 mb-5">
            <ul class="list-inline list-unstyled list" style="font-size:14px;">
                    <li class="list-inline-item list-unstyled"><a href="/" class="text-dark text-decoration-none"><h5>Home</h5></a></li>
                    >
                    <li class="list-inline-item list-unstyled text"><h5 class="font-weight-normal text-secondary">Shopping Cart</h5></li>
            </ul>
        </div>
    <!-- details of product in row -->
    <hr>
    <div>
        
        <table class="table-content w-100 ">
            <tr class="text-center">
                <th>PRODUCT</th>
                <th>PRODUCT NAME</th>
                <th>PRICE</th>
                <!-- <th>QUANTITY</th> -->
                <!-- <th>TOTAL</th> -->
                <th>REMOVE</th>
            </tr>
            @foreach($productentry as $item)
            <tr class="text-center">
                <td><a href="#" class="productimg"><img src="/images/{{$item->photo1}}" width="150" height="150"></a></td>
                <td>
                    <a href="/description" class="productname text-secondary text-decoration-none"><strong>{{ $item->pname }}</strong></a>
                    <div class="text-inline">Rs. {{$item->current_price}}</div>
                </td>
                <td><strong>Rs. {{$item->current_price}}</strong></td>
                <!-- <td> -->
                    <!-- <form class="text-center">
                        <div class="col-sm-4 bg-light text-secondary" style="margin:0 auto">
                        <input type="number" name="current_price" class="form-control mb-2 mr-sm-2" style="text-align:center" value="1">update
                        @if ($errors->has('current_price'))
                            <span class="text-danger">{{ $errors->first('current_price') }}</span>
                        @endif                
                        </div>
                    </form> -->
                <!-- </td> -->
                <!-- <td><strong>Rs. {{$item->current_price}}</strong></td> -->
                <td class="text-center">
                    <a href="/removecart/{{ $item->cart_id }}" class="btn">
                <svg xmlns="http://www.w3.org/2000/svg" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                    <path d="M17 6h5v2h-2v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8H2V6h5V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3zm1 2H6v12h12V8zM9 4v2h6V4H9z" fill="currentColor"/>
                </svg></a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <hr>
    <div class="d-flex text-center justify-content-between ">
        <a href="/" class="btn btn-dark btn-block text-white p-3">Continue shopping</a>
        <a href="/checkout" class="btn btn-dark btn-block text-white p-3">Checkout</a>
    </div>
</div>
</main>
@endsection