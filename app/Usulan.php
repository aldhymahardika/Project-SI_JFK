<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usulan extends Model
{
    protected $table = 'usulan';
    public function peserta()
    {
    	return $this->hasOne('App\Peserta');
    }
}
