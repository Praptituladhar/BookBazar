@extends('headerfooter')
@section('content')
<main>
    <div class="container individualbook">
        <div class="row">
            <div class="col-3">
                <div class="image text-center"> <img src="img/homepic.jpg" alt="book name" height="250px" width="100%"></div><br>
                <div class="price text-center"><strong>Price</strong></div>
                <div class="addtocart text-center "><button class="btn bg-warning mt-1" type="submit" style="width: 100%"><strong>Add to Cart</strong></button></div>
            </div>
            <div class="col-6 pl-4" style="border-right: 1px solid black">
                <div class="booktitle"><h5><strong>Book title</strong></h5></div>
                <div class="author"> by <b>Author name</b></div>
                <div>ISBN: <b>1234567890</b></div> <br>
                <div class="bookdescription">
                    <h4>Book Overview</h4> <hr>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur illo autem modi et sapiente eligendi, rem tempora accusamus delectus sint impedit laboriosam, dolorem laborum nostrum tenetur a, ducimus voluptatem distinctio?</p>
                    
                </div>
            </div>
            <div class="col-3">
                <h5>Edition Details</h5> <hr>
                <table>
                    <tr>
                        <td>Format</td>
                        <td>:</td>
                        <td>Paperback</td>
                    </tr>
                    <tr>
                        <td>Language</td>
                        <td>:</td>
                        <td>English</td>
                    </tr>
                    <tr>
                        <td>ISBN</td>
                        <td>:</td>
                        <td>1234567890</td>
                    </tr>
                    <tr>
                        <td>Release Date</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Publisher</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Length</td>
                        <td>:</td>
                        <td>total pages</td>
                    </tr>
                    <tr>
                        <td>Weight</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Dimensions</td>
                        <td>:</td>
                        <td></td>
                    </tr>

                </table><hr>
                <div>
                    Condition: <strong>Good</strong>
                </div>
            </div>
        </div>
    </div> 
    <hr>  

    <div class="container-fluid">
    <p style="font-size:25px; margin-bottom:0">Our Collections</p><hr style="margin-top: 0;">
    @include('playcards')
  
  </div>
</main>
 
 @endsection