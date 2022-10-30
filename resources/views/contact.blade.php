@extends('headerfooter')
@section('content')

<div style="padding-top:200px;">
    </div>
    <div class=" container justify-content-center justify-items-center">
    <!-- title -->
        <div class="row container text-center text-white justify-content-center justify-items-center bg-dark" style="transform:translate(0,-10px);">
            CONTACT
        </div>
    <!-- path -->
        <div class="row text-inline mt-5 mb-5">
            <ul class="list-inline list-unstyled list" style="font-size:14px;">
                    <li class="list-inline-item list-unstyled"><a href="/" class="text-dark text-decoration-none"><h5>Home</h5></a></li>
                    >
                    <li class="list-inline-item list-unstyled text"><h5 class="font-weight-normal text-secondary">Contact Us</h5></li>
            </ul>
        </div>
    <!-- left navbar -->
        <div class="row">
            
             <!-- right-side forms for contact us -->
            <div class="col-md-8">
            <div class="row"><h3>SEND A MAIL</h3></div>
                <form action="/postcontact" method="POST" enctype="multipart/form-data" class="form-inline">
                @csrf
                        <div class="form-group-row row form-inline mb-4">
                            <!-- name -->
                            <div class="col-md-4  form-group">
                                <input type="text" name="name" class="text-secondary bg-light form-control border-0 p-3" placeholder="Your Name*">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>  
                            <!-- email -->
                            <div class="col-sm-4 form-group">
                                <input type="email" name="email" class="text-secondary bg-light form-control border-0 p-3" id="inputEmail" placeholder="Email*">
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <!-- mobile -->
                            <div class="col-sm-4 form-group">
                                <input type="number" name="phone_number" pattern="[0-9]{10}" class="text-secondary bg-light form-control border-0 p-3" placeholder="Number*">
                                @if ($errors->has('phone_number'))
                                    <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                                @endif 
                            </div>
                            <div class="form-group-row row">
                                <div class="col-md-12">
                                    <textarea name="message" rows="2" cols="95" placeholder="Your Message" class="text-secondary bg-light border-0 p-3 mt-4 mb-4"></textarea><br>
                                        @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-primary bg-dark text-white w-25 align-left text-left border-0 sendmsg"><strong>SEND MESSAGE</strong></butto>
                                </div>
                            </div>
                    </div>
                </form>
            </div>
        </div>
   
    </div>
</div>

@yield('content')
@endsection