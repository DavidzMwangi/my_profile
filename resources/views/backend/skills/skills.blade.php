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
                           New Skill
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-3">
                    <button class="form-control btn-primary" data-toggle="modal" data-target="#new_skill_modal">New Skill</button>
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

                                <th>Skill Name</th>
                                <th>Starting Year</th>
                                <th>Ending Year</th>
                                <th>Working Place</th>
                                <th>Skills Gained</th>
                                <th>Description</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($skills as $skill)

                                <tr>
                                <td>{{$skill->skill_name}}</td>
                                <td>{{$skill->starting_year}}</td>
                                {{--<td>{{$skill->ending_year}}</td>--}}
                                <td>@if($skill->ending_year==null)
                                    Continuing
                                        @else
                                    {{$skill->ending_year}}
                                        @endif
                                </td>
                                <td>{{$skill->working_place}}</td>
                                <td>{{$skill->skills_gained}}</td>
                                <td>{{$skill->description}}</td>
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
        <div class="modal fade in" id="new_skill_modal" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form action="{{url('backend/new_skill')}}" method="post">
                        {{csrf_field()}}
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">New Skill</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p>
                                    <label for="skill_name">Skill Name</label>
                                    <input id="skill_name" name="skill_name" type="text" placeholder="Enter Skill Name" class="form-control" required>
                                </p>
                                <p>
                                    <label for="skill_description">Skill Description</label>

                                    <input id="skill_description" name="skill_description" type="text" placeholder="Enter a Brief Description of the Skill" class="form-control" required>
                                </p>
                                <p>
                                    <label for="working_place">Working Place</label>

                                    <input id="working_place" name="working_place" type="text" placeholder="Enter the Working Place" class="form-control" required>
                                </p>

                            </div>
                            <div class="col-md-6">
                                <p>
                                    <label for="starting_year">Starting Year</label>

                                    <input id="starting_year" name="starting_year" type="number" placeholder="Starting Year" class="form-control" required>
                                </p>
                                <p>
                                    <label for="ending_year">Ending Year</label>

                                    <input id="ending_year" name="ending_year" type="number" placeholder="Ending Year" class="form-control">
                                </p>
                                <p>
                                    <label for="skills_gained">Skill Gained</label>

                                    <textarea class="form-control" name="skills_gained" id="skills_gained" placeholder="Enter the Skills Gained" required></textarea>
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