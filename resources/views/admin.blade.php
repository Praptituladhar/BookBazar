@extends('headerfooter')
@section('content')
<main class="admin">
    <div>
        <div style="padding-top:200px;"></div>
    </div>
    <div class="container">
        <form action="/postadmin" method="POST" class="bg-light" enctype="multipart/form-data">
        <h2 class="text-center  pb-3 pt-4 mb-3">Product Entry Form</h2>
        <fieldset style="border: 2px solid grey; padding: 1% 0 2% 3%">
            <legend>Product Details</legend>
            @csrf
            <div class="form-group row">
                <label class="col-sm-3">Product Name</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control mb-2 mr-sm-2" name="pname">
                    @if ($errors->has('pname'))
                        <span class="text-danger">{{ $errors->first('pname') }}</span>
                    @endif
                </div>
            </div>
            <!-- product category -->
            <div class="form-group row">
                <label  class="col-sm-3 col-form-label">Product Category</label>
                
                <div class="col-sm-4">
                    <input type="text" class="form-control mb-2 mr-sm-2" name="pcategory" id="inputaddress" >
                    @if ($errors->has('pcategory'))
                        <span class="text-danger">{{ $errors->first('pcategory') }}</span>
                    @endif
                </div>
                </div>

            <!-- Product price -->
                <div class="form-group row">
                <label  class="col-sm-3 col-form-label">Previous Product Price</label>
                
                <div class="col-sm-4">
                    <input type="number" name="previous_price" class="form-control mb-2 mr-sm-2" placeholder="in $">
                    @if ($errors->has('previous_price'))
                        <span class="text-danger">{{ $errors->first('previous_price') }}</span>
                    @endif                
                </div>
                </div> 
                <div class="form-group row">
                <label  class="col-sm-3 col-form-label">Current Product price</label>
                
                <div class="col-sm-4">
                    <input type="number" name="current_price" class="form-control mb-2 mr-sm-2" placeholder="in $">
                    @if ($errors->has('current_price'))
                        <span class="text-danger">{{ $errors->first('current_price') }}</span>
                    @endif                
                </div>
                </div>       

                <!-- Description -->
                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Description</label>
                <div class="col-sm-4">
                    <input type="text" name="description" class="form-control mb-2 mr-sm-2" id="description" >
                    @if ($errors->has('description'))
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                    @endif
                </div>
                </div>

                <!-- Short Description -->
                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Short Description</label>
                    <div class="col-sm-4">
                    <input type="text" name="sdescription" class="form-control mb-2 mr-sm-2" 
                    id="sdescription" >
                    @if ($errors->has('sdescription'))
                        <span class="text-danger">{{ $errors->first('sdescription') }}</span>
                    @endif                  
                    </div>
                </div>
                
                <!-- Availability -->
                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Availability</label>
                <div class="col-sm-4">
                    <input type="text" name="availability" class="form-control mb-2 mr-sm-2" id="availability" 
                    placeholder="In stock">
                    @if ($errors->has('availability'))
                        <span class="text-danger">{{ $errors->first('availability') }}</span>
                    @endif
                </div>
                </div>

                <!-- Quantity -->
                <div class="form-group row">
                <label  class="col-sm-3 col-form-label">Quantity</label>
                
                <div class="col-sm-4">
                    <input type="number" name="quantity" class="form-control mb-2 mr-sm-2" max="10">
                    @if ($errors->has('quantity'))
                        <span class="text-danger">{{ $errors->first('quantity') }}</span>
                    @endif                
                </div>
                </div>

                <!-- color -->
                <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Color</label>
                        
                        <div class="col-sm-4">
                            <input type="text" name="color" class="form-control mb-2 mr-sm-2" id="color">
                            @if ($errors->has('color'))
                                <span class="text-danger">{{ $errors->first('color') }}</span>
                            @endif
                        </div>
                    </div>
                
                <!-- Basket Description -->
                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Basket Description</label>
                <div class="col-sm-4">
                    <input type="text" name="bdescription" class="form-control mb-2 mr-sm-2" id="bdescription" >
                    @if ($errors->has('bdescription'))
                        <span class="text-danger">{{ $errors->first('bdescription') }}</span>
                    @endif
                </div>
                </div>

                <!-- Base -->
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Base</label>
                    
                    <div class="col-sm-4">
                        <input type="number" name="base" class="form-control mb-2 mr-sm-2" 
                        id="base" placeholder="in cm">
                        @if ($errors->has('base'))
                            <span class="text-danger">{{ $errors->first('base') }}</span>
                        @endif
                    </div>
                    </div>
                 <!-- Total Height -->
                 <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Total Height</label>
                    
                    <div class="col-sm-4">
                        <input type="number" name="total_height" class="form-control mb-2 mr-sm-2" 
                        id="theight" placeholder="in cm">
                        @if ($errors->has('total_height'))
                            <span class="text-danger">{{ $errors->first('total_height') }}</span>
                        @endif
                    </div>
                    </div>

                    <!-- Cushion color optional -->
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Cushion color</label>
                        
                        <div class="col-sm-4">
                            <input type="text" name="cushion_color" class="form-control mb-2 mr-sm-2" id="cushion_color" 
                            placeholder="Cushion color optional">
                            @if ($errors->has('cushion_color'))
                                <span class="text-danger">{{ $errors->first('cushion_color') }}</span>
                            @endif
                        </div>
                    </div>

            <!-- profile picture -->
            <input id="file-upload" type="file" name="fileUpload" accept="image/*" onchange="readURL(this);">
            <label for="file-upload" id="file-drag">
                <img id="file-image" src="/img/sample.png" alt="Preview" class="hidden"  width="150" height="150">
                <div id="start" >
                    <i class="fa fa-download" aria-hidden="true"></i>
                    <div>Select a file or drag here</div>
                    
                    @if($message = Session::get('success'))
                    <strong>{{ $message }} </strong>
                    <div class="alert alert-success alert-block">
                        <img src="/image/{{ Session::get('path')}}" width="300" height="300">
                    </div>
                    @endif
                    <span class="text-danger">{{ $errors->first('fileUpload') }}</span>
                </div>
            </label>
        
            </fieldset> <br>  
     
            <!--for buttons-->
            <div class="d-flex flex-row container mt-2 mb-2 justify-content-between justify-items-center" style="max-width:300px;">
            <div class="d-grid d-flex flex-column mx-auto ">
                <button type="submit" class="btn btn-primary" href="/welcome">CANCEL</button>
            </div>
            <div class="d-grid d-flex-column mx-auto">
                <button type="submit" class="btn btn-primary" href="/admin">UPLOAD</button>
            </div>
        </div>
        </fieldset>  
        </form>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</div>

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