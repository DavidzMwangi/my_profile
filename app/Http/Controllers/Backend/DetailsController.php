<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\MessageBag;

class DetailsController extends Controller
{
    public function index()
    {
        $details=Detail::all()->first();
        return View::make('backend.details.details')->with('details',$details);
    }

    public function saveDetails(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'first_name'=>'required',
            'email'=>'required',
            'DOB'=>'required',
            'phone_number'=>'required',
            'country'=>'required',
        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id=$request->input('details_id');
        $data1=Detail::find($id);
        $data1->first_name=$request->input('first_name');
        $data1->middle_name=$request->input('middle_name');
        $data1->last_name=$request->input('last_name');
        $data1->email=$request->input('email');
        $data1->alternative_email=$request->input('alternative_email');
        $data1->DOB=$request->input('DOB');
        $data1->phone_number=$request->input('phone_number');
        $data1->alternative_phone_number=$request->input('alternative_phone_number');
        $data1->address=$request->input('address');
        $data1->postal_code=$request->input('postal_code');
        $data1->country=$request->input('country');
        $data1->short_description=$request->input('short_description');
        $data1->save();

        return redirect()->back();

    }

    public function displayProfile()
    {
        $detail=Detail::all()->first();
        return View::make('backend.profile.profile')->with('detail',$detail);
    }

    public function updateProfilePic(Request $request)
    {
        if($request->hasFile("new_profile_pic")){
            if ($request->file('new_profile_pic')->isValid()) {
                //save the picture in public folder
                $destpath=public_path() . "/uploads/profile/";
                $fileName=rand(111111,999999) . "." . $request->file('new_profile_pic')->getClientOriginalExtension();
                $request->file('new_profile_pic')->move($destpath, $fileName);

                //save the link to the database
               $profile=Detail::all()->first();
               $profile->profile_pic=$fileName;
               $profile->save();

                return redirect('backend/profile')->withErrors(new MessageBag(['Update'=>'The Picture has been updated']));
            }
        }
        else{


            return redirect()->back()->withErrors(new MessageBag(['problem'=>"The picture selected cannot be used as company profile"]));

        }
    }
}
