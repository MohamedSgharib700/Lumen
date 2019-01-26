<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model {

    /**
     * The dataFbase table used by the model.
     *
     * @var string
     */
    protected $table = 'news';
    protected $fillable = array('title', 'photo', 'photo_alt', 'cat_id','ar_title','ar_photo_alt'
    );
    public $timestamps = false;
    public function cat() {
        return $this->belongsTo('App\Category', 'cat_id');
    }


    public function setPhotoAttribute($photo) {
        if ($photo) {
            $dest = 'admin-assets/images/news/';
            $name = str_random(6) . '_' . $photo->getClientOriginalName();
            $photo->move($dest, $name);
            $this->attributes['photo'] = $name;
        }
    }

}
