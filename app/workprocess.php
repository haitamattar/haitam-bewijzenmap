<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class workprocess extends Model
{
	protected $table = 'workProcess';
	
	protected $fillable = [
		'workProcessNum',
		'workProcess',
		'description'
	];
	
	public function hasProjects()
	{
		return $this->hasMany("App\projects");
	}
	
	//return projects counters
	public function projectsCount()
	{
		return $this->hasProjects()
		->selectRaw('workProcess_id, count(*) as countedProjects')
		->groupBy('workProcess_id');
	}
	
	//counter for relation records
	public function getProjectsDataCountAttribute()
	{
		// als relatie nog niet geladen is doe dat dan als eerst
		if ( $this->relationLoaded('commentsCount')) 
		$this->load('projectsCount');
		
		$related = $this->getRelation('projectsCount');
		
		// return direct counts
		return ($related) ? (int) $related->countedProjects : 0;
}
}
