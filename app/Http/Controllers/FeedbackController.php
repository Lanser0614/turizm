<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request){
        $feedback = new Feedback();
        $feedback->destenation=$request->destenation;
        $feedback->date=$request->date;
        $feedback->Phone_number=$request->Phone_number;
        $feedback->save();
        return back();

    }
}
