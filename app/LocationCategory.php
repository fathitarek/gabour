<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocationCategory extends Model {

    protected $fillable = [
        'name_en',
        'name_ar',
        'published',
        'user_id'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
    public function  locationItems() {
     return $this->hasMany('App\LocationItem');   
    }
    /*
public function  websites() {
     return $this->hasMany('App\Website');   
    }*/
}
