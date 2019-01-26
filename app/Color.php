<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model {

    /**
     * The dataFbase table used by the model.
     *
     * @var string
     */
    protected $table = 'colors';
    protected $fillable = array('name','code', 'rgb', 'cmyk', 'ar_name', 'cat_id','photo');
    public $timestamps = false;

    public function cat() {
        return $this->belongsTo('App\ColorCat', 'cat_id');
    }


    public function setPhotoAttribute($photo) {
        if ($photo) {
            $dest = 'admin-assets/images/colors/';
            $name = str_random(6) . '_' . $photo->getClientOriginalName();
            $photo->move($dest, $name);
            $this->attributes['photo'] = $name;
        }
    }

}
