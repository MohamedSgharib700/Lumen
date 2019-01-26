<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {

    /**
     * The dataFbase table used by the model.
     *
     * @var string
     */
    protected $table = 'clients';
    protected $fillable = array('photo', 'photo_alt', 'url'
    );
    public $timestamps = false;


    public function setPhotoAttribute($photo) {
        if ($photo) {
            $dest = 'admin-assets/images/clients/';
            $name = str_random(6) . '_' . $photo->getClientOriginalName();
            $photo->move($dest, $name);
            $this->attributes['photo'] = $name;
        }
    }

}
