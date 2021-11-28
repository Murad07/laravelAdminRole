<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        if(Auth::user()->hasRole('superadministrator')){
            return view('dashboard');
        }elseif(Auth::user()->hasRole('pageadmin')){
            return view('page_admin');
        }elseif(Auth::user()->hasRole('postadmin')){
            return view('post_admin');
        }
    }
}
