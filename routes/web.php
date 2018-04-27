<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('tester',function (){
   return view('layouts.backend.main');
});
Route::group(['namespace'=>'Backend'],function(){
    //dashboard
    Route::get('/home', 'HomeController@index');

    Route::get('backend/dashboard','HomeController@index');

    //details routes
    Route::get('backend/details','DetailsController@index');
    Route::post('backend/save_details','DetailsController@saveDetails');
    Route::get('backend/profile','DetailsController@displayProfile');
    Route::post('backend/update_existing_profile_pic','DetailsController@updateProfilePic');

    //skills routes

    Route::get('backend/skills','SkillsController@index');
    Route::post('backend/new_skill','SkillsController@newSkill');

    //education routes
    Route::get('backend/education','EducationController@index');
    Route::post('backend/new_education','EducationController@newEducation');

    //gallery routes
    Route::get('backend/gallery','GalleryController@index');
    Route::post('backend/upload_gallery_pic','GalleryController@newGalleryPic');

    //project routes
    Route::get('backend/new_project','ProjectController@newProject');
    Route::get('backend/view_projects','ProjectController@viewProjects');
    Route::get('backend/add_project_pic','ProjectController@projectPicView');
    Route::post('backend/save_new_project','ProjectController@saveNewProject');
    Route::post('backend/get_project_details','ProjectController@getProjectDetails');
    Route::post('backend/save_project_pic','ProjectController@saveProjectPic');
});

Route::group(['namespace'=>'Frontend'],function (){
   //index route
    Route::get('frontend/index','DisplayController@index');
});
