<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resultat extends Model
{
    public $guarded = ['id'];
    protected $dates = ['date_document'];

    public function Centre()
    {
        return $this->hasOne('App\Centre', 'id', 'centre_id');
    }

    public function SubResultats()
    {
        return $this->hasMany('App\SubResultat', 'resultat_id', 'id');
    }

}
