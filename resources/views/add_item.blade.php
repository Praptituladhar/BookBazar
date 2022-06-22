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
        <form action="/postaddbook" method="POST" class="bg-light" enctype="multipart/form-data">
          <fieldset style="padding: 1% 0 2% 3%">
              <legend>Book Details</legend>
              @csrf
              <div class="form-group row">
                  <label class="col-sm-2">Book Name</label>
                  <div class="col-sm-8">
                      <input type="text" class="form-control mb-2 mr-sm-2" name="bookName" placeholder="Full book name">
                      @if ($errors->has('bookName'))
                        <span class="text-danger">{{ $errors->first('bookName') }}</span>
                      @endif
                  </div>
              </div>
              <div class="form-group row">
                  <label class="col-sm-2">Category</label>
                  <div class="col-sm-8">
                    
                  <select class="form-select form-control" aria-label="Default select example" name="category">
                    <option selected>Select Category</option>
                    @foreach($category as $categories)
                    <option value="{{$categories->category}}">{{ $categories->category }}</option>
                    @endforeach
                  </select>
                      @if ($errors->has('category'))
                        <span class="text-danger">{{ $errors->first('category') }}</span>
                      @endif
                  </div>
              </div>
              <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Author</label>
                
                <div class="col-sm-8">
                  <input type="text" class="form-control mb-2 mr-sm-2" name="author" id="author" placeholder="Author's name">
                  @if ($errors->has('author'))
                    <span class="text-danger">{{ $errors->first('author') }}</span>
                  @endif
                </div>
              </div>
                 
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">ISBN</label>
                    
                    <div class="col-sm-8">
                      <input type="text" class="form-control mb-2 mr-sm-2" name="isbn" id="isbn" placeholder="ISBN Number" >
                      @if ($errors->has('isbn'))
                        <span class="text-danger">{{ $errors->first('isbn') }}</span>
                      @endif
                    </div>
                  </div> 
                    
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Description</label>
                    
                    <div class="col-sm-8">
                      <textarea name="description" class="form-control"></textarea>
                      <!-- <input type="text" class="form-control mb-2 mr-sm-2" name="description" id="inputdescription" > -->
                      @if ($errors->has('description'))
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                      @endif
                    </div>
                  </div>
              <!-- book picture -->
              <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Book Image</label>
                    <div class="col-sm-8">
                      <span class="input-group-btn">
                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                        <i class="fa fa-picture-o"></i> Choose
                        </a>
                      </span>
                      <input id="thumbnail" class="form-control" type="text" name="filepath">
                      @if ($errors->has('filepath'))
                        <span class="text-danger">{{ $errors->first('filepath') }}</span>
                      @endif
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Price</label>
                    
                    <div class="col-sm-8">
                      <input type="number" class="form-control mb-2 mr-sm-2" name="price" id="price" placeholder="" >
                      @if ($errors->has('price'))
                        <span class="text-danger">{{ $errors->first('price') }}</span>
                      @endif
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Condition</label>
                    <div class="col-md-8">
                    <select class="form-select form-control" aria-label="Default select example" name="condition">
                      <option selected>Select condition of your book</option>
                      <option value="verygood">Very Good</option>
                      <option value="good">Good</option>
                      <option value="acceptable">Acceptable</option>
                    </select>
                      @if ($errors->has('condition'))
                        <span class="text-danger">{{ $errors->first('condition') }}</span>
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
                    <a href="/" class="btn btn-primary" >Cancel</a>                
                  </div>
                </div>
            </fieldset> <br>          
        </form>
      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <script>
   var route_prefix = "/filemanager";
  </script>

  <!-- CKEditor init -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/ckeditor.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/adapters/jquery.js"></script>
  <script>
    $('textarea[name=description]').ckeditor({
      height: 100,
      filebrowserImageBrowseUrl: route_prefix + '?type=Images',
      filebrowserImageUploadUrl: route_prefix + '/upload?type=Images&_token={{csrf_token()}}',
      filebrowserBrowseUrl: route_prefix + '?type=Files',
      filebrowserUploadUrl: route_prefix + '/upload?type=Files&_token={{csrf_token()}}'
    });
  </script>

  <!-- TinyMCE init -->
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <!-- <script src="//cdn.tinymce.com/4/tinymce.min.js"></script> -->
  <script>
    var editor_config = {
      path_absolute : "",
      selector: "textarea[name=tm]",
      plugins: [
        "link image"
      ],
      relative_urls: false,
      height: 129,
      file_browser_callback : function(field_name, url, type, win) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

        var cmsURL = editor_config.path_absolute + route_prefix + '?field_name=' + field_name;
        if (type == 'image') {
          cmsURL = cmsURL + "&type=Images";
        } else {
          cmsURL = cmsURL + "&type=Files";
        }

        tinyMCE.activeEditor.windowManager.open({
          file : cmsURL,
          title : 'Filemanager',
          width : x * 0.8,
          height : y * 0.8,
          resizable : "yes",
          close_previous : "no"
        });
      }
    };

    tinymce.init(editor_config);
  </script>

  <script>
    {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/stand-alone-button.js')) !!}
  </script>
  <script>
    $('#lfm').filemanager('image', {prefix: route_prefix});
    // $('#lfm').filemanager('file', {prefix: route_prefix});
  </script>

  <script>
    var lfm = function(id, type, options) {
      let button = document.getElementById(id);

      button.addEventListener('click', function () {
        var route_prefix = (options && options.prefix) ? options.prefix : '/filemanager';
        var target_input = document.getElementById(button.getAttribute('data-input'));
        var target_preview = document.getElementById(button.getAttribute('data-preview'));

        window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
        window.SetUrl = function (items) {
          var file_path = items.map(function (item) {
            return item.url;
          }).join(',');

          // set the value of the desired input to image url
          target_input.value = file_path;
          target_input.dispatchEvent(new Event('change'));

          // clear previous preview
          target_preview.innerHtml = '';

          // set or change the preview image src
          items.forEach(function (item) {
            let img = document.createElement('img')
            img.setAttribute('style', 'height: 5rem')
            img.setAttribute('src', item.thumb_url)
            target_preview.appendChild(img);
          });

          // trigger change event
          target_preview.dispatchEvent(new Event('change'));
        };
      });
    };

    lfm('lfm2', 'file', {prefix: route_prefix});
  </script>

  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
  <style>
    .popover {
      top: auto;
      left: auto;
    }
  </style>
  <script>
    $(document).ready(function(){

      // Define function to open filemanager window
      var lfm = function(options, cb) {
        var route_prefix = (options && options.prefix) ? options.prefix : '/filemanager';
        window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
        window.SetUrl = cb;
      };

      // Define LFM summernote button
      var LFMButton = function(context) {
        var ui = $.summernote.ui;
        var button = ui.button({
          contents: '<i class="note-icon-picture"></i> ',
          tooltip: 'Insert image with filemanager',
          click: function() {

            lfm({type: 'image', prefix: '/filemanager'}, function(lfmItems, path) {
              lfmItems.forEach(function (lfmItem) {
                context.invoke('insertImage', lfmItem.url);
              });
            });

          }
        });
        return button.render();
      };

      // Initialize summernote with LFM button in the popover button group
      // Please note that you can add this button to any other button group you'd like
      $('#summernote-editor').summernote({
        toolbar: [
          ['popovers', ['lfm']],
        ],
        buttons: {
          lfm: LFMButton
        }
      })
    });
  </script>

@endsection