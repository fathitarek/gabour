<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model {

	protected $fillable = [
        'name_en',
        'name_ar',
        'published',
         'website_id',
        ];

         public function user() {
      return $this->belongsTo('App\User');
  }
  public function  website() {
     return $this->belongsTo('App\Website');
    }
    public function  contacts() {
     return $this->hasMany('App\Contact');
    }
}
