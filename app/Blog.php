<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model {

    /**
     * The dataFbase table used by the model.
     *
     * @var string
     */
     protected $table = 'blog';
    protected $fillable = array( 'title', 'blog', 'sub_cat_id', 'photo', 'photo_alt', 'custom_url', 'ar_custom_url',
        'meta_description', 'meta_keyword', 'created_at', 'updated_at', 'desc', 'ar_title', 'ar_blog', 'ar_photo_alt',
        'ar_meta_description', 'ar_meta_keyword', 'ar_desc', 'video', 'user_id','meta_title','page_title','ar_page_title');
    public function sub_cat() {
        return $this->belongsTo('App\SubCat','sub_cat_id');
    }

    public function galary() {
        return $this->hasMany('App\BlogGalary', 'blog_id');
    }
    public function author() {
        return $this->belongsTo('App\User','user_id');
    }

    public function setPhotoAttribute($photo) {
        if ($photo) {
            $dest = 'admin-assets/images/blogs/';
            $name = str_random(6) . '_' . $photo->getClientOriginalName();
            $photo->move($dest, $name);
            $this->attributes['photo'] = $name;
        }
    }


  }