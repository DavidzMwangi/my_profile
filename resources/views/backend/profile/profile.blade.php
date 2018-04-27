@extends('layouts.backend.main')
@section('style')
    <link href="{{asset('backend/template/vendors/jasny-bootstrap/css/jasny-bootstrap.css')}}" rel="stylesheet" />

    <link href="{{asset('backend/template/vendors/timepicker/css/bootstrap-timepicker.min.css')}}" rel="stylesheet" />

    <link href="{{asset('backend/template/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" media="screen" />

@endsection
@section('content')
    <section class="content-header">
        <!--section starts-->
        <h1>Form Examples</h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#">Forms</a>
            </li>
            <li class="active">Form Examples</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content">
        <!--main content-->
        <div class="row">
            <!--row starts-->
            <!--md-6 ends-->
            <div class="col-md-6">
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
                        <form role="form" action="{{url('backend/update_existing_profile_pic')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                            <div class="form-group">
                                <div class="fileinput fileinput-new" data-provides="fileinput">

                                    @if($errors->has('Update'))
                                        <div class="alert-success" >
                                            {{$errors->first('Update')}}
                                        </div>
                                    @endif
                                    @if($errors->has('problem'))
                                        <div class="alert-danger">
                                            {{$errors->first('problem')}}
                                        </div>
                                    @endif


                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="{{asset('uploads/profile/' . $detail->profile_pic)}}" alt="..."></div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                    <div>
                                                <span class="btn btn-primary btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="new_profile_pic" required></span>
                                        <a href="#" class="btn btn-primary fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-responsive btn-primary">Submit </button>
                            <button type="reset" class="btn btn-responsive btn-primary">Reset </button>
                        </form>
                    </div>
                </div>
            </div>







            <div class="col-md-6">
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
                        <form role="form">

                            <div class="form-group">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="width: 300px; height: 250px;">
                                        <img src="{{asset('uploads/profile/' . $detail->profile_pic)}}" alt="..."></div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 300px; max-height: 250px;"></div>

                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!--md-6 ends-->

        </div>
        <!--main content ends--> </section>
@endsection
@section('script')
    <script src="{{asset('backend/template/vendors/jasny-bootstrap/js/jasny-bootstrap.js')}}"></script>


@endsection