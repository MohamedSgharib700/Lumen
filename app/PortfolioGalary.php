<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioGalary extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'portfolio_galary';
    protected $fillable = array('photo','portfolio_id');
    public $timestamps = false;

 

}
