<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    function page(Request $request){
        $seo = DB::table('seoproperties')->where('pagename','=','projets')->first();
        return view('pages.project',['seo'=>$seo]);

    }

    function projectData(Request $request){

         return DB::table('projects')->get();

    }
}
