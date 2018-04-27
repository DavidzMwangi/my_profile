@extends('layouts.backend.main')
@section('style')
    <link href="{{asset('backend/template/vendors/gallery/animated-masonry-gallery.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('backend/template/vendors/gallery/basic/source/jquery.fancybox.css')}}?v=2.1.5" media="screen" />

    {{--picture upload css--}}
    <link href="{{asset('backend/template/vendors/jasny-bootstrap/css/jasny-bootstrap.css')}}" rel="stylesheet" />

@endsection
@section('content')
    <section class="content-header">
        <h1>Masonry Gallery</h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#">Gallery</a>
            </li>
            <li class="active">Masonry Gallery</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-success filterable" style="overflow:auto;">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            New
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <!--md-6 starts-->
                            <!--form control starts-->
                            <div class="panel panel-success" id="hidepanel6">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <i class="livicon" data-name="share" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                        Form controls
                                    </h3>
                                    <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                </span>
                                </div>

                                <div class="panel-body">
                                    <form role="form" method="post" action="{{url('backend/upload_gallery_pic')}}" enctype="multipart/form-data">
                                        {{csrf_field()}}

                                        {{--@if($errors->has('Update'))--}}
                                            {{--<div class="alert-success" id="successful_saving">--}}
                                                {{--{{$errors->first('Update')}}--}}

                                            {{--</div>--}}
                                        {{--@endif--}}

                                        @if($errors->has('problem'))
                                            <div class="alert-danger"  id="error_on_saving">
                                                {{$errors->first('problem')}}

                                            </div>
                                        @endif


                                        <div class="col-md-6">

                                            <div class="form-group ">
                                            <label for="short_description">Short Description</label>
                                            <input id="short_description" type="text" name="short_description" placeholder="Short Description" class="form-control">
                                        </div>
                                            <div class="form-group ">
                                                <label for="location">Location</label>
                                                <input id="location" name="location" type="text" placeholder="Location" class="form-control">
                                            </div>
                                            <div class="form-group ">
                                                <label for="date">Date</label>
                                                <input id="date" name="date" type="date" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                    <img src="holder.js/100%x100%" alt="..."></div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                                <div>
                                                <span class="btn btn-default btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="gallery_pic"></span>
                                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                        <button type="reset" class="btn btn-responsive btn-primary pull-left">Reset Button</button>
                                        <button type="submit" class="btn btn-responsive btn-success pull-left">Submit Button</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <div class="content gallery">
            <div class="row" id="slim">
                <div id="gallery">
                    <div class="col-md-5 col-xs-12" id="gallery-header-center-left-title">All Galleries</div>
                    <marquee><b>All the Pictures in the gallery</b></marquee>
                    <div class="pull-right">
                        <div class="col-xs-12">
                            <button type="button" id="filter-all" class="btn btn-responsive btn-info btn-xs">All</button>
                            <button type="button" id="filter-studio" class="btn btn-responsive btn-primary btn-xs">Studio</button>
                            {{--<button type="button" id="filter-landscape" class="btn btn-responsive btn-success btn-xs">Landscape</button>--}}
                        </div>
                    </div>
                    <div id="gallery-content">
                        <div class="row" id="gallery-content-center">
                            @foreach($galleries as $gallery)
                            <a class="fancybox img-responsive" href="{{asset('uploads/gallery/' . $gallery->image_name)}}" data-fancybox-group="gallery" title="Date: {{$gallery->date}}  &#13; &#10; Location: {{$gallery->location}} <br> Short Description: {{$gallery->short_description}}">
                                <img src="{{asset('uploads/gallery/' . $gallery->image_name)}}" class="img-responsive all studio" alt="gallery">
                            </a>
                            @endforeach
                            {{--<a class="fancybox img-responsive" href="img/img_holder/400-x-699-green.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">--}}
                                {{--<img data-src="holder.js/288x385/#00bc8c:#fff" class="img-responsive all landscape" alt="gallery">--}}
                            {{--</a>--}}
                        </div>
                    </div>
                    <!-- .images-box -->
                </div>
            </div>
        </div>

        {{--modal to display success of upload of pic--}}
        <div class="modal fade" id="successful_modal" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title custom_align" id="Heading">
                            Successful
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-success">
                            {{$errors->first('Update')}}
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
    @endsection
@section('script')
    @if($errors->has('Update'))
    <script type="application/javascript">
        $('#successful_modal').modal('show');
        setTimeout(function () {
            $('#successful_modal').hide()
        },5000);
    </script>
    @endif
    {{--picture upload js--}}
    <script src="{{asset('backend/template/vendors/jasny-bootstrap/js/jasny-bootstrap.js')}}"></script>


    <script type="text/javascript" src="{{asset('backend/template/vendors/gallery/jquery.isotope.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/template/vendors/gallery/animated-masonry-gallery.js')}}"></script>
    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="{{asset('backend/template/vendors/gallery/basic/source/jquery.fancybox.pack.js')}}?v=2.1.5"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.fancybox').fancybox();
        });
    </script>


    @endsection