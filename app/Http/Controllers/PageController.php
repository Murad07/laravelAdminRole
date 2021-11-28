<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function showData($id) {
        $data = Page::find($id);
        // return view('editpage', compact(['data'=>$data]));
        return view('editpage', compact('data'));
    }

    function update(Request $req) {
        $data = Page::find($req->id);
        $data->title = $req->title;
        $data->subtitle = $req->subtitle;
        $data->description = $req->description;
        $data->save();
        return redirect('dashboard');
    }
}
