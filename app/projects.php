<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
	
	protected $fillable = [
		'workProcess_id',
		'projectName',
		'description',
		'content',
		'tags'
	];
	
	public function werkProces()
	{
		return $this->belongsTo('App\workprocess', 'id');
	}
	
}
