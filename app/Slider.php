<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model {
 
    protected $table = 'slider';
    protected $fillable = array('photo', 'title','status', 'subtitle', 'desc', 'photo_alt', 'button','button_url',
        'ar_title', 'ar_subtitle', 'ar_desc', 'ar_photo_alt','ar_button'
        );
        public $timestamps = false;
    public function setPhotoAttribute($photo) {
        if ($photo) {
            $dest = 'admin-assets/images/slider/';
            $name = str_random(6) . '_' . $photo->getClientOriginalName();
            $photo->move($dest, $name);
            $this->attributes['photo'] = $name;
        }
    }

}
