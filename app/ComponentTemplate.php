<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ComponentTemplate extends Model {

    protected $fillable = [
        'name',
        'path',
        'preview',
        'component_structure',
        'website_id',
        'published',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
    public function  website() {
        return $this->belongsTo('App\Website');
    }

    public function componentDatas(){
        return $this->hasMany('App\ComponentData');
    }
}
