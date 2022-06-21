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
    @include('playcards')
  
  </div>
</section>



      

@endsection