<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CnSubsector extends Model
{
    public function cnCifrasNacionales(){
    	return $this->hasMany('App\CnCifrasNacionales');
    }
}
