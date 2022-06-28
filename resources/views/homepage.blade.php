@section('contents')
<section class="homepage">
    <div class="homepic mb-5">
        <img src="img/homepic.jpg" alt="homepic" width="100%" height="500px">
         
      </div>
      <div class="container-fluid">
        <p style="font-size:25px; margin-bottom:0">Our Collections</p><hr style="margin-top: 0;">
  
       @include('playcards')
       </div>
</section>
@endsection