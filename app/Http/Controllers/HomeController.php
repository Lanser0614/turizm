<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Feedback;
use App\Models\SiteDetail;
use App\Models\Tour;
use App\Models\TourCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $feedback = Feedback::all();
        $contact = Contact::all();
        return view('Admin.home', compact('feedback', 'contact'));
    }


    public function addCategory(){
        $category = TourCategory::all();
        return view('Admin.add', compact('category'));
    }

    public function addTour(){
        $tourCategory = TourCategory::all();
        $tour = Tour::all();
        return view('Admin.add_tour', compact('tourCategory', 'tour'));
    }


    public function siteDetail(){
        $siteDetail = SiteDetail::all();
        return view('Admin.site_detail', compact('siteDetail'));
    }

    

}
