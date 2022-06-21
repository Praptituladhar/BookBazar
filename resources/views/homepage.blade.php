@extends('headerfooter')
@section('content')
<section>
      
  <div class="homepic mb-5">
    <img src="img/homepic.jpg" alt="homepic" width="100%" height="500px">
    <!-- <div class="text-block">
      <p style="font-size:40px;">Where Book Comes to you</p>
      
    </div>  -->
  </div>
  <div class="container-fluid">
    <p style="font-size:25px; margin-bottom:0">Our Collections</p><hr style="margin-top: 0;">

  <div class="playcard" style="position: relative; overflow: hidden; width: auto; height: calc(8rem + 195px);">	
    <div style="position: absolute; inset: 0px; overflow: scroll; margin-right: -17px; margin-bottom: -17px;">
        <div class="showbook" style="width: 4080px;">
          <div class="book">
            <div class="icondiv">
              <a  href="#">
                <svg class="icon"  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                  <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                </svg>
              </a>
            </div>
            <span class="hovertext">Add to Kart</span>
          <a href="individualbook.html" aria-current="false">
            <div class=" ">
                <div class="bookimg" style="height: calc(3.5rem + 150px);overflow: hidden; border-radius: 2%;">
                    <img src="img/homepic.jpg" alt="" style="height: 100%;width: 170px;">
                </div>
                <hr style="margin-bottom: 1px;">
                <div>
                    <div><strong>Book name</strong> </div>
                    <div> author </div>
                    <div class="mb-1"> price </div>
                </div>
            </div>
          </a>
        </div>
        <div class="book">
          <div class="icondiv">
            <a  href="#">
              <svg class="icon"  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
              </svg>
            </a>
          </div>
          <span class="hovertext">Add to Cart</span>
        <a href="#" aria-current="false">
          <div class=" ">
              <div class="bookimg" style="height: calc(3.5rem + 150px);overflow: hidden; border-radius: 2%;">
                  <img src="img/homepic.jpg" alt="" style="height: 100%;width: 170px;">
              </div>
              <hr style="margin-bottom: 1px;">
              <div>
                  <div><strong>Book name</strong> </div>
                  <div> author </div>
                  <div class="mb-1"> price </div>
              </div>
          </div>
        </a>
      </div>
          
        </div>	
    </div>
  </div>
  </div>
</section>



      

@endsection