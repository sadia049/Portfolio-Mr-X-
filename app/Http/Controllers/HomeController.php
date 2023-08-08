<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function page(Request $request){
        $seo = DB::table('seoproperties')->where('pagename','=','home')->first();

        return view('pages.home',['seo'=>$seo]);

    }

    function heroData(Request $request){

        return DB::table('heroproperties')->first();

    }

    function aboutData(Request $request){
        return DB::table('abouts')->first();
        
    }

    function socialData(Request $request){
        return DB::table('socials')->first();
        
    }
}
