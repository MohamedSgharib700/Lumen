<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model {

    /**
     * The dataFbase table used by the model.
     *
     * @var string
     */
     protected $table = 'careers';

    protected $fillable = array('job_title', 'job_desc', 'job_dep', 'location', 'deadline');


    //public function setPhotoAttribute($photo) {
        //if ($photo) {
           // $dest = 'admin-assets/images/careers/';
           // $name = str_random(6) . '_' . $photo->getClientOriginalName();
           // $photo->move($dest, $name);
           // $this->attributes['photo'] = $name;
       // }
    //}


  }