<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCat extends Model {

    /**
     * The dataFbase table used by the model.
     *
     * @var string
     */
     protected $table = 'sub_cats';
    protected $fillable = array('name', 'photo', 'custom_url', 'meta_description', 'meta_keyword', 'cat_id', 'ar_name',
        'ar_meta_description', 'ar_meta_keyword', 'photo_alt', 'ar_photo_alt', 'ar_custom_url', 'desc', 'ar_desc','meta_title','ar_meta_title','page_title','ar_page_title','ar_meta_title' );

     public function blogs() {
        return $this->hasMany('App\Blog','sub_cat_id')->paginate(6);
    }
    public function projects() {
        return $this->hasMany('App\Project','sub_cat_id')->paginate(6);
    }
       public function project() {
        return $this->hasMany('App\Project','sub_cat_id');
    }
    public function cat() {
        return $this->belongsTo('App\Category','cat_id');
    }
    public $timestamps = false;


    public function setPhotoAttribute($photo) {
        if ($photo) {
            $dest = 'admin-assets/images/subcats/';
            $name = str_random(6) . '_' . $photo->getClientOriginalName();
            $photo->move($dest, $name);
            $this->attributes['photo'] = $name;
        }
    }

}
