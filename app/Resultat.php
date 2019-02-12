<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resultat extends Model
{
    public $guarded = ['id'];

    public function Centre()
    {
        return $this->hasOne('App\Centre', 'id', 'centre_id');
    }
}
