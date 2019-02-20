<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resultat extends Model
{
    public $guarded = ['id'];
    protected $dates = ['date_document', 'date_prelevement', 'date_passage', 'date_lecture'];

    public function Centre()
    {
        return $this->hasOne('App\Centre', 'id', 'centre_id');
    }

    public function SubResultats()
    {
        return $this->hasMany('App\SubResultat');
        return SubResultat::where('resultat_id', $this->id)->get();
    }

}
