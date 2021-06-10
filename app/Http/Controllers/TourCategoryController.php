<?php

namespace App\Http\Controllers;

use App\Models\SiteDetail;
use App\Models\Tour;
use App\Models\TourCategory;
use Illuminate\Http\Request;

class TourCategoryController extends Controller
{


    public function index() {
        $tourCategory = TourCategory::all();
        $tour = Tour::all();
        $siteDetail = SiteDetail::find(1)->get();
        return view('welcome', compact('tourCategory', 'tour', 'siteDetail'));
    }


    public function tour_list() {
        $tourCategory = TourCategory::all();
        $siteDetail = SiteDetail::find(1)->get();
        return view('tour-list', compact('tourCategory', 'siteDetail'));
    }

    public function tour_single_list() {
        $tour = Tour::where('category_id', '=', '1')->get();
        $siteDetail = SiteDetail::find(1)->get();
        return view('tour-single-list', compact('tour','siteDetail'));
    }

    public function tour_single_list_two() {
        
        $tour = Tour::where('category_id', '=', '2')->get();
        $siteDetail = SiteDetail::find(1)->get();
        return view('tour-single-list-two', compact('tour','siteDetail'));
    }

    

    public function tour(Request $request) {
        $tour = Tour::find($request->id);
        $tours = Tour::all();
        $siteDetail = SiteDetail::find(1)->get();
        return view('tour', compact('tour', 'tours', 'siteDetail'));
    }

    public function about(){
        $siteDetail = SiteDetail::find(1)->get();
        return view('about', compact('siteDetail'));
    }

    public function contact(){
        $siteDetail = SiteDetail::find(1)->get();
        return view('contact', compact('siteDetail'));
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
        $tourCategory->categorias_url=$request->categorias_url;
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
        $tourCategory->categorias_url=$request->categorias_url;

        if($imageName){
            unlink(public_path('files').'/'.$tourCategory->image_name);
            $tourCategory->image_name=$imageName;
        }


        $tourCategory->save();

        return back();
    }




    public function destroy(Request $request){
        $tourCategory = TourCategory::find($request->id);
        unlink(\public_path('files').'/'.$tourCategory->image_name);
        $tourCategory->delete();
        return back();
    }




}
