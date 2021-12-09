<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ViewController extends Controller
{
    //
    public function loadView($name) {
        return view("viewController", ['name'=>$name]);
    }

    public function fluentString() {
        $data = "hi let's learn laravel";
        // $data = Str::ucfirst($data);
        // $data = Str::replaceFirst('Hi', 'Hello', $data);
        // $data = Str::camel($data);

        $data = Str::of($data)
              ->ucfirst($data)
              ->replaceFirst('Hi', 'Hello', $data)
              ->camel($data);


        return $data;
    }
}
