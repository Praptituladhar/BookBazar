@extends('headerfooter')
@section('content')
<main class="productentry">
    <div>
        <div style="padding-top:165px;"></div>
    </div>
    <div class="container">
        <form action="/postaddcategory" method="POST" class="bg-light" enctype="multipart/form-data">
            <h2 class="text-center  pb-3 mb-3">Product Entry Form</h2>
            <fieldset style="border: 2px solid grey; padding: 1% 0 2% 3%">
                <legend>Category Detail</legend>
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                <div class="form-group row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control mb-2 mr-sm-2" name="add_category" placeholder="Add Category">
                        @if ($errors->has('add_category'))
                            <span class="text-danger">{{ $errors->first('add_category') }}</span>
                        @endif
                    </div>
                </div>
                <!--for buttons-->
                <div class="d-flex flex-row container mt-2 mb-2 justify-content-between justify-items-center" style="max-width:300px;">
                    <div class="d-grid d-flex flex-column mx-auto ">
                        <button type="submit" class="btn btn-secondary" href="/welcome">CANCEL</button>
                    </div>
                    <div class="d-grid d-flex-column mx-auto">
                        <button type="submit" class="btn btn-secondary" href="/addcategory">UPLOAD</button>
                    </div>
                    <div class="d-grid d-flex-column mx-auto">
                        <a type="submit" class="btn btn-secondary" href="/productentry">ENTRY</a>
                    </div>
                </div>
            </fieldset> 
        </form>
    </div>
</main>