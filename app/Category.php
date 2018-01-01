<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $fillable = [
        'name',
        'display_name',
        'display_name_ar',
        'note',
        'note_ar',
        'small_image',
        'big_image',
        'text_title_en',
        'test_title_ar',
        'text_en',
        'text_ar',
        'youtube_id',
        'youtube_title_en',
        'youtube_title_ar',
        'youtube_text_en',
        'youtube_text_ar',
        'published',
        'category_id',
        'website_id',
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
    
    public function category() {
        return $this->belongsTo('App\Category');
    }
    
        public function categories() {
        return $this->hasMany('App\Category');
    }
 public function products() {
        return $this->hasMany('App\Product');
    }
}
