<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    function list() {
        // return 'hello';

        // Way one to get data from second database
        // return DB::connection('mysql2')->table('posts')->get();

        // Second way to get data from second database
        return Post::all();
    }
}
