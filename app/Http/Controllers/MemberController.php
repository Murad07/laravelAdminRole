<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    //
    function show() {
        $data = Member::paginate(5);
        return view("list", ['members'=>$data]);
    }

    function addData(Request $req) {
        $member = new Member;
        $member->name = $req->name;
        $member->age = $req->age;
        $member->city = $req->city;
        $member->gender = $req->gender;

        $member->save();
        return redirect('add');
    }

    function delete($id) {
        $data = Member::find($id);
        $data->delete();
        return redirect('list');
    }

    function showData($id) {
        $data = Member::find($id);
        return view('edit', ['data'=>$data]);
    }

    function update(Request $req) {
        $data = Member::find($req->id);
        $data->name = $req->name;
        $data->age = $req->age;
        $data->city = $req->city;
        $data->gender = $req->gender;
        $data->save();
        return redirect('list');
    }

    function operation () {
        return Member::sum('id');
    }

    // Check one to many relation
    function checkOneToMany() {
        return Member::find(1)->getDevice;
    }
}
