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
                        <form role="form" action="{{url('backend/save_details')}}" method="post">
                            {{csrf_field()}}
                            <input  name="details_id" type="hidden" value="{{$details->id}}">
                            <div class="col-md-12">
                            <div class="alert-danger">
{{--                                {{json_encode($errors->all())}}--}}
                                @if(count($errors->all())>0)
                                    @foreach($errors->all() as $error)
                                        {{$error}}<br>
                                    @endforeach
                                    @endif
                            </div>
                          <div class="col-md-6">
                              {{--first name--}}
                            <div class="form-group">
                                <label>First Name</label>
                                <input class="form-control" name="first_name" type="text" value="{{$details->first_name}}">

                            </div>

                             {{--middle name --}}
                              <div class="form-group">
                                  <label>Middle Name</label>
                                  <input class="form-control" name="middle_name" type="text" value="{{$details->middle_name}}">

                              </div>

                              {{--last name--}}
                              <div class="form-group">
                                  <label>Last Name</label>
                                  <input class="form-control" name="last_name" type="text" value="{{$details->last_name}}">

                              </div>

                              {{--email--}}
                              <div class="form-group">
                                  <label>Primary Email</label>
                                  <input class="form-control" type="email" name="email" value="{{$details->email}}">

                              </div>

                              {{--alternative email--}}
                              <div class="form-group">
                                  <label>Alternative Email</label>
                                  <input class="form-control" type="email" name="alternative_email" value="{{$details->alternative_email}}">

                              </div>
                               {{--DOB--}}
                              <div class="form-group">
                                  <label>DOB</label>
                                  <input class="form-control" type="date" name="DOB" value="{{$details->DOB}}">
                                    {{--{{$error}}--}}
                              </div>


                          </div>

                                {{--column 2--}}


                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label>Phone Number </label>
                                        <input class="form-control"  name="phone_number" value="{{$details->phone_number}}">

                                    </div>

                                    {{--alternative phone number--}}
                                    <div class="form-group">
                                        <label>Alternative Phone Number</label>
                                        <input class="form-control"  name="alternative_phone_number" value="{{$details->alternative_phone_number}}">

                                    </div>
                                {{--address--}}
                                    <div class="form-group">
                                        <label>Address </label>
                                        <input class="form-control" type="text" name="address" value="{{$details->address}}">

                                    </div>

                                    {{--postal code--}}
                                    <div class="form-group">
                                        <label>Postal Code</label>
                                        <input class="form-control" type="text" name="postal_code" value="{{$details->postal_code}}">

                                    </div>
                                    {{--country--}}
                                    <div class="form-group">
                                        <label for="country">Country </label>
                                        <input class="form-control" id="country" type="text" name="country" value="{{$details->country}}">

                                    </div>


                                    {{--short description--}}

                                    <div class="form-group">
                                        <label for="short_description">Short Description </label>
                                        <textarea id="short_description" name="short_description"  class="form-control" rows="3">{{$details->short_description}}</textarea>
                                    </div>

                            </div>

                                <button type="submit" class="btn btn-responsive btn-primary pull-left">Submit Button</button>
                                <button type="reset" class="btn btn-responsive btn-primary pull-right">Reset Button</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
        <!--main content ends--> </section>
    @endsection
@section('script')
    <script src="{{asset('backend/template/vendors/jasny-bootstrap/js/jasny-bootstrap.js')}}"></script>


    @endsection