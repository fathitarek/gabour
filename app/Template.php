<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model {

    protected $fillable = [
        'name',
        'path',
        'includes',
        'footer_includes',
        'slots',
        'published',
        'website_id',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
    public function  website() {
        return $this->belongsTo('App\Website');
    }
    public function pages(){
        return $this->hasMany('App\Page');
    }
}