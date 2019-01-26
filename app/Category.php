<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    /**
     * The dataFbase table used by the model.
     *
     * @var string
     */
    protected $table = 'cats';
    protected $fillable = array('name','desc','ar_desc', 'photo','custom_url','meta_description','meta_keyword','photo_alt','ar_custom_url',
        'ar_meta_description','ar_meta_keyword','ar_photo_alt','ar_name','slider'
        );

    public $timestamps = false;

    public function products() {
        return $this->hasMany('App\Product', 'cat_id')->paginate(12);
    }
   public function subcats() {
        return $this->hasMany('App\SubCat','cat_id')->paginate(4);
    }
    public function subcatss() {
        return $this->hasMany('App\SubCat','cat_id');
    }



    public function setPhotoAttribute($photo) {
        if ($photo) {
            $dest = 'admin-assets/images/cats/';
            $name = str_random(6) . '_' . $photo->getClientOriginalName();
            $photo->move($dest, $name);
            $this->attributes['photo'] = $name;
        }
    }
    
    
      public function setSliderAttribute($photo) {
        if ($photo) {
            $dest = 'admin-assets/images/cats/';
            $name = str_random(6) . '_' . $photo->getClientOriginalName();
            $photo->move($dest, $name);
            $this->attributes['slider'] = $name;
        }
    }

}
