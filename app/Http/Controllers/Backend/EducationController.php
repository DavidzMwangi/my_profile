<?php

namespace App\Http\Controllers\Backend;

use App\Models\Education;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class EducationController extends Controller
{
    public function index()
    {
        $educations=Education::all();
        return View::make('backend.education.education')->with('educations',$educations);
    }

    public function newEducation(Request $request)
    {
        $data1=new Education();
        $data1->education_level_name=$request->input('education_level_name');
        $data1->education_level=$request->input('education_level');
        $data1->grade_attained=$request->input('grade_attained');
        $data1->institution_of_learning=$request->input('institution_of_learning');
        $data1->education_type=$request->input('education_type');
        $data1->starting_date=$request->input('starting_year');
        $data1->ending_date=$request->input('ending_year');
        $data1->save();

        return redirect()->back();
    }
}
