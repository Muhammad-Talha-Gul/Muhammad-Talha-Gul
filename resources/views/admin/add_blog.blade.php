@extends('layouts.backend')
@section('customStyles')
<link href="{{asset('plugins/summernote/summernote.css')}}" rel="stylesheet" />
<link href="{{asset('plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css')}}" rel="stylesheet" />
<link href="{{asset("plugins/select2/css/select2.min.css")}}" rel="stylesheet" type="text/css" />
<style>
    .products-form ul#product_tabs {
        border: 1px solid #f3f3f3;
    }
</style>
@endsection
@section('content')
@if(check_access(Auth::user()->id,'blog','_create')==1)
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h4 class="page-title">Add Post </h4>
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="{{url('/admin/home')}}">Admin</a>
                    </li>
                    <li>
                        <a href="{{route('blog.index')}}">Blog</a>
                    </li>
                    <li class="active">
                        Add New Post
                    </li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card-box table-responsive">
                    <div class="p-10">
                        <div class="">
                            <div class="col-md-6">
                                <div class="form-group m-b-20">
                                    <label>Post Title</label>
                                    <input type="text" class="form-control" name="title" id="blog-title" placeholder="Enter title" required>
                                </div>
                                <div class="form-group m-b-20">
                                    <div class="form-group m-b-20">
                                        <label>Category</label>
                                        <select class="form-control select2" name="category_id">
                                            @foreach(blog_categories() as $value)
                                            <option value="{{$value->id}}">{{$value->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Views</label>
                                        <input type="number" class="form-control" name="views" placeholder="Number of views" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Sort Order</label>
                                        <input type="number" min="0" class="form-control" name="sort_order" placeholder="Sort Order" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Slug</label>
                                    <input type="text" class="form-control" name="slug" id="slug" required>
                                </div>
                                <div class="form-group">
                                    <label>Short Description</label>
                                    <textarea class="form-control" name="short_description" rows="10" required placeholder="Enter short description"></textarea>
                                </div>
                            </div>
                            <div class="clearfix"></div>

                            <div class="form-group m-b-20">
                                <label>Description</label>
                                <!--<textarea class="summernote" name="description" required></textarea>-->
                                 <textarea id="basic-example" name="description"> </textarea>
                            </div>

                            <!--- schema markup satart by sadam --->

                            <div class="optionBox">
                                <div class="block">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Scehma Markup Question</label>
                                            <input type="text" class="form-control" name="sm_question[]" id="sm_question" required>
                                        </div>
                                    </div>
                                    <div class="clearfix block"></div>

                                    <div class="col-md-12 block">
                                        <div class="form-group">
                                            <label>Scehma Markup Answer</label>
                                            <textarea class="form-control" name="sm_answer[]" rows="10" required placeholder="Enter short description"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="block">
                                    <button class="add btn btn-primary btn-sm fa fa-plus"> Add Schema Row</button>
                                </div>
                            </div>
                            <hr>

                            <!-- review stat -->
                            <div class="optionBox2">
                                <div class="col-md-3 block2">
                                    <div class="form-group">
                                        <label>Rating</label>
                                        <input type="number" min="0" class="form-control" name="ratingValue[]" id="ratingValue" required>
                                    </div>
                                </div>
                                <div class="col-md-3 block2">
                                    <div class="form-group">
                                        <label>Date</label>
                                        <input type="date" class="form-control" name="datePublished[]" id="datePublished" required>
                                    </div>
                                </div>
                                <div class="col-md-3 block2">
                                    <div class="form-group">
                                        <label>Author's Name</label>
                                        <input type="text" min="0" class="form-control" name="author[]" id="worstRating" required>
                                    </div>
                                </div>
                                <div class="col-md-3 block2">
                                    <div class="form-group">
                                        <label>Publisher's Name</label>
                                        <input type="text" class="form-control" name="publisherName[]" id="publisherName" required>
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="clearfix block2"></div>

                                <div class="col-md-12 block2">
                                    <div class="form-group">
                                        <label>Review's Name</label>
                                        <input type="text" class="form-control" name="reviewerName[]" id="reviewerName" required>
                                    </div>
                                </div>
                                <div class="clearfix block2"></div>

                                <div class="col-md-12 block2">
                                    <div class="form-group">
                                        <label>Review Description</label>
                                        <textarea class="form-control" name="reviewBody[]" rows="5" required placeholder="Enter short description"></textarea>
                                    </div>
                                </div>

                                <div class="block2">
                                    <button class="add2 btn btn-primary btn-sm fa fa-plus"> Add Review Row</button>
                                </div>
                            </div>
                            <hr>

                            <!--- sechem markup end by Sadam    --->


                            <div class="form-group m-b-20 m-t-10">
                                <label>Featured Image</label>
                                <div class="image-placeholder" id="wfm" data-input="f-hidden" data-preview="f-holder">
                                    <img src="{{asset('placeholder.jpg')}}" id="f-holder" class="img-responsive img-selection img-thumbnail" style="max-height:300px">
                                </div>
                                <a href="javascript:void(0)" class="removeImage" data-hidden="f-hidden" data-holder="f-holder" style="display: none">Remove Image</a>
                                <input type="hidden" name="image" id="f-hidden">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-box table-responsive">
                    <div class="row">
                        <div class="form-group col-sm-1"></div>
                        <div class="form-group col-sm-2">
                            <label>Meta Tags</label> <br>
                            <input id="meta_tags" class="mark_featured seo" switch="primary" name="seo[show_meta]" type="checkbox">
                            <label for="meta_tags" data-on-label="Yes" data-off-label="No"></label>
                        </div>
                    </div>
                    <div class="row" id="show_meta_tags" style="display:none;">
                        <hr>
                        <h5 style="padding-left: 20px;">META TAGS</h5>
                        <hr>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Meta Title</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="seo[meta_title]">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Meta Keywords</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" data-role="tagsinput" name="seo[meta_keywords]">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Meta Description</label>
                                <div class="col-md-12">
                                    <textarea maxlength="255" class="form-control" name="seo[meta_description]"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-box table-responsive">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="checkbox checkbox-primary">
                                    <input type="checkbox" name="is_active" value="1" checked>
                                    <label>Active</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-primary" value="Save">
                            <a href="{{route('blog.index')}}" class="btn btn-success">Back</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@else
@component('admin.access-denied') @endcomponent
@endif
@endsection
@section('customScripts')
<script src="{{asset('plugins/summernote/summernote.min.js')}}"></script>
<!-- Text Editor  -->
<script src="https://cdn.tiny.cloud/1/ejbouw0lkw7rjy60tdczdg51qajf7z9097x2knuqm974h831/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

<script src="{{asset('plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js')}}" type="text/javascript"></script>
<script src="{{asset('plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js')}}"></script>
<script src="{{asset('vendor/laravel-filemanager/js/lfm.js')}}"></script>
<script src="{{asset("plugins/select2/js/select2.min.js")}}" type="text/javascript"></script>
<script type="text/javascript">
    function convertToSlug(Text) {
        return Text
            .toLowerCase()
            .replace(/[^\w ]+/g, '')
            .replace(/ +/g, '-');
    }
    $(document).on('change', '.seo', function() {
        var id = $(this).attr('id');
        if ($(this).is(':checked')) {
            $('#show_' + id).slideDown(300);
        } else {
            $('#show_' + id).slideUp(300);
        }
    });
    $(document).on('focusout', '#blog-title', function() {
        $("#slug").val(convertToSlug($(this).val()));
    });
    jQuery(document).ready(function() {
        $('.image-placeholder').filemanager('image', {
            prefix: "{{url('/filemanager')}}"
        });
    });
    
    
     // Define function to open filemanager window
var lfm = function(options, cb) {
    var route_prefix = (options && options.prefix) ? options.prefix : '/filemanager';
    window.open(route_prefix + '?type=' + (options.type || 'file'), 'FileManager', 'width=900,height=600');
    window.SetUrl = function(url) {
        console.log("Received URL:", url); // Debugging
        cb(url); // Pass the url to the callback function
    };
};
// Initialize file manager with jQuery (if needed)
jQuery(document).ready(function() {
    $('.image-placeholder').filemanager('image', {
        prefix: "{{url('/filemanager')}}"
    });
});
</script>
<script>
    $(document).ready(function() {
        
         tinymce.init({
    selector: "#basic-example",
    setup: function (editor) {
        editor.on("init", function () {
            if (editor.getContent().trim() === "") {
                editor.setContent(""); // Set initial content to an empty string if no content is present
            }
        });

              // WhatsApp Button
              editor.ui.registry.addButton('whatsappButton', {
            text: 'WhatsApp',
            icon: 'image',
            tooltip: 'Add WhatsApp button',
            onAction: function () {
                let whatsappNumber;
                let whatsappText;
                let buttonText = prompt("Enter Button Text:", " Chat With Us");
                let whatsapp = prompt("Enter WhatsApp Number:", "923330033235");

                whatsappNumber = whatsapp || "923330033235";
                whatsappText = buttonText || " Chat With Us";

                var buttonHTML = '<span class="fa fa-whatsapp" onclick="window.open(\'https://api.whatsapp.com/send?phone=' + whatsappNumber + '\')" style="font-size: 18px;color: white;font-weight: bold; background: #3FC250; padding: 15px; border-radius: 10px; cursor: pointer;">' + whatsappText + '</span>';
                editor.insertContent(buttonHTML);
            }
        });

        // Call Button
        editor.ui.registry.addButton('callButton', {
            text: 'Call',
            icon: 'phone',
            tooltip: 'Add Call button',
            onAction: function () {
                let callNumber;
                let call = prompt("Enter Call Number:", "923330033235");
                callNumber = call || "923330033235";

                var buttonHTML = '<a class="fa fa-phone" href="tel:' + callNumber + '" style="font-size: 18px;color: white;font-weight: bold; background: #2c73c9; padding: 15px; border-radius: 10px; cursor: pointer;">Call Us</a>';
                editor.insertContent(buttonHTML);
            }
        });

        editor.ui.registry.addButton('applyButton', {
            text: 'Apply Now',
            icon: 'edit', // You can choose a different icon
            tooltip: 'Add Apply Now button',
            onAction: function () {
                let buttonText = prompt("Enter Button Text:", "Apply Now");
                var buttonHTML = '<button style="font-size: 18px;color: white;font-weight: bold; background: #4267b2; padding: 15px; border-radius: 10px; cursor: pointer;" class="btn btn-success apply_now_custom_form_button" data-toggle="modal" data-target="#apply_now_form" >' + (buttonText || "Apply Now") + '</button>';
                editor.insertContent(buttonHTML);
            }
        });

        editor.ui.registry.addButton('quoteButton', {
            text: 'Quote',
            icon: 'blockquote',
            tooltip: 'Insert Quote',
            onAction: function () {
                let quoteText = prompt("Enter your quote:");
                let quoteLink = prompt("Enter link for the quote (leave blank for no link):");

                if (quoteText) {
                    // Create the blockquote with link
                    let blockquoteHTML = '<blockquote style="color: black; border-left: 4px solid #ccc; padding-left: 10px;">';
                    if (quoteLink) {
                        blockquoteHTML += '<a href="' + quoteLink + '" style="color: black; text-decoration: underline;">' + quoteText + '</a>';
                    } else {
                        blockquoteHTML += quoteText;
                    }
                    blockquoteHTML += '</blockquote>';
                    editor.insertContent(blockquoteHTML);
                }
            }
        });
        editor.ui.registry.addButton('lfmButton', {
            text: 'Insert Image',
            icon: 'image',
            tooltip: 'Insert image with file manager',
            onAction: function () {
                var altText = prompt("Please enter alt text for the image:", ""); // Prompt for alt text
                if (altText !== null) { // If user didn't cancel
                    lfm({ type: 'image', prefix: "{{url('/filemanager')}}" }, function (url) {
                        var img = $('<img>').attr('src', url).attr('alt', altText); // Create img element with alt attribute
                        editor.insertContent(img[0].outerHTML); // Insert the img element into the editor
                    });
                }
            }
        });
    },

    height: 500,
    plugins: [
        "advlist",
        "autolink",
        "lists",
        "link",
        "image",
        "charmap",
        "preview",
        "anchor",
        "searchreplace",
        "visualblocks",
        "code",
        "fullscreen",
        "insertdatetime",
        "media",
        "table",
        "help",
        "wordcount",
         "textcolor"
    ],
  toolbar: "undo redo | blocks  | fontSize | fontFamily | table | bold  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent |forecolor backcolor | removeformat | lfmButton |  callButton |  quoteButton | link | whatsappButton | applyButton | spellchecker | help",
    content_style: "body { font-family: Arial, sans-serif; font-size: 16px; } td p { margin-top: 0px; }",
    setup: function (editor) {
        // WhatsApp Button
        editor.ui.registry.addButton('whatsappButton', {
            text: 'WhatsApp',
            tooltip: 'WhatsApp',
            onAction: function () {
                let whatsappNumber = prompt("Enter WhatsApp Number:", "+923243640038") || "+923243640038";
                let buttonText = prompt("Enter Button Text:", "Chat With Us") || "Chat With Us";
                var buttonHTML = '<span class="fa fa-whatsapp" onclick="window.open(\'https://api.whatsapp.com/send?phone=' + whatsappNumber + '\')" style="font-size: 18px;color: white;font-weight: bold; background: #3FC250; padding: 15px; border-radius: 10px; cursor: pointer;">' + buttonText + '</span>';
                editor.insertContent(buttonHTML);
            }
        });

        // Call Button
        editor.ui.registry.addButton('callButton', {
            text: 'Call',
            tooltip: 'Add Call button',
            onAction: function () {
                let callNumber = prompt("Enter Call Number:", "+923243640038") || "+923243640038";
                var buttonHTML = '<a href="tel:' + callNumber + '" style="font-size: 18px;color: white !important;font-weight: bold; background: #2c73c9; padding: 15px; border-radius: 10px; cursor: pointer; text-decoration:none !important;">Call Us</a>';
                editor.insertContent(buttonHTML);
            }
        });

        // Apply Button
        editor.ui.registry.addButton('applyButton', {
            text: 'Apply Now',
            tooltip: 'Add Apply Now button',
            onAction: function () {
                let buttonText = prompt("Enter Button Text:", "Apply Now");
                var buttonHTML = '<button style="font-size: 18px;color: white;font-weight: bold; background: #4267b2; padding: 15px; border-radius: 10px; cursor: pointer;" class="btn btn-success apply_now_custom_form_button" data-toggle="modal" data-target="#apply_now_form">' + (buttonText || "Apply Now") + '</button>';
                editor.insertContent(buttonHTML);
            }
        });

        // LFM Button
        editor.ui.registry.addButton('lfmButton', {
            text: 'Image',
            tooltip: 'Insert image with file manager',
            onAction: function () {
                var altText = prompt("Please enter alt text for the image:", "");
                if (altText !== null) {
                    lfm({ type: 'image', prefix: "{{url('/filemanager')}}" }, function (url) {
                        var img = $('<img>').attr('src', url).attr('alt', altText);
                        editor.insertContent(img[0].outerHTML);
                    });
                }
            }
        });

        editor.ui.registry.addButton('quoteButton', {
            text: 'Quote',
            tooltip: 'Insert Quote',
            onAction: function () {
                let quoteText = prompt("Enter your quote:", "Related:") || "Related:";
                if (quoteText) {
                    // Create the blockquote with link
                    let blockquoteHTML = '<blockquote style="color: black; border-left: 4px solid #ccc; padding-left: 10px;">';
                    blockquoteHTML += quoteText;
                    blockquoteHTML += '</blockquote>';
                    editor.insertContent(blockquoteHTML);
                }
            }
        });

        // Keyboard Shortcuts
        editor.on('keydown', function (e) {
            if (e.ctrlKey) {
                switch (e.key) {
                    case 'z': // Ctrl + Z for undo
                        e.preventDefault();
                        editor.execCommand('undo');
                        break;
                    case 'y': // Ctrl + Y for redo
                        e.preventDefault();
                        editor.execCommand('redo');
                        break;
                  
                   
                    case 'l': // Ctrl + L for left alignment
                        e.preventDefault();
                        editor.execCommand('JustifyLeft');
                        break;
                    case 'e': // Ctrl + C for center alignment
                        e.preventDefault();
                        editor.execCommand('JustifyCenter');
                        break;
                    case 'r': // Ctrl + R for right alignment
                        e.preventDefault();
                        editor.execCommand('JustifyRight');
                        break;
                    case 'j': // Ctrl + J for justify
                        e.preventDefault();
                        editor.execCommand('JustifyFull');
                        break;
                    case 'q': // Ctrl + Q for inserting a quote
                        e.preventDefault();
                       let quoteText = prompt("Enter your quote:", "Related:") || "Related:";
                        if (quoteText) {
                            let blockquoteHTML = '<blockquote style="color: black; border-left: 4px solid #ccc; padding-left: 10px;">';
                            blockquoteHTML += quoteText;
                            blockquoteHTML += '</blockquote>';
                            editor.insertContent(blockquoteHTML);
                        }
                        break;
                }
            } else {
             
          }
        });
    }
});



        // dynamic row for schema start

        $('.add').click(function() {
            $('.block:last').before('<div class="block"><div class="col-md-12"><div class="form-group"><label>Scehma Markup Question</label><input type="text" class="form-control" name="sm_question[]" id="sm_question" required></div></div><div class="clearfix block"></div><div class="col-md-12 block"><div class="form-group"><label>Scehma Markup Answer</label><textarea class="form-control" name="sm_answer[]" rows="10" required placeholder="Enter short description"></textarea></div></div><button class="remove btn btn-danger btn-sm fa fa-trash"> Remove Schema Question</button></div><hr>');
        });
        $('.optionBox').on('click', '.remove', function() {
            $(this).parent().remove();
        });

        // review dynamic script
        $('.add2').click(function() {
            $('.block2:last').before('<div class="block2"><div class="col-md-3 block2">\
                                            <div class="form-group">\
                                                <label>Rating</label>\
                                                <input type="number" min="0" class="form-control" name="ratingValue[]" id="ratingValue" required>\
                                            </div>\
                                        </div>\
                                        <div class="col-md-3 block2">\
                                            <div class="form-group">\
                                                <label>Date</label>\
                                                <input type="date" class="form-control" name="datePublished[]" id="datePublished" required>\
                                            </div>\
                                        </div>\
                                        <div class="col-md-3 block2">\
                                            <div class="form-group">\
                                                <label>Author\'s\ Name</label>\
                                                <input type="text" min="0" class="form-control" name="author[]" id="worstRating" required>\
                                            </div>\
                                        </div>\
                                        <div class="col-md-3 block2">\
                                            <div class="form-group">\
                                                <label>Publisher\'s\ Name</label>\
                                                <input type="text"  class="form-control" name="publisherName[]" id="publisherName" required>\
                                            </div>\
                                        </div>\
                                        <div class="clearfix block2"></div>\
                                        <div class="col-md-12">\
                                            <div class="form-group">\
                                                <label>Review\'s\ Name</label>\
                                                <input type="text" class="form-control" name="reviewerName[]" id="reviewerName" required>\
                                            </div>\
                                        </div>\
                                        <div class="col-md-12 block2">\
                                            <div class="form-group">\
                                                <label>Review Description</label>\
                                                <textarea class="form-control" name="reviewBody[]" rows="5" required placeholder="Enter short description"></textarea>\
                                            </div>\
                                        </div>\
                                        <button class="remove2 btn btn-danger btn-sm fa fa-trash"> Remove Review Row</button></div><hr>');
        });
        $('.optionBox2').on('click', '.remove2', function() {
            $(this).parent().remove();
        });

        // dynamic row for schema end


// Define function to open filemanager window
var lfm = function(options, cb) {
    var route_prefix = (options && options.prefix) ? options.prefix : '{{url('/filemanager')}}';
    window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
    window.SetUrl = function(url, path) {
        console.log("Received URL:", url); // Debugging
        cb(url); // Pass the url to the callback function
    };
};

// Define LFM summernote button
var LFMButton = function(context) {
    var ui = $.summernote.ui;
    var button = ui.button({
        contents: '<i class="note-icon-picture"></i> ',
        tooltip: 'Insert image with filemanager',
        click: function() {
            var altText = prompt("Please enter alt text for the image:", ""); // Prompt for alt text
            if (altText !== null) { // If user didn't cancel
                lfm({type: 'image', prefix: '{{url('/filemanager')}}'}, function(url) {
                    console.log("Received URL in callback:", url); // Debugging
                    var img = $('<img>').attr('src', url).attr('alt', altText); // Create img element with alt attribute
                    console.log("Created image element:", img); // Debugging
                    context.invoke('editor.insertNode', img[0]); // Insert the img element into the editor
                });
            }
        }
    });
    return button.render();
};

        // Define whatsapp  summernote button
        var whatsappButton = function(context) {
            var ui = $.summernote.ui;
            var button = ui.button({
                contents: '<i class="fa fa-whatsapp fa_icon"></i> ',
                tooltip: 'Add Whatsapp button',
                click: function() {

                    let WhatsappNumber;
                    let WhatsappText;
                    let whatsappetext = prompt("Enter Button Text:", " Chat With Us");
                    let whatsapp = prompt("Enter What's app Number:", "923330033235");

                    if (whatsapp == null || whatsapp == "") {
                        WhatsappNumber = "923330033235";
                    } else {
                        WhatsappNumber = whatsapp;
                    }

                    if (whatsappetext == null || whatsappetext == "") {
                        WhatsappText = " Chat With Us";
                    } else {
                        WhatsappText = whatsappetext;
                    }

                    var buttonText = '<span class="fa fa-whatsapp fa_icon" onclick="window.open(\'https://api.whatsapp.com/send?phone=' + WhatsappNumber + '\'), event_trigger_web(\'whatsapp_button\', \'' + whatsappetext + '\')" style="font-size: 18px;color: white;font-weight: bold; background: #3FC250; padding: 15px; border-radius: 10px; cursor: pointer;"> ' + WhatsappText + '</span>';
                    context.invoke('pasteHTML', buttonText);
                }
            });
            return button.render();
        };

        var apply = function(context) {
            var ui = $.summernote.ui;
            var button = ui.button({
                contents: '<i class="fa fa-arrow-right fa_icon"></i> ',
                tooltip: 'Add Apply button',
                click: function() {
                    var buttonText = '<button style="cursor: pointer;" class="btn btn-success apply_now_custom_form_button" data-toggle="modal" data-target="#apply_now_form"> Apply Now</button>';
                    context.invoke('pasteHTML', buttonText);

                }
            });
            return button.render();
        };
        var callButton = function(context) {
            var ui = $.summernote.ui;
            var button = ui.button({
                contents: '<i class="fa fa-phone fa_icon"></i> ',
                tooltip: 'Add Call button',
                click: function() {

                    let CallNumber;
                    let call = prompt("Enter Call Number:", "923243640038");
                    if (call == null || call == "") {
                        CallNumber = "923243640038";
                    } else {
                        CallNumber = call;
                    }
                    var buttonText = '<a class="fa fa-phone fa_icon" target="_blank" href="tel:' + CallNumber + '" style="font-size: 18px;color: white;font-weight: bold; background: #2c73c9; padding: 15px; border-radius: 10px; cursor: pointer;"> Call Us</a>';
                    context.invoke('pasteHTML', buttonText);
                }
            });
            return button.render();
        };

        // Initialize summernote with LFM button in the popover button group
        // Please note that you can add this button to any other button group you'd like
        $('.summernote').summernote({
            height: 240,
            minHeight: null,
            maxHeight: null,
            focus: false,
            toolbar: [
                ['popovers', ['lfm', 'whatsapp']],
                ['popovers', ['lfm', 'call']],
                ['popovers', ['lfm', 'apply']],
                ['style', ['style']],
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['misc', ['codeview']],
                ['table', ['table']],
                ['insert', ['link', 'unlink', 'picture', 'video', 'hr']]
            ],
            buttons: {
                lfm: LFMButton,
                whatsapp: whatsappButton,
                call: callButton,
                apply: apply
            }
        })
        $(".select2").select2();
    });

    // document.querySelector('.note-editor .link-dialog .checkbox input').checked = true;
</script>

@endsection