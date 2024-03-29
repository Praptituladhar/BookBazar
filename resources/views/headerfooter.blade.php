<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BookBazaar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="/js/jscript.js" type="text/javascript"></script>
    </head>
    <body>
    <?php
    use App\Http\Controllers\CartController;
    $total =  CartController::cartitem();
    ?>

<!-- Navigation bar starts -->
<nav class="navbar navbar-fixed-top fixed-top bg-white justify-content-between" style="padding-left:20px;padding-right:20px;">
            <a href="/" class="navbar-brand " style="text">
             <img src="/img/logo.jpg" width="275">
            </a>
            
            <!--Navbar items-->
            <ul class="list-inline list-unstyled list" style="font-size:14px;">
                <li class="list-inline-item list-unstyled"><a href="/" class="text-dark text-decoration-none">HOME</a></li>
                <li class="list-inline-item list-unstyled"><a href="/aboutus" class="text-dark text-decoration-none">ABOUT US</a></li>
                
                <li class="list-inline-item list-unstyled"><a href="/services" class="text-dark text-decoration-none">SERVICES</a></li>
                <li class="list-inline-item list-unstyled"><a href="/gallery" class="text-dark text-decoration-none">GALLERY</a></li>
                <li class="list-inline-item list-unstyled"><a href="/contact" class="text-dark text-decoration-none">CONTACT</a></li>

            </ul>
            <div class="divcross" id="appear" style="transform:translate(100px,50px); display:none;">
                <!-- search -->
                <form action="/search" class="navbar-form navbar-left d-inline">
                    <ul class="list-inline list-unstyled list">
                        <li class="list-inline-item list-unstyled">
                    <div class="form-group">
                        <input type="text" name="query" class="input-sm d-inline form-control search-box" placeholder="Search here...">                    
                    </div></li>
                    <li class="list-inline-item list-unstyled">
                    <a href="/" class="text-decoration-none searchicon">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                        width="1em" 
                        height="1em" color="black" viewBox="0 0 1024 1024">
                        <path d="M909.6 854.5L649.9 594.8C690.2 542.7 712 479 712 412c0-80.2-31.3-155.4-87.9-212.1c-56.6-56.7-132-87.9-212.1-87.9s-155.5 31.3-212.1 87.9C143.2 256.5 112 331.8 112 412c0 80.1 31.3 155.5 87.9 212.1C256.5 680.8 331.8 712 412 712c67 0 130.6-21.8 182.7-62l259.7 259.6a8.2 8.2 0 0 0 11.6 0l43.6-43.5a8.2 8.2 0 0 0 0-11.6zM570.4 570.4C528 612.7 471.8 636 412 636s-116-23.3-158.4-65.6C211.3 528 188 471.8 188 412s23.3-116.1 65.6-158.4C296 211.3 352.2 188 412 188s116.1 23.2 158.4 65.6S636 352.2 636 412s-23.3 116.1-65.6 158.4z" fill="currentColor"/></svg>
                    </a></li>
                    <li class="list-inline-item list-unstyled">
                    <button class="btnstyle" id="cross">  
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <g fill="none"><path d="M20 20L4 4m16 0L4 20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></g></svg>
                    </button></li></ul>
                </form>
            </div>
            <ul class="list-inline list-unstyled">
                <!-- search icon -->
                <li class="list-inline-item list-unstyled">
                    <button class="btnstyle text-decoration-none" id="searchbtn">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                    width="1em" 
                    height="1em" color="black" viewBox="0 0 1024 1024">
                    <path d="M909.6 854.5L649.9 594.8C690.2 542.7 712 479 712 412c0-80.2-31.3-155.4-87.9-212.1c-56.6-56.7-132-87.9-212.1-87.9s-155.5 31.3-212.1 87.9C143.2 256.5 112 331.8 112 412c0 80.1 31.3 155.5 87.9 212.1C256.5 680.8 331.8 712 412 712c67 0 130.6-21.8 182.7-62l259.7 259.6a8.2 8.2 0 0 0 11.6 0l43.6-43.5a8.2 8.2 0 0 0 0-11.6zM570.4 570.4C528 612.7 471.8 636 412 636s-116-23.3-158.4-65.6C211.3 528 188 471.8 188 412s23.3-116.1 65.6-158.4C296 211.3 352.2 188 412 188s116.1 23.2 158.4 65.6S636 352.2 636 412s-23.3 116.1-65.6 158.4z" fill="currentColor"/>
                    </svg>
                    </button>
                </li>
                |
                <!-- cart icon -->
                <li class="list-inline-item list-unstyled">
                    <a href="/cartlist" class="text-dark text-decoration-none">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                    width="1em" 
                    height="1em" color="black"
                    viewBox="0 0 24 24"><g fill="none"><path d="M3.977 9.84A2 2 0 0 1 5.971 8h12.058a2 2 0 0 1 1.994 1.84l.803 10A2 2 0 0 1 18.833 22H5.167a2 2 0 0 1-1.993-2.16l.803-10z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 11V6a4 4 0 0 0-4-4v0a4 4 0 0 0-4 4v5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g></svg>
                    <span class="cartinc badge badge-pill badge-dark text-white bg-dark" style="border-radius:10px; transform:translate(-10px,-5px);" 
                    >{{ $total }}</span>
                    </a>
                </li>
            </ul>  
        </nav>

        @if ($message = Session::get('success'))
<div class="alert alert-success alert-block mt-5 pt-2">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block mt-5 pt-2">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block mt-5 pt-2">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-info alert-block mt-5 pt-2">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger mt-5 pt-2">
    <button type="button" class="close" data-dismiss="alert">×</button>
    Check the following errors :(
</div>
@endif

    @yield('content')
<!-- footer first one -->
<div class="bg-light justify-content-center justify-items-center p-5 mt-5">
    <div class="container justify-content-center">
        <div class="d-flex flex-row flex-wrap justify-content-between justify-items-center">
        <footer style="margin-top:15px;">
        <div class="p-3 m-0">
          <div class="row ">
             <div class="col-md-6">
               <!--About Us-->
               <div class="row">
                <div class="col">
                  <p style="font-size:25px; margin-bottom:0"><b>About Us</b></p> <hr style="margin-top: 0;">
                  <p style="font-size:12px; font-weight: bold; text-align: justify;">Bookbazaar an online book thrift store. To all those who enjoy reading a lot. We provide you a platform to purchase book at reasonable price. We assist students and many other readers in
buying and selling used books.<br> We believe in Reduce, Reuse and Recycle</p>
              
                </div>
                </div>
              <div class="row" >
                <div class="col-6 text-start">
                  <p style="font-size:25px; margin-bottom:0"><b>Guidelines</b></p><hr style="margin-top: 0;">
                  <ul class="list-unstyled text-dark" style="font-size: 12px; font-weight: bold;">
                    <li><a href="/help_support" class="text-dark text-decoration-none">Help and Support</a></li>
                    <li><a href="/policy" class="text-dark text-decoration-none">Privacy Policy</a></li>
                    <li><a href="/terms" class="text-dark text-decoration-none">Terms and Conditions</a></li>
                  </ul>
                </div>
                <!--Social Media-->
                <div class=" social-media col-6 text-start">
                  <p style="font-size:25px; margin-bottom:0; "><b>Follow us</b></p><hr style="margin-top: 0;">
                  <!--Facebook-->
                  <a href="#" class="text-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" fill="currentColor" class="bi bi-facebook mr-3" viewBox="0 0 16 16">
                      <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                      </svg>
                   </a>
                <!--Twitter--> 
                    <a href="#" class="text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" fill="currentColor" class="bi bi-twitter mr-3" viewBox="0 0 16 16">
                      <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                      </svg></a>
                  <!--Instagram-->
                 <a href="#" class="text-dark">  <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" fill="currentColor" class="bi bi-instagram mr-3" viewBox="0 0 16 16">
                  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                </svg></a>
                
                </div>
              </div> 

              
            </div>
            <div class="col-md-6 text-start">
              <div class="row">
                <!-- <p style="font-size:15px; margin-bottom:0; "><b>Scan to download the app version</b></p><hr style="margin-top: 0;"> -->
                <div class="col">
                 <img src="img/QR.png" alt="QR Code" width="150px" height="150px" style="border-radius:5%">
                </div>

              </div>
              <div class="row mt-3">
                <div class="col-4"><img src="img/playstore.png" alt="" height="40px" width="100%"></div>
                <div class="col-4"><img src="img/appstore.png" alt="" height="40px" width="100%"></div>
                  
                </div>
              </div>
            </div>
            
          </div>
          </div>
            <!-- Copyright -->
        <div class="text-center p-3 w-100"style ="background-color:rgba(0, 0, 0, 0.1);">
            © 2022 Copyright:
        <a class="text-dark" href="#">bookbazaar.com</a>
      </div>
  <!-- Copyright -->

      </footer>
        </div>
    </div>
</div>

<!-- footer second one -->
<div class="bg-white justify-content-between justify-items-center">
    <div class="container justify-content-center">
        <div class="d-flex flex-row flex-wrap justify-content-between justify-items-center">
            <div class="d-flex flex-column text-left text-secondary">
                Copywrite© 2021 All Rights Reserved
            </div>
            <div class="d-flex flex-column text-left text-secondary">
                ABN:77646539773
            </div>
            <div class="d-flex flex-column text-left text-secondary">
                <img src="/img/paypol.png" width="120" height="40">
            </div>
        </div>
    </div>
</div>
        <!-- script of header and footer -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <!-- Scripts for close button-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="/js/app.js"></script>
        <script type="text/javascript">
            // search box appear
            $("#searchbtn").click(
                function()
                {
                    $("#appear").show();
                }
            );
            $("#cross").click(
                function()
                {
                    $("#appear").hide();
                }
            );
                    </script>
                </body>
            </html>
