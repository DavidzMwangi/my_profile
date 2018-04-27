<?php

namespace App\Http\Controllers\Backend;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;
use Illuminate\Support\MessageBag;

class ProjectController extends Controller
{
    public function newProject()
    {
        return View::make('backend.project.add_project');
    }

    public function viewProjects()
    {
        $projects=Project::latest()->get();
       return View::make('backend.project.view_projects')->with('projects',$projects);
    }

    //save new project
    public function saveNewProject(Request $request)
    {
        $data1=new Project();
        $data1->project_name=$request->input('project_name');
        $data1->start_date=$request->input('start_date');
        $data1->end_date=$request->input('end_date');
        $data1->picture_name=$request->input('picture_name');
        $data1->client_name=$request->input('client_name');
        $data1->organisation_name=$request->input('organisation_name');
        $data1->save();

        return redirect('backend/view_projects');
    }

    public function projectPicView()
    {
        //get the project names to display them in the select 2
        $projects=Project::all();
        return View::make('backend.project.add_pic')->with('projects',$projects);
    }

    public function getProjectDetails(Request $request)
    {
        $projectId=$request->input('project_id');

        $project=Project::find($projectId);

        return Response::json([
            'result2'=>$request->all(),
            'project_details'=>$project,
        ]);

    }

    public function saveProjectPic(Request $request)
    {
        $projectId=$request->input('project_id_to_pic');

        if($request->hasFile("project_pic")){
            if ($request->file('project_pic')->isValid()) {
                //save the picture in public folder
                $destpath=public_path() . "/uploads/project/";
                $fileName=rand(111111,999999) . "." . $request->file('project_pic')->getClientOriginalExtension();
                $request->file('project_pic')->move($destpath, $fileName);

                //save the link to the database
                $project=Project::find($projectId);
                $project->picture_name=$fileName;
                $project->save();
                return redirect('backend/add_project_pic')->withErrors(new MessageBag(['Update'=>'The Picture has been updated']));
            }
        }
        else{


            return redirect()->back()->withErrors(new MessageBag(['problem'=>"The picture selected cannot be used as company profile"]));

        }
    }
}
