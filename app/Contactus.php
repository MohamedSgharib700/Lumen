<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactus extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'contactus';
    protected $fillable = array('name', 'phone', 'email', 'subject', 'message');

}
