<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    public function kontak()
    {
        return $this->belongsToMany(Kontak::class, 'contacthobbies', 'idkontak', 'idhobby');
    }
}
