<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectGalary extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'project_galary';
    protected $fillable = array('photo','project_id');
    public $timestamps = false;

 

}
