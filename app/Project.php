<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

    /**
     * The dataFbase table used by the model.
     *
     * @var string
     */
     protected $table = 'projects';
    protected $fillable = array(   'name', 'ar_name', 'sub_cat_id', 'desc', 'ar_desc', 'created_at', 'updated_at',
        'custom_url', 'ar_custom_url', 'meta_description', 'meta_keyword', 'ar_meta_keyword', 'ar_meta_data', 'photo', 'photo_alt','location', 'fb', 'tw', 'ins', 'gp','meta_title','page_title','ar_page_title','ar_meta_title');
    public function sub_cat() {
        return $this->belongsTo('App\SubCat','sub_cat_id');
    }

    public function galary() {
        return $this->hasMany('App\ProjectGalary', 'project_id');
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