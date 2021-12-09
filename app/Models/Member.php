<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function getNameAttribute($value) {
        return ucfirst($value);
    }

    // Mutator Example
    public function setNameAttribute($value) {
        $this->attributes['name'] = "Mr ".$value; 
    }
    
    public function setCityAttribute($value) {
        $this->attributes['city'] = $value.", Bangladesh"; 
    }

    // One to Many relation with devices table
    public function getDevice() {
        return $this->hasMany('App\Models\Device');
    }
}
