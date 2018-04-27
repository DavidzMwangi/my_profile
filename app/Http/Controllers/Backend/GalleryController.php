<?php

namespace App\Http\Controllers\Backend;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\MessageBag;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries=Gallery::orderBy('created_at','desc')->get();
        return View::make('backend.gallery.gallery')->with('galleries',$galleries);
    }

    public function newGalleryPic(Request $request)
    {
        if($request->hasFile("gallery_pic")){
            if ($request->file('gallery_pic')->isValid()) {
                //save the picture in public folder
                $destpath=public_path() . "/uploads/gallery/";
                $fileName=rand(111111,999999) . "." . $request->file('gallery_pic')->getClientOriginalExtension();
                $request->file('gallery_pic')->move($destpath, $fileName);

                //save the link to the database
                $data=new Gallery();
                $data->image_name=$fileName;
               $data->location=$request->input('location');
               $data->short_description=$request->input('short_description');
               $data->date=$request->input('date');
               $data->save();

                return redirect('backend/gallery')->withErrors(new MessageBag(['Update'=>'The Picture has been updated']));
            }
        }
        else{


            return redirect()->back()->withErrors(new MessageBag(['problem'=>"The picture selected cannot be used as company profile"]));

        }


    }
}
