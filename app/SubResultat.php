<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubResultat extends Model
{

    public $guarded = ['id'];

    protected $dates = ['date_reception'];

    public function Resultat()
    {
        return $this->hasOne('App\Resultat', 'id', 'resultat_id');
    }
}
