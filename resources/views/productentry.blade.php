@extends('headerfooter')
@section('content')
<main class="productentry">
    <div>
        <div style="padding-top:165px;"></div>
    </div>
    <div class="container">
        <form action="/postproductentry" method="POST" class="bg-light" enctype="multipart/form-data">
            <h2 class="text-center  pb-3 mb-3">Book Entry Form</h2>
            <fieldset style="border: 2px solid grey; padding: 1% 0 2% 3%">
                <legend>Book Details</legend>
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                
                <!-- product name -->
                <div class="form-group row">
                    <label class="col-sm-3">Book Name</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control mb-2 mr-sm-2" name="pname">
                        @if ($errors->has('pname'))
                            <span class="text-danger">{{ $errors->first('pname') }}</span>
                        @endif
                    </div>
                </div>

                <!-- product category -->
                <div class="form-group row">
                    <label  class="col-sm-3 col-form-label">Book Category</label>              
                    <div class="col-sm-6">
                        <select class="form-control mb-2 mr-sm-2" name="category_name">
                            @foreach ($addcategory as $add_category)
                            {
                                <option value="{{ $add_category->add_category }}">{{ $add_category->add_category }}</option>
                            }
                            @endforeach
                        </select>
                        @if ($errors->has('category_name'))
                            <span class="text-danger">{{ $errors->first('category_name') }}</span>
                        @endif
                    </div>
                    <div class="col-sm-2">
                        <a type="submit" class="btn btn-secondary" href="/addcategory">Add the category</a>
                    </div>
                </div>

                <!-- Current Product Price-->
                <div class="form-group row">
                    <label  class="col-sm-3 col-form-label">Current Product price</label>                
                    <div class="col-sm-6">
                        <input type="number" name="current_price" class="form-control mb-2 mr-sm-2" placeholder="in Rs.">
                        @if ($errors->has('current_price'))
                            <span class="text-danger">{{ $errors->first('current_price') }}</span>
                        @endif                
                    </div>
                </div>

                <!-- Description -->
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-6">
                        <input type="text" name="description" class="form-control mb-2 mr-sm-2" id="description" >
                        @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                    </div>
                </div>
                
                <!--  Product quantity -->
                <div class="form-group row">
                    <label  class="col-sm-3 col-form-label">Quantity</label>               
                    <div class="col-sm-6">
                        <input type="number" name="quantity" class="form-control mb-2 mr-sm-2" >
                        @if ($errors->has('quantity'))
                            <span class="text-danger">{{ $errors->first('quantity') }}</span>
                        @endif                
                    </div>
                </div> 

                <!-- Short Description -->
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Author</label>
                    <div class="col-sm-6">
                        <input type="text" name="author" class="form-control mb-2 mr-sm-2" 
                        id="author" >
                        @if ($errors->has('author'))
                            <span class="text-danger">{{ $errors->first('author') }}</span>
                        @endif                  
                    </div>
                </div>

                <!-- ISBN -->
                <div class="form-group row">
                    <label  class="col-sm-3 col-form-label">ISBN</label>                
                    <div class="col-sm-6">
                        <input type="number" name="isbn" class="form-control mb-2 mr-sm-2">
                        @if ($errors->has('isbn'))
                            <span class="text-danger">{{ $errors->first('isbn') }}</span>
                        @endif                
                    </div>
                </div>
                <!-- format -->
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Format</label>
                    
                    <div class="col-sm-6">
                        <input type="text" name="format" class="form-control mb-2 mr-sm-2" id="format">
                        @if ($errors->has('format'))
                            <span class="text-danger">{{ $errors->first('format') }}</span>
                        @endif
                    </div>
                </div>
                    
                <!-- Language -->
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Language</label>
                    <div class="col-sm-6">
                        <input type="text" name="language" class="form-control mb-2 mr-sm-2" id="language" >
                        @if ($errors->has('language'))
                            <span class="text-danger">{{ $errors->first('language') }}</span>
                        @endif
                    </div>
                </div>

                <!-- Release date -->
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Release Date</label>
                    
                    <div class="col-sm-6">
                        <input type="date" name="release_date" class="form-control mb-2 mr-sm-2" 
                        id="release_date">
                        @if ($errors->has('release_date'))
                            <span class="text-danger">{{ $errors->first('release_date') }}</span>
                        @endif
                    </div>
                </div>

                <!-- Publisher -->
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Publisher</label>
                    <div class="col-sm-6">
                        <input type="text" name="publisher" class="form-control mb-2 mr-sm-2" 
                        id="publisher">
                        @if ($errors->has('publisher'))
                            <span class="text-danger">{{ $errors->first('publisher') }}</span>
                        @endif
                    </div>
                </div>

                <!-- Pages -->
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Pages</label>            
                    <div class="col-sm-6">
                        <input type="number" name="pages" class="form-control mb-2 mr-sm-2" id="pages">
                        @if ($errors->has('pages'))
                            <span class="text-danger">{{ $errors->first('pages') }}</span>
                        @endif
                    </div>
                </div>

                <!-- Condition -->
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Condition</label>            
                    <div class="col-sm-6">
                        <input type="text" name="condition" class="form-control mb-2 mr-sm-2" id="condition">
                        @if ($errors->has('condition'))
                            <span class="text-danger">{{ $errors->first('condition') }}</span>
                        @endif
                    </div>
                </div>

                <!-- product picture -->
                <div class="row mt-4 pt-2">
                    <div class="col-sm-4">
                        <h6 class="mb-4">Add the image of front view of the product</h6>
                        <input id="file-upload" type="file" name="img1" accept="image/*" onchange="readURL(this);">
                        <label for="file-upload" id="file-drag">
                            <div id="start" >
                                <i class="fa fa-download" aria-hidden="true"></i>                        
                                @if($message = Session::get('success'))
                                <strong>{{ $message }} </strong>
                                <div class="alert alert-success alert-block">
                                    <img src="/image/{{ Session::get('path')}}" width="300" height="300">
                                </div>
                                @endif
                                <span class="text-danger">{{ $errors->first('img1') }}</span>
                            </div>
                        </label>
                    </div>
                    
                </div>
            <fieldset>
            <div>
                <div class="d-flex justify-content-center">                
                    <img id="file-image" src="/img/sample.png" alt="Preview" class="hidden"  width="150" height="150">
                </div>
                <h6 class="text-center">The recently selected image will be displayed here</h6>
            </div>
            <br>
            <!--for buttons-->
            <div class="d-flex flex-row container mt-2 mb-2 justify-content-between justify-items-center" style="max-width:300px;">
            <div class="d-grid d-flex flex-column mx-auto ">
                <button type="submit" class="btn btn-secondary" href="/welcome">CANCEL</button>
            </div>
            <div class="d-grid d-flex-column mx-auto">
                <button type="submit" class="btn btn-secondary" href="/productentry">UPLOAD</button>
            </div>
        </form>
    </div>
</main>

<script>
function readURL(input, id) {
id = id || '#file-image';
if (input.files && input.files[0]) {
var reader = new FileReader();
reader.onload = function (e) {
$(id).attr('src', e.target.result);
};
reader.readAsDataURL(input.files[0]);
$('#file-image').removeClass('hidden');
$('#start').hide();
}
}
</script> 
@endsection