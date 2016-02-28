<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\workprocess as workprocess;
use App\projects as projects;

class werkProcessenController extends Controller
{
	//je moet ingelogd zijn om dit te zien
	public function __construct()
	{
	    $this->middleware('auth');
	}
	
	public function getWerkprocessen(){
		
		$werkprocessen = workprocess::all();
		$projects = projects::all()->groupBy('workProcess_id');
		$werkprocessen = $werkprocessen->sortBy('workProcessNum');
		
		$allData = array(
			'werkprocessen' => $werkprocessen,
			'projects' => $projects
		);
		
		return view("werkprocessen", $allData);
	}
	
	public function store(Request $request)
	{
		
		
		$this->validate($request, [
			'workProcessNum' => ['required','unique:workProcess,workProcessNum','numeric'], //check of de id wel matcht met de database
			'workProcess' => 'required',
			'description' => 'required'
		]);
		workprocess::create($request->all());
		return redirect('werkprocessen');
	}
		
	public function createWorkprocess()
	{
		//sorteren op werkprocessen nummer
		//geef info van de werkprocessen mee met de view
		return view('createWerkprocess');
	}
	
}
