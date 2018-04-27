@extends('layouts.backend.main')
@section('style')
    <link href="{{asset('backend/template/vendors/jasny-bootstrap/css/jasny-bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/template/vendors/select2/select2.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('backend/template/vendors/select2/select2-bootstrap.css')}}" />
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
                        <form role="form" method="post" action="{{url('backend/save_project_pic')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="e1" class="control-label">
                                           Select the Project Name
                                        </label>
                                        <select id="e1" class="form-control select2" onchange="getProjectDetails(this.value)">
                                            <option selected disabled>Select the project name</option>

                                        @foreach($projects as $project)
                                                <option value="{{$project->id}}">{{$project->project_name}}</option>

                                            @endforeach
                                                {{--<option value="AK">Alaska</option>--}}
                                                {{--<option value="HI">Hawaii</option>--}}

                                        </select>
                                    </div>


                                        <div class="form-group" id="selected_picture">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div  id="picture_data" class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                    {{--<p id="for_picture">--}}
                                                    {{--<img data-src="holder.js/100%x100%" alt="...">--}}
                                                    {{--</p>--}}
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                                <div>
                                                    <input type="hidden" name="project_id_to_pic" id="project_id_to_pic">
                                                    <span class="btn btn-default btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="project_pic"></span>
                                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                </div>
                                            </div>
                                        </div>


                                </div>
                                <div class="col-md-6" id="project_details">

                                    <div class="form-group">
                                        <label for="client_name">Client Name</label>
                                        <input name="client_name" id="client_name" class="form-control"  readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="organisation_name">Organisation Name</label>
                                        <input name="organisation_name" id="organisation_name" class="form-control" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="start_date">Start Date</label>
                                        <input name="start_date" id="start_date"  class="form-control" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="end_date">End Date</label>
                                        <input name="end_date"  id="end_date" class="form-control" readonly>
                                    </div>


                                </div>

                            </div>
                            <button type="submit" class="btn btn-responsive btn-success pull-right">Submit </button>
                            <button type="reset" class="btn btn-responsive btn-danger pull-left">Reset </button>





                        </form>
                    </div>
                </div>
            </div>
            <!--md-6 ends-->

        </div>
        <!--main content ends--> </section>

@endsection
@section('script')
    <script type="application/javascript">
        $('#project_details').hide();
        $('#selected_picture').hide();
        function getProjectDetails(projectId) {
            //first display the hidden item with their details or pictures
            $('#project_details').show();
            $('#selected_picture').show();
            // get the project details using axios

            var url1='{{url('backend/get_project_details')}}';

            axios.post(url1,{'project_id':projectId})
                .then(function (result2) {
//                    alert("xdcfvgjbhjohg");
                    $('#client_name').val(result2.data.project_details.client_name);
                    $('#organisation_name').val(result2.data.project_details.organisation_name);
                    $('#start_date').val(result2.data.project_details.start_date);
                    $('#end_date').val(result2.data.project_details.end_date);
                    $('#project_id_to_pic').val(result2.data.project_details.id);

                    var pic_url=result2.data.project_details.picture_name;

                    if(result2.data.project_details.picture_name==null){
//                        alert('Empty')
                    }else{
//                        alert('Kuna kitu');
                        <!--$('#picture_data').attr("+ "<img + src="' + {{asset('uploads/project/' . '563462.jpg')}} + '" >+');-->
                    }
                });

        }
    </script>
    <script src="{{asset('backend/template/vendors/jasny-bootstrap/js/jasny-bootstrap.js')}}"></script>
    <script src="{{asset('backend/template/vendors/select2/select2.js')}}" type="text/javascript"></script>

    <script src="{{asset('backend/template/js/pages/formelements.js')}}" type="text/javascript"></script>
@endsection