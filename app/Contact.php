<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {

    protected $table = 'contacts';
    protected $fillable = [
        'name',
        'mobile',
        'email',
        'message',
        'website_id'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function website() {
        return $this->belongsTo('App\Website');
    }

    public function city() {
        return $this->belongsTo('App\City');
    }

}
