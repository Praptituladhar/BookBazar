@extends('headerfooter')
@section('content')
<div style="padding-top:165px;"></div>
<div class=" container justify-content-center justify-items-center">
    <!-- title -->
        <div class="row container text-center text-white justify-content-center justify-items-center bg-dark" style="transform:translate(0,-10px);">
            CHECKOUT
        </div>
    <!-- path -->
        <div class="row text-inline mt-5 mb-5">
            <ul class="list-inline list-unstyled list" style="font-size:14px;">
                    <li class="list-inline-item list-unstyled"><a href="/" class="text-dark text-decoration-none"><h5>Home</h5></a></li>
                    >
                    <li class="list-inline-item list-unstyled text"><h5 class="font-weight-normal text-secondary">Checkout</h5></li>
            </ul>
        </div>
    <!-- row and column for checkout and cart -->
    <!-- <form action="/postcheckout" method="POST" enctype="multipart/form-data" class="form-inline"> -->
    <!-- @csrf -->
        <div class="row">
            <div class="col-md-8">
                <div class="bg-dark text-white p-2"><h5>CHECKOUT METHOD</h5></div>
                <!-- checkout details -->
                <div class="form-group-row row form-inline mb-4 mt-4">
                    <!-- name -->
                    <div class="col-md-6  form-group">
                        <input type="text" name="name" class="text-secondary border border-secondary form-control p-3" placeholder="Your Name*">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>  
                    <!-- email -->
                    <div class="col-sm-6 form-group">
                        <input type="email" name="email" class="text-secondary border border-secondary form-control p-3" id="inputEmail" placeholder="Your Email*">
                        @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div> 
                </div>
                <div class="form-group-row row form-inline mb-4 mt-4">
                    <!-- mobile -->
                    <div class="col-md-6  form-group">
                        <input type="text" name="mobile" class="text-secondary border border-secondary form-control p-3" placeholder="Your Mobile*">
                        @if ($errors->has('mobile'))
                            <span class="text-danger">{{ $errors->first('mobile') }}</span>
                        @endif
                    </div>  
                    <!-- address -->
                    <div class="col-sm-6 form-group">
                        <input type="email" name="address" class="text-secondary border border-secondary form-control p-3" id="inputEmail" placeholder="Your Address*">
                        @if ($errors->has('address'))
                        <span class="text-danger">{{ $errors->first('address') }}</span>
                        @endif
                    </div> 
                </div>
                <div class="form-group-row row form-inline mb-4 mt-4">
                    <!-- city -->
                    <div class="col-md-6  form-group">
                        <input type="text" name="city" class="text-secondary border border-secondary form-control p-3" placeholder="Your City*">
                        @if ($errors->has('city'))
                            <span class="text-danger">{{ $errors->first('city') }}</span>
                        @endif
                    </div>  
                </div>
            </div> 
        <!-- </form> -->
            <div class="col-md-4 bg-light p-2">
                <h6 class="text-center">YOUR ORDER</h6>
                <hr>
                @foreach($productentry as $item)
                <div class="row">
                    <div class="col-md-3">
                        <img src="/images/{{$item->photo1}}" width="100" height="100">
                    </div>
                    <div class="col-md-6 ml-4">
                        <h6 class="text-secondary">{{$item->pname}}</h6>
                        <strong>Rs. {{$item->current_price}}</strong>
                    </div>
                    <div class="col-md-3 text-center">
                        <a href="/remove/{{ $item->cart_id }}" type="submit" class="btn btn-secondary bg-danger text-center p-0" width="10" id="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                        </svg>
                        </a>
                    </div>
                </div>
                @endforeach
                <hr>
                <div class="row">
                    <div class="col-md-3 text-center">
                        <strong>ORDER TOTAL</strong>
                    </div>
                   
                    <div class="col-md-4 ml-4">
                        <strong>{{ $total }}</strong>
                    </div>
                    <div class="col-md-4 ml-4">
                        <div>
                            <form action="https://uat.esewa.com.np/epay/main" method="POST">
                                <input value="{{ $total+200}}" name="tAmt" type="hidden">
                                <input value="{{ $total }}" name="amt" type="hidden">
                                <input value="50" name="txAmt" type="hidden">
                                <input value="50" name="psc" type="hidden">
                                <input value="100" name="pdc" type="hidden">
                                <input value="EPAYTEST" name="scd" type="hidden">
                                <input value="890y-0984-dujs6700" name="pid" type="hidden">
                                <input value="http://localhost:8000/payment-verify?q=su" type="hidden" name="su">
                                <input value="http://localhost:8000/payment-verify?q=fu" type="hidden" name="fu">
                                <a href="/remove/{{ $item->cart_id }}"><input value="Proceed" type="submit" class="btn btn-success"></a>
                            </form>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
</div>
@endsection