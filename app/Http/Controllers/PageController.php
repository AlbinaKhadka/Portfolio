<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function about() {
        // $pages = Page::all();
        // dd($pages);
        $page = Page::where('slug', 'about')->first();

        return view('about', compact('pages'));
    }
}
