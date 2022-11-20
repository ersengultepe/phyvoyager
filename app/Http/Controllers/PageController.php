<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class PageController extends Controller
{
     public function viewPage($slug){
         $page = Page::active()->where('slug', $slug)->first();
         return view('frontend.pages.basepage', compact('page'));
     }
}
