@extends('layouts.backend.main')
@section('style')
    <link href="{{asset('backend/template/vendors/jasny-bootstrap/css/jasny-bootstrap.css')}}" rel="stylesheet" />

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
            <!--md-12 ends-->
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
                        <form role="form" method="post" action="{{url('backend/save_new_project')}}">
                            {{csrf_field()}}
                            <div class="col-md-12">
                                <div class="col-md-6">
                            <div class="form-group">
                                <label for="project_name">Project Name</label>
                                <input class="form-control" id="project_name" name="project_name" placeholder="Project Name" required>
                            </div>
                            <div class="form-group">
                                <label for="start_date">Start Date</label>
                                <input name="start_date" id="start_date"  type="date" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="end_date">End Date</label>
                                <input name="end_date" type="date" id="end_date" class="form-control" required>
                            </div>


                                </div>
                                <div class="col-md-6">
                            <div class="form-group">
                                <label for="client_name">Client Name</label>
                                <input name="client_name" id="client_name" class="form-control"  placeholder="Client Name" required>
                            </div>
                            <div class="form-group">
                                <label for="organisation_name">Organisation Name</label>
                                <input name="organisation_name" id="organisation_name" class="form-control" placeholder="Organisation Name" required>
                            </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-responsive btn-success pull-right">Submit Button</button>
                            <button type="reset" class="btn btn-responsive btn-danger pull-left">Reset Button</button>




                            {{--<div class="form-group">--}}
                                {{--<label>Text Input with Placeholder</label>--}}
                                {{--<input class="form-control" placeholder="Enter text"></div>--}}
                            {{--<div class="form-group">--}}
                                {{--<label>Static Control</label>--}}
                                {{--<p class="form-control-static">email@example.com</p>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                                {{--<label>Text area</label>--}}
                                {{--<textarea class="form-control" rows="3"></textarea>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                                {{--<label>Checkboxes</label>--}}
                                {{--<div class="checkbox">--}}
                                    {{--<label>--}}
                                        {{--<input type="checkbox" value="">Checkbox 1</label>--}}
                                {{--</div>--}}
                                {{--<div class="checkbox">--}}
                                    {{--<label>--}}
                                        {{--<input type="checkbox" value="">Checkbox 2</label>--}}
                                {{--</div>--}}
                                {{--<div class="checkbox">--}}
                                    {{--<label>--}}
                                        {{--<input type="checkbox" value="">Checkbox 3</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                                {{--<label>Inline Checkboxes</label>--}}
                                {{--<label class="checkbox-inline">--}}
                                    {{--<input type="checkbox">1</label>--}}
                                {{--<label class="checkbox-inline">--}}
                                    {{--<input type="checkbox">2</label>--}}
                                {{--<label class="checkbox-inline">--}}
                                    {{--<input type="checkbox">3</label>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                                {{--<label>Radio Buttons</label>--}}
                                {{--<div class="radio">--}}
                                    {{--<label>--}}
                                        {{--<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Radio 1</label>--}}
                                {{--</div>--}}
                                {{--<div class="radio">--}}
                                    {{--<label>--}}
                                        {{--<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Radio 2</label>--}}
                                {{--</div>--}}
                                {{--<div class="radio">--}}
                                    {{--<label>--}}
                                        {{--<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Radio 3</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                                {{--<label>Inline Radio Buttons</label>--}}
                                {{--<label class="radio-inline">--}}
                                    {{--<input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>1</label>--}}
                                {{--<label class="radio-inline">--}}
                                    {{--<input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">2</label>--}}
                                {{--<label class="radio-inline">--}}
                                    {{--<input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3">3</label>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                                {{--<label>Selects</label>--}}
                                {{--<select class="form-control">--}}
                                    {{--<option>1</option>--}}
                                    {{--<option>2</option>--}}
                                    {{--<option>3</option>--}}
                                    {{--<option>4</option>--}}
                                    {{--<option>5</option>--}}
                                {{--</select>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                                {{--<label>Multiple Selects</label>--}}
                                {{--<select multiple class="form-control">--}}
                                    {{--<option>1</option>--}}
                                    {{--<option>2</option>--}}
                                    {{--<option>3</option>--}}
                                    {{--<option>4</option>--}}
                                    {{--<option>5</option>--}}
                                {{--</select>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                                {{--<div class="fileinput fileinput-new" data-provides="fileinput">--}}
                                    {{--<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">--}}
                                        {{--<img data-src="holder.js/100%x100%" alt="..."></div>--}}
                                    {{--<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>--}}
                                    {{--<div>--}}
                                                {{--<span class="btn btn-default btn-file">--}}
                                                    {{--<span class="fileinput-new">Select image</span>--}}
                                                    {{--<span class="fileinput-exists">Change</span>--}}
                                                    {{--<input type="file" name="..."></span>--}}
                                        {{--<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<button type="submit" class="btn btn-responsive btn-default">Submit Button</button>--}}
                            {{--<button type="reset" class="btn btn-responsive btn-default">Reset Button</button>--}}
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