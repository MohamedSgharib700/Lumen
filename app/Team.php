<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model {

    /**
     * The dataFbase table used by the model.
     *
     * @var string
     */
    protected $table = 'team';
    protected $fillable = array('name', 'job_title', 'about', 'fb', 'tw', 'ins', 'link','photo'
    );
    public $timestamps = false;



    public function setPhotoAttribute($photo) {
        if ($photo) {
            $dest = 'admin-assets/images/team/';
            $name = str_random(6) . '_' . $photo->getClientOriginalName();
            $photo->move($dest, $name);
            $this->attributes['photo'] = $name;
        }
    }

}
