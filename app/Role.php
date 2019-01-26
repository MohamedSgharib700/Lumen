<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {

    /**
     * The dataFbase table used by the model.
     *
     * @var string
     */
     protected $table = 'role';
    protected $fillable = array('title','ar_title');
    public $timestamps = false;





 }
