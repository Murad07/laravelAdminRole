<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $posts = Post::all();
        $pages = Page::all();

        if(Auth::user()->hasRole('superadministrator')){
            return view('dashboard');
        }elseif(Auth::user()->hasRole('pageadmin')){
            return view('page_admin', ['pages'=>$pages]);
        }elseif(Auth::user()->hasRole('postadmin')){
            return view('post_admin', ['posts'=>$posts]);
        }
    }
}
