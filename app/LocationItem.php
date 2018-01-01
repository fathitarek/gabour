<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocationItem extends Model {

    protected $fillable = [
        'name_en',
        'name_ar',
        'published',
        'lat',
        'long',
        'address_en',
        'address_ar',
        'phone',
        'fax',
        'email',
        'location_category_id',
        'website_id',
        'user_id',
        'city_id'
    ];

    public function locationCategory() {
        return $this->belongsTo('App\LocationCategory');
    }

    public function website() {
        return $this->belongsTo('App\Website');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function city() {
        return $this->belongsTo('App\City');
    }

}
