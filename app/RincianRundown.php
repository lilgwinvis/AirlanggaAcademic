<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class RincianRundown extends Model
{	
	protected $table = 'rincian_rundown';	

	protected $primaryKey ='id_rundown';
	protected $fillable = [
		'id_rundown',
		'kegiatan_id',
		'waktu',
		'nama',
		'kategori_rundown',
		'created_at',
		'updated_at',
		'deleted_at',
	];

public function rincianRundown()
{
	# code...
	return $this->belongsTo('App\KonfirmasiKegiatan','kegiatan_id');
}


}


		

