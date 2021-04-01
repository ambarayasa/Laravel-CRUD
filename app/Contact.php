<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table ='contacts';
    public function darah()
    {
        return $this->hasOne('App\Blood','id','darahid');
    
    }
    public function hobby()
    {
        return $this->belongsToMany(Hobby::class, 'contacthobbies', 'idkontak', 'idhobby');
    }
}

