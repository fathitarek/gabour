<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ComponentData extends Model {

    protected $fillable = [
        'name',
        'component_template_id',
        'component_data',
        'slot_name',
        'website_id',
        'published',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
    public function  website() {
        return $this->belongsTo('App\Website');
    }
    public function  componentTemplate() {
        return $this->belongsTo('App\ComponentTemplate');
    }

}
