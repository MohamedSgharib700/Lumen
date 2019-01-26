<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'l_name', 'email', 'password', 'photo', 'city', 'address', 'phone', 'permission'
    ];
    protected $attributes = array(
        'photo' => 'profile-image.png'
    );
    public function userblogs() {
        return $this->hasMany('App\Blog', 'user_id');
    }
    public function setPhotoAttribute($image) {
        if ($image) {
            $dest = 'admin-assets/images/users/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['photo'] = $name;
        }
    }

    public function setPasswordAttribute($date) {
        if (isset($date) && !empty($date)) {
            $this->attributes['password'] = bcrypt($date);
        }
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];






    public function role() {
        return $this->belongsTo('App\Role','permission');
    }

}
