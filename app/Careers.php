<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Careers extends Model
{
    protected $table = 'careers';

    protected $fillable = array('job_title', 'job_desc', 'job_dep', 'location', 'deadline');
}
