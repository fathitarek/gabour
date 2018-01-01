<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model {

    protected $fillable = [
        'name',
        'display_name',
        'url',
        'description',
        'website_id',
        'menu_template_id',
        'menu_id',
        'menu_item_id',
        'image_on',
        'image_off',
        'published',
    ];

    public function menu() {
        return $this->belongsTo('App\Menu');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
    public function website() {
        return $this->belongsTo('App\Website');
    }

    public function menuItem() {
        return $this->belongsTo('App\MenuItem');
    }

    public function menuItems() {
        return $this->hasMany('App\MenuItem');
    }
}
