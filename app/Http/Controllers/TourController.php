<?php

namespace App\Http\Controllers;

use App\Models\Tour;
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

    }
}
