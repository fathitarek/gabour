<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {

	//

    protected $fillable = [
        'name',
        'title',
        'keywords',
        'description',
        'components',
        'published',
        'template_id',
        'website_id',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
    public function  website() {
        return $this->belongsTo('App\Website');
    }
    public function  template() {
        return $this->belongsTo('App\Template');
    }

}
