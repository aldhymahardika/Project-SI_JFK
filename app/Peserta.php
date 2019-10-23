<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $table = 'peserta';
    public function usulan()
    {
    	return $this->belongsTo('App\Usulan');
    }
    protected $fillable = [
    	'nip',
		'nama',
		'tmt',
		'sk_cpns',
		'sk_pns',
		'pangkat',
		'sk_kp',
		'unit_kerja',
		'pendidikan',
		'ijazah',
		'jabatan',
		'jenis_pelatihan',
		'jenis_usulan',
		'email',
		'no_telp'
    ];
}
