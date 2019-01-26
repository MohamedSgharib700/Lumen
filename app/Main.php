<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Main extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'main';
    public $timestamps = false;
    protected $fillable = array('title', 'company_description', 'logo', 'email', 'phone', 'address', 'aboutus',
        'meta_description', 'meta_auther', 'meta_keyword', 'vision', 'mission', 'photo_alt', 'gp', 'be', 'apple', 'sky',
        'tw', 'yt', 'fb', 'linkedin', 'whatsapp', 'ins', 'pin', 'address2', 'address3', 'video_url', 'ar_title', 'ar_aboutus',
        'ar_meta_description', 'ar_meta_keyword', 'ar_meta_auther', 'ar_vision'
    , 'ar_mission', 'ar_photo_alt', 'goals', 'history', 'aboutusphoto', 'aboutusslider', 'ar_goals', 'ar_history','projectslider','blogslider','why','ar_why','socialphoto'
    ,'projdesc','ar_projdesc','wwr','ar_wwr','stumble','upon','tumbler','meta_title','ar_meta_title','contactusslider','portfolioslider');

//    protected $hidden = array('password', 'remember_token');

    /**
     * [setImageAttribute]
     * @return [uplode and create or update one image to service] [to user]
     */
    public function setLogoAttribute($image) {
        if ($image) {
            $dest = 'adminstyle/assets/images/gallery/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['logo'] = $name;
        }
    }
       public function setBackgroundAttribute($image) {
        if ($image) {
            $dest = 'adminstyle/assets/images/gallery/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['background'] = $name;
        }
    }
     public function setBusinesscardAttribute($image) {
        if ($image) {
            $dest = 'adminstyle/assets/images/gallery/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['businesscard'] = $name;
        }
    }

    public function setAboutusphotoAttribute($image) {
        if ($image) {
            $dest = 'adminstyle/assets/images/gallery/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['aboutusphoto'] = $name;
        }
    }
    public function setAboutussliderAttribute($image) {
        if ($image) {
            $dest = 'adminstyle/assets/images/gallery/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['aboutusslider'] = $name;
        }
    }
    
      public function setPortfoliosliderAttribute($image) {
        if ($image) {
            $dest = 'adminstyle/assets/images/gallery/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['portfolioslider'] = $name;
        }
    }

 public function setContactussliderAttribute($image) {
        if ($image) {
            $dest = 'adminstyle/assets/images/gallery/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['contactusslider'] = $name;
        }
    }

    public function setBlogsliderAttribute($image) {
        if ($image) {
            $dest = 'adminstyle/assets/images/gallery/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['blogslider'] = $name;
        }
    }

    public function setProjectsliderAttribute($image) {
        if ($image) {
            $dest = 'adminstyle/assets/images/gallery/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['projectslider'] = $name;
        }
    }

    public function setSocialphotoAttribute($image) {
        if ($image) {
            $dest = 'adminstyle/assets/images/gallery/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['socialphoto'] = $name;
        }
    }







}
