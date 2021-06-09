<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\TourCategory;
use Illuminate\Http\Request;

class TourCategoryController extends Controller
{


    public function index() {
        return view('welcome');
    }


    public function tour_list() {
        $tourCategory = TourCategory::all();
        return view('tour-list', compact('tourCategory'));
    }

    public function tour_single_list() {
        $tour = Tour::where('category_id', '=', '1')->get();
        return view('tour-single-list', compact('tour'));
    }

    public function tour(Request $request) {
        $tour = Tour::find($request->id);
        return view('tour', compact('tour'));
    }





    public function storeTourCategory(Request $request){
       

        if($request->hasFile('image_name')){
            $image=$request->file('image_name');
        $imageName=time().'.'.$image->extension();
        $image->move(public_path('files'), $imageName);
        }
        $tourCategory = new TourCategory();
        $tourCategory->title=$request->title;
        $tourCategory->description=$request->description;
        $tourCategory->image_name=$imageName;

        $tourCategory->save();

        return back();
    }



    public function showCategory(Request $request){
        $tourCategory = TourCategory::find($request->id);
        return view('Admin.edit_category', compact('tourCategory'));
    }





    public function updateCategory(Request $request){

        $image=$request->file('image_name');
        $imageName='';
        if($image){
            $imageName=time().'.'.$image->extension();
            $image->move(public_path('files'), $imageName);
        }

      
        $tourCategory = TourCategory::find($request->id);
        $tourCategory->title=$request->title;
        $tourCategory->description=$request->description;

        if($imageName){
            unlink(public_path('files').'/'.$tourCategory->image_name);
            $tourCategory->image_name=$imageName;
        }


        $tourCategory->save();

        return back();
    }




    public function destroy(){
        
    }




}
