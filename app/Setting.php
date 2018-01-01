<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model {

	protected $fillable = [
        'text_en',
        'text_ar',
        'img_en',
        'img_ar',
        'google_analytics',
        'published',
            'user_id',
         'website_id',
        ];

         public function user() {
      return $this->belongsTo('App\User');
  }
  public function  website() {
     return $this->belongsTo('App\Website');
    }
   
}
