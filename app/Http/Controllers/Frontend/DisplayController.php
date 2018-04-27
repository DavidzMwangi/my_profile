<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Detail;
use App\Models\Gallery;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class DisplayController extends Controller
{
    public function index()
    {
        $profile=Detail::all()->first();
        $random1=Gallery::all()->random();
        $random2=Gallery::all()->random();
        $random3=Gallery::all()->random();

        //display all the projects
        $data3=Project::all();
        return View::make('frontend.index')->with('profile',$profile)
                                            ->with('random1',$random1)
                                            ->with('random2',$random2)
                                            ->with('random3',$random3)
                                            ->with('projects',$data3);
    }
}
