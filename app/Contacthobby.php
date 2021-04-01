<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacthobby extends Model
{
    public function kontak()
    {
        return $this->belongsTo('App\Kontak');
    }
    public function hobby()
    {
        return $this->belongsTo('App\Hobby');
    }
}
