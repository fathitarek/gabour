<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model {

    protected $fillable = [
        'name',
        'display_name',
        'url',
        'description',
        'website_id',
        'menu_template_id',
        'published',
    ];
    public function user() {
        return $this->belongsTo('App\User');
    }
    public function  menuItems() {
        return $this->hasMany('App\MenuItem');
    }
    public function website() {
        return $this->belongsTo('App\Website');
    }


}
