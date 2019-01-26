<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogGalary extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'blog_galary';
    protected $fillable = array('photo','blog_id');
    public $timestamps = false;

    public function blogs() {
        return $this->belongsTo('App\Blog','blog_id');
    }

}
