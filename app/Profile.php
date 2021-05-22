<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded=[];

    public function profileImage(){
      return '/storage/'.($this->image ? $this->image : 'profile/iVWx8kcOXg9P6B3Xlubeuyk9b2bRaACEh6otAJL2.jpeg');
    }

    public function followers(){
      return $this->belongsToMany(User::class);
    }

    public function user(){
      return $this->belongsTo(User::class);
    }
}
