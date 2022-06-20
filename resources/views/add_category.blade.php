@extends('layouts.app')

@section('content')
@include('layouts.headers.cards')
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
@if (\Session::has('unsuccessful'))
    <div class="alert alert-danger">
        <ul>
            <li>{!! \Session::get('unsucessful') !!}</li>
        </ul>
    </div>
@endif
<div class="container pt-2" >
        <form action="/postaddcategory" method="POST" class="bg-light" enctype="multipart/form-data">
          <fieldset style="padding: 1% 0 2% 3%">
              <legend>Add Category</legend>
              @csrf
              <div class="form-group row">
                  <label class="col-sm-2">Add Category of Book</label>
                  <div class="col-sm-8">
                      <input type="text" class="form-control mb-2 mr-sm-2" name="category">
                      @if ($errors->has('category'))
                        <span class="text-danger">{{ $errors->first('category') }}</span>
                      @endif
                  </div>
              </div>
              <hr>
              <!-- button -->
              <div class="form-group row text-center mt-3">
                    <div class="col-sm-6" style="text-align:right;">
                      <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                  
                    <div class="col-sm-6"  style="text-align:left;">
                    <a href="/add_item" class="btn btn-primary" >Cancel</a>                
                  </div>
                </div>
            </fieldset> <br>          
        </form>
      </div>

@endsection