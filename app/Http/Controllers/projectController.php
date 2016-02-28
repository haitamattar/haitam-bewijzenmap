<?php namespace App\Http\Controllers;

use App\projects;
use App\workprocess as workprocess;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;


class projectController extends Controller
{
	
	//je moet ingelogd zijn om dit te zien
	public function __construct()
	{
			$this->middleware('auth');
	}
	
	public function store(Request $request)
	{
		projects::create($request->all());
		
		$this->validate($request, [
			'workProcess_id' => ['required','Exists:workProcess,id'], //check of de id wel matcht met de database
			'projectName' => 'required',
			'description' => 'required'
		]);
		
		return redirect('projects');
	}
	
	public function createProjectForm()
	{
		$werkprocessen = workprocess::all();
		//sorteren op werkprocessen nummer
		$werkprocessen = $werkprocessen->sortBy('workProcessNum');
		//geef info van de werkprocessen mee met de view
		return view('createProject',  ['werkprocessen' => $werkprocessen]);
	}
	
	public function updateProjectForm($id)
	{
		$oudeData = projects::findOrFail($id);
		$werkprocessen = workprocess::all();
		//sorteren op werkprocessen nummer
		$mijn = $oudeData->workProcess_id;
		//geef info van de werkprocessen mee met de view
		$allData = array(
			'werkprocessen' => $werkprocessen,
			'oudeData' => $oudeData
		);
		return view('updateProject', $allData)->withTask($oudeData);;
	}
	
	public function updateProject($id, Request $request)
	{
		$task = projects::findOrFail($id);
		
		$this->validate($request, [
			'workProcess_id' => ['required','Exists:workProcess,id'], //check of de id wel matcht met de databases
			'projectName' => 'required',
			'description' => 'required'
		]);
		
		$input = $request->all();
		$task->fill($input)->save();
		Session::flash('flash_message', 'update gelukt!');
		
		return redirect('updateProject/'.$id);
	}
	
	public function showProject($id)
	{
		$project = projects::findOrFail($id);
		$werkprocessNum = workprocess::find($project->workProcess_id);
		
		$alldata = array(
			'project' => $project,
			'werkprocessNum' => $werkprocessNum
		);
		
		return view('singleProject' , $alldata);
	}
	
	//lijst met projects die gelinkt zijn aan een werkprocess
	public function showWerkprocessProjects($id)
	{
		$werkprocessen = workprocess::findOrFail($id);
		$projects = projects::where('workProcess_id', $id)->get();
		$allData = array(
			'werkprocessen' => $werkprocessen,
			'projects' => $projects,
	);
		
		return view('projects', $allData);
	}
}
