@extends('layouts.backend.main')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('backend/template/vendors/datatables/css/dataTables.colReorder.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('backend/template/vendors/datatables/css/dataTables.scroller.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('backend/template/vendors/datatables/css/dataTables.bootstrap.css')}}" />
    <link href="{{asset('backend/template/css/pages/tables.css')}}" rel="stylesheet" type="text/css">
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

        {{--modal button section--}}
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
                        <div class="col-md-3">
                            <button class="form-control btn-primary" data-toggle="modal" data-target="#new_education_modal">New Education</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary filterable">
                    <div class="panel-heading clearfix  ">
                        <div class="panel-title pull-left">
                            <div class="caption">
                                <i class="livicon" data-name="camera-alt" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                TableTools
                            </div>

                        </div>
                        <div class="tools pull-right"></div>

                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-responsive" id="table1">
                            <thead>
                            <tr>

                                <th>Education Level Name</th>
                                <th>Education Level </th>
                                <th>Starting Year</th>
                                <th>Ending Year</th>
                                <th>Grade Attained</th>
                                <th>Institution of Learning</th>
                                <th>Education Type</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($educations as $education)

                                <tr>
                                    <td>{{$education->education_level_name}}</td>
                                    <td>{{$education->education_level}}</td>
                                    <td>{{$education->starting_date}}</td>
                                    <td>{{$education->ending_date}}</td>
                                    <td>{{$education->grade_attained}}</td>
                                    <td>{{$education->institution_of_learning}}</td>
                                    <td>{{$education->education_type}}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- row-->
        <!-- row-->

        <!-- Third Basic Table Ends Here-->

        {{--new skill modal--}}
        <div class="modal fade in" id="new_education_modal" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form action="{{url('backend/new_education')}}" method="post">
                        {{csrf_field()}}
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">New Education</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <p>
                                        <label for="education_level_name">Education Level Name</label>
                                        <input id="education_level_name" name="education_level_name" type="text" placeholder="Enter Education Level Name" class="form-control" required>
                                    </p>
                                    <p>
                                        <label for="education_level">Education Level </label>
                                        <select name="education_level" id="education_level" class="form-control">
                                            <option disabled selected>Select the Education Level</option>
                                            <option value="nursery">Nursery</option>
                                            <option value="primary">Primary</option>
                                            <option value="secondary">Secondary</option>
                                            <option value="certificate">Certificate</option>
                                            <option value="diploma">Diploma</option>
                                            <option value="degree">Degree</option>
                                            <option value="masters">Masters</option>
                                            <option value="phd">PHD</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </p>
                                    <p>
                                        <label for="grade_attained">Grade Attained </label>

                                        <input id="grade_attained" name="grade_attained" type="text" placeholder="Enter Grade Attained" class="form-control" required>
                                    </p>
                                    <p>
                                        <label for="education_type">Education Type </label>
                                        <select class="form-control" id="education_type" name="education_type">
                                            <option disabled selected>Select education Type</option>
                                            <option value="scholarship">Scholarship</option>
                                            <option value="self_sponsorship">Self-Sponsorship</option>
                                        </select>
                                    </p>

                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <label for="starting_year">Starting Year</label>

                                        <input id="starting_year" name="starting_year" type="date" placeholder="Starting Year" class="form-control" required>
                                    </p>
                                    <p>
                                        <label for="ending_year">Ending Year</label>

                                        <input id="ending_year" name="ending_year" type="date" placeholder="Ending Year" class="form-control">
                                    </p>
                                    <p>
                                        <label for="institution_of_learning">Institution of Learning</label>
                                        <input id="institution_of_learning" name="institution_of_learning" type="text" placeholder="Enter the Institution of Learning" class="form-control">
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <button type="button" data-dismiss="modal" class="btn btn-danger pull-left">Close</button>
                                </div>
                                <div class="col-md-4">
                                    <button type="reset"  class="btn btn-primary pull-left">Reset</button>
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-success">Save New Skill</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--delete modal starts here-->
        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title custom_align" id="Heading">
                            Delete this entry
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-warning">
                            <span class="glyphicon glyphicon-warning-sign"></span>
                            Are you sure you want to delete this Record?
                        </div>
                    </div>
                    <div class="modal-footer ">
                        <button type="button" class="btn btn-warning">
                            <span class="glyphicon glyphicon-ok-sign"></span>
                            Yes
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class="glyphicon glyphicon-remove"></span>
                            No
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal ends here -->
    </section>

@endsection
@section('script')

    <script type="text/javascript" src="{{asset('backend/template/vendors/datatables/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/template/vendors/datatables/dataTables.tableTools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/template/vendors/datatables/dataTables.colReorder.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/template/vendors/datatables/dataTables.scroller.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/template/vendors/datatables/dataTables.bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/template/js/pages/table-advanced.js')}}"></script>
@endsection