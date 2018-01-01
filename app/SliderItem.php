<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class SliderItem extends Model {

	protected $fillable = [

    'name',
    'title',
    'title_ar',
    'caption',
    'caption_ar',
    'url',
    'url_ar',
    'url_title',
    'url_title_ar',
    'img',
    'slider_id',
    'user_id',
    'website_id',
    'published',
    'youtube_id',
  ];

	public function user() {
      return $this->belongsTo('App\User');
  }
  public function slider() {
      return $this->belongsTo('App\Slider');
  }
    public function website() {
        return $this->belongsTo('App\Website');
    }

}
