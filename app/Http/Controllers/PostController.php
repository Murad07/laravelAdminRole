<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function showData($id) {
        $data = Post::find($id);
        return view('editpost', ['data'=>$data]);
    }

    function update(Request $req) {
        $data = Post::find($req->id);
        $data->title = $req->title;
        $data->description = $req->description;
        $data->save();
        return redirect('dashboard');
    }
}
