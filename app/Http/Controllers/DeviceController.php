<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;
use Validator;

class DeviceController extends Controller
{
    //
    public function index(Device $key) {
        return $key;
    }

    // Post api
    function add(Request $request) {
        $device = new Device;
        $device->name = $request->name;
        $device->member_id = $request->member_id;
        $result = $device->save();

        if($result){
            return ["Result"=>"Data save successfully"];
        }else{
            return ["Result"=>"Operation failed"];
        }
        
    }

    // Put api
    function update(Request $req) {
        $device = Device::find($req->id);
        $device->name = $req->name;
        $device->member_id = $req->member_id;
        $result = $device->save();

        if($result){
            return ["Result"=>"Data is updated"];
        }else{
            return ["Result"=>"Operation failed"];
        }
        
    }

    // Delete api
    function delete($id){
        $device = Device::find($id);
        $result = $device->delete();
        
        if($result){
            return ["Result"=>"record has been delete"];
        }else{
            return ["Result"=>"Operation failed"]; 
        }
    }

    // Search api
    function search($name) {
        return Device::where('name',$name)->get();
    }

    // Api Validation
    function testData(Request $req) {
        $rules = array(
            "member_id"=>"required|min:2"
        );
        $validator = Validator::make($req->all(),$rules);

        if($validator->fails()){
            return response()->json($validator->errors(),401);
        }else{
            $device = new Device;
            $device->name = $req->name;
            $device->member_id = $req->member_id;
            $result = $device->save();


           if($result){
            return ["Result"=>"record has been save"];
            }else{
                return ["Result"=>"Operation failed"]; 
            }
        }
        
    }
}
