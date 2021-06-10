<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function test(){
        return view('test.test');
    }

    public function testStore(Request $request){
      
      
        $test = new Test();
       $test->test=$request->test;

       $test->save();
       return back();
    }

    public function total(){
        $users = DB::table('tests')->limit(5)->get();
        return $users;
    }
}
