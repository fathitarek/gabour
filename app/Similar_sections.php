<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Similar_sections extends Model {

    protected $fillable = [
        'image_en',
        'image_ar',
        'title_en',
        'title_ar',
        'pdf_en',
        'pdf_ar',
        'small_desc_en',
        'small_desc_ar',
        'full_desc_en',
        'full_desc_ar',
        'video',
        'category',
        'published',
        'user_id',
        'website_id'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function website() {
        return $this->belongsTo('App\Website');
    }

}
