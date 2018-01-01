<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Website extends Model {

  protected $fillable = [
      'name',
      'display_name_en',
      'display_name_ar',
      'view_folder',
      'html_includes',
      'title_en',
      'title_ar',
      'meta_en',
      'description_en',
      'meta_ar',
      'description_ar',
      'logo_en',
      'logo_ar',
      'published',
  ];

  public function user() {
      return $this->belongsTo('App\User');
  }
  public function slider() {
      return $this->hasMany('App\Slider');
  }



    public function sliderItems() {
        return $this->hasMany('App\SliderItems');
    }
    

    public function locationItems()
    {
        return $this->hasMany('App\LocationItem');
    }

    public function cities(){
        return $this->hasMany('App\City');
    }
    public function settings(){
        return $this->hasMany('App\Setting');
    }
    public function templates(){
        return $this->hasMany('App\Template');
    }
    public function pages(){
        return $this->hasMany('App\Page');
    }

    public function contact(){
        return $this->hasMany('App\Contact');
}
    public function similar_sections(){
        return $this->hasMany('App\Similar_sections');

    }
    public function contacts(){
        return $this->hasMany('App\Contact');

    }
}
