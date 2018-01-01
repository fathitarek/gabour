<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model {

  protected $fillable = [
      'name',
      'website_id',
      'display_name',
      'published'
  ];

  public function user() {
      return $this->belongsTo('App\User');
  }
  public function website() {
      return $this->belongsTo('App\Website');
  }
  public function sliderItems() {
      return $this->hasMany('App\SliderItem');
  }
}
