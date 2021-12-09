<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function getData(Request $req) {

        $req->validate([
            'username'=>'required',
            'userpassword'=>'required',

        ]);

        return $req->input();
    }

    // data from database and pass through api
    function list() {
        // return 'list';
        return Customer::all();
    }
}
