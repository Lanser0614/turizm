<?php

namespace App\Http\Controllers;

use App\Models\SiteDetail;
use Illuminate\Http\Request;

class SiteDetailController extends Controller
{
    public function storeDSetail(Request $request){
        $siteDetail = new SiteDetail();
        $siteDetail->mail=$request->mail;
        $siteDetail->phone_number=$request->phone_number;
        $siteDetail->addres=$request->addres;
        $siteDetail->instagram_link=$request->instagram_link;
        $siteDetail->telegram_link=$request->telegram_link;
        $siteDetail->whatsapp_link=$request->whatsapp_link;
        $siteDetail->fasebook_link=$request->fasebook_link;
        $siteDetail->google_link=$request->google_link;

        $siteDetail->save();

        return back();
    }

    public function showDetail(Request $request){
        $siteDetail = SiteDetail::find($request->id);
        return view('Admin.site_detail_edit', compact('siteDetail'));
    }

    public function updateDSetail(Request $request){
        $siteDetail = SiteDetail::find($request->id);
        $siteDetail->mail=$request->mail;
        $siteDetail->phone_number=$request->phone_number;
        $siteDetail->addres=$request->addres;
        $siteDetail->instagram_link=$request->instagram_link;
        $siteDetail->telegram_link=$request->telegram_link;
        $siteDetail->whatsapp_link=$request->whatsapp_link;
        $siteDetail->fasebook_link=$request->fasebook_link;
        $siteDetail->google_link=$request->google_link;

        $siteDetail->save();

        return back();
    }

    public function destroyDSetail(Request $request){
        $siteDetail = SiteDetail::find($request->id);
        $siteDetail->delete();
    
        return back();
    }

    public function putDetail(){
        
        // dd($siteDetail);
        // return view('layouts.top-header', compact('siteDetail'));

    }
}
