<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $fillable = [
        'title',
        'title_ar',
        'model',
        'note', 
        'link', 
        'image',
        'big_image',
        'published',
        'category_id',
        'website_id',
        'name',
        'display_name',
        'display_name_ar',
        'title2',
        'title2_ar',
        'text_title_ar',
        'text_title_en',
        'text_ar',
        'text_en',
        'pdf',
        'youtube_id',
        'youtube_title_en',
        'youtube_title_ar',
        'description_en',
        'description_ar',
        'short_description_en',
        'short_description_ar',
        'slider_id',
        'product_specs',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function website() {
        return $this->belongsTo('App\Website');
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }

}
