<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    //
    function userLogin(Request $req) {
        $data = $req->input();
        $req->session()->put('user', $data['user']);
        // echo session('user');
        return redirect('profile');
    }
}
