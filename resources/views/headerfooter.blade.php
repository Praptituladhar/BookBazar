<!doctype html>
<html lang="en">
  <head>
    <title>Book Bazar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

  <body >
      <header class="sticky-top bg-light">
          <div class="row mr-1">
            <div  class=" logo col-md-2">
              <a href="/"><img src="img/logo.jpg" alt="logo" height="50px" width="100px"> </a>
          </div>        
          <div class=" col-md-8 pt-2 active-purple-3 active-purple-4 ">
              <form class="form-inline mx-auto my-2 my-lg-0" >
                  <input class="form-control mr-sm-1 "type="search" placeholder="Search by Title, Author, Keyword or ISBN" aria-label="Search" style="width:80%;">
                  <button class="btn btn-outline-secondary" type="submit">Search</button>
                </form>
          </div>
          <div class="col-md-1 text-center  pl-5" >
            <div class="bg-light p-3 rounded-circle" style="width: 60px; ">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg>
           </div>
          </div>
          <div class="sell col-md-1 pt-2">
            <button class="btn btn-outline-secondary" type="submit"><a href="#">Sell</a></button>

          </div>
       </div>
    
    

        <nav class="navbar navbar-expand-lg">
          <button class="navbar-toggler" style="background-color: rgba(0, 0, 0, 0.19);" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/> </svg>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Categories
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
            </ul>
            
          </div>
        </nav>
      </header>

      @yield('contents')

      
      <!--Footer-->
     <footer style="margin-top:10px;">
        <div class="p-3 m-0">
          <div class="row ">
             <div class="col-md-6">
               <!--About Us-->
               <div class="row">
                <div class="col">
                  <p style="font-size:25px; margin-bottom:0"><b>About Us</b></p> <hr style="margin-top: 0;">
                  <p style="font-size:12px; font-weight: bold; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              
                </div>
                </div>
              <div class="row" >
                <div class="col-6 text-start">
                  <p style="font-size:25px; margin-bottom:0"><b>Guidelines</b></p><hr style="margin-top: 0;">
                  <ul class="list-unstyled" style="font-size: 12px; font-weight: bold;">
                    <li><a href="#">Issues</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                  </ul>
                </div>
                <!--Social Media-->
                <div class=" social-media col-6 text-start">
                  <p style="font-size:25px; margin-bottom:0; "><b>Follow us</b></p><hr style="margin-top: 0;">
                  <!--Facebook-->
        
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" fill="currentColor" class="bi bi-facebook mr-3" viewBox="0 0 16 16">
                      <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                      </svg>
                   </a>
                <!--Twitter--> 
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" fill="currentColor" class="bi bi-twitter mr-3" viewBox="0 0 16 16">
                      <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                      </svg></a>
                  <!--Instagram-->
                 <a href="#">  <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" fill="currentColor" class="bi bi-instagram mr-3" viewBox="0 0 16 16">
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
        <div class="text-center p-3 "style ="background-color:rgba(0, 0, 0, 0.1);">
            © 2022 Copyright:
        <a class="text-dark" href="#">bookbazaar.com</a>
      </div>
  <!-- Copyright -->

      </footer>



      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>