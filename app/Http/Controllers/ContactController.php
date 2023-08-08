<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function page(Request $request){
        $seo = DB::table('seoproperties')->where('pagename','=','contact')->first();

        return view('pages.contact',['seo'=>$seo]);

    }

    function contactRequest(Request $request){
        return DB::table('contacts')->insert($request->input());


    }
}
