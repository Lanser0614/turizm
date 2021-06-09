<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\TourCategory;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function storeTour(Request $request){
   

        if($request->hasFile('img')){
            $image=$request->file('img');
        $imageName=time().'.'.$image->extension();
        $image->move(public_path('files'), $imageName);
        }


        $tour = new Tour();
        $tour->title=$request->title;
        $tour->how_many_days=$request->how_many_days;
        $tour->hotel_name=$request->hotel_name;
        $tour->what_is_have=$request->what_is_have;
        $tour->price=$request->price;
        $tour->description=$request->description;
        $tour->program_for_tour=$request->program_for_tour;
        $tour->what_is_included=$request->what_is_included;
        $tour->category_id = $request->category_id;
        $tour->img=$imageName;

        $tour->save();


        return back();
    }



    public function updateTour(Request $request){
        $tour = Tour::find($request->id);
        $tourCategory = TourCategory::all();
        return view('Admin.edit_tour', compact('tour', 'tourCategory'));
    }

    public function update(Request $request){

        $image=$request->file('img');
        $imageName='';
        if($image){
            $imageName=time().'.'.$image->extension();
            $image->move(public_path('files'), $imageName);
        }

        $tour = Tour::find($request->id);
        $tour->title=$request->title;
        $tour->how_many_days=$request->how_many_days;
        $tour->hotel_name=$request->hotel_name;
        $tour->what_is_have=$request->what_is_have;
        $tour->price=$request->price;
        $tour->description=$request->description;
        $tour->program_for_tour=$request->program_for_tour;
        $tour->what_is_included=$request->what_is_included;
        $tour->category_id = $request->category_id;
        if($imageName){
            unlink(public_path('files').'/'.$tour->img);
            $tour->img=$imageName;
        }

        $tour->save();

        return redirect('/addTour');
    }


    public function destroy(Request $request){
        $tour = Tour::find($request->id);
        unlink(\public_path('files').'/'.$tour->img);
        $tour->delete();
        return back();
    }

}
