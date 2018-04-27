<?php

namespace App\Http\Controllers\Backend;

use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class SkillsController extends Controller
{
    public function index()
    {
        $skills=Skill::all();
        return View::make('backend.skills.skills')->with('skills',$skills);
    }

    public function newSkill(Request $request)
    {
        $data1=new Skill();
        $data1->skill_name=$request->input('skill_name');
        $data1->description=$request->input('skill_description');
        $data1->starting_year=$request->input('starting_year');
        $data1->ending_year=$request->input('ending_year');
        $data1->working_place=$request->input('working_place');
        $data1->skills_gained=$request->input('skills_gained');
        $data1->save();
        return redirect()->back();
    }
}
