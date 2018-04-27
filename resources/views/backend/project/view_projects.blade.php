@extends('layouts.backend.main')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('backend/template/vendors/datatables/css/dataTables.colReorder.min.css')}}" />
    {{--<link rel="stylesheet" type="text/css" href="vendors/datatables/css/dataTables.scroller.min.css" />--}}
    <link rel="stylesheet" type="text/css" href="{{asset('backend/template/vendors/datatables/css/dataTables.bootstrap.css')}}" />
    <link href="{{asset('backend/template/css/pages/tables.css')}}" rel="stylesheet" type="text/css">

@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!--section starts-->
        <h1>All Projects</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{url('backend/dashboard')}}">
                    <i class="livicon" data-name="home" data-size="18" data-loop="true"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#">View All Projects</a>
            </li>
            <li class="active">All Projects</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content">
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

                                <th>Project Name</th>
                                <th>Start Date</th>
                                        <th>End Date</th>
                                <th>Client Name</th>
                                <th>Organisation Name</th>
                                <th>Add Picture</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($projects as $project)
                            <tr>
                                <td>{{$project->project_name}}</td>
                                <td>{{$project->start_date}}</td>
                                <td>{{$project->end_date}}</td>
                                <td>{{$project->client_name}}</td>
                                <td>{{$project->organisation_name}}</td>
                                <td>{{$project->id}}</td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- row-->

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
    {{--<script type="text/javascript" src="vendors/datatables/dataTables.colReorder.min.js"></script>--}}
    {{--<script type="text/javascript" src="vendors/datatables/dataTables.scroller.min.js"></script>--}}
    <script type="text/javascript" src="{{asset('backend/template/vendors/datatables/dataTables.bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/template/js/pages/table-advanced.js')}}"></script>
    <script src="{{asset('backend/template/vendors/jasny-bootstrap/js/jasny-bootstrap.js')}}"></script>

@endsection