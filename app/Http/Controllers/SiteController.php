<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function about()
    {
        return view('front.about');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function courses()
    {
        return view('front.courses');
    }

    public function attends(Request $request)
    {
        DB::table('attends')
             ->insert(array(
                 'name' => $request->name,
                 'phone' => $request->phone,
                 'message' => $request->message,
         ));

          return back()->with('success','Xabaringiz yuborildi');
    }

    public function artisan($name)
    {
        \Artisan::call($name);

        return "OK";
    }
}
