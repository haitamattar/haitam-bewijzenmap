<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


use Illuminate\Http\Request;



Route::group(['middleware' => 'web'], function () {
	Route::auth();
	Route::get('/', 'werkProcessenController@getWerkprocessen');
	//zie voor voorbeeld hoe schrijven naar database
	Route::get('werkprocessen', 'werkProcessenController@getWerkprocessen');
	//laat de projecten zien die aan een werkprocess zijn gelinked
	Route::get('werkprocess/{id}', 'projectController@showWerkprocessProjects');
	//laat sinle project zien
	Route::get('project/{id}', "projectController@showProject");
	//stagegegevens
	Route::get('stageGegevens', function(){
		return view('stageGegevens');
	});
	//***************************************ALLEEN VOOR ADMIN********************************************
	//maak werkprocess
	Route::get('createWerkprocessen', 'werkProcessenController@createWorkprocess')->middleware('isAdmin');
	//store werkprocess
	Route::post('storeWerkprocess', 'werkProcessenController@store')->middleware('isAdmin');
	//update project
	Route::get('updateProject/{id}', 'projectController@updateProjectForm')->middleware('isAdmin');
	//update project
	Route::patch('updateStoreProject/{id}', 'projectController@updateProject')->middleware('isAdmin');
	//maak project aan
	Route::get('createProject', 'projectController@createProjectForm')->middleware('isAdmin');
	//store project na aanmaken
	Route::post('storeProject', 'projectController@store')->middleware('isAdmin');

	Route::get('form' , function(){
		return view('from');
	});

		Route::get('access', function(){
			echo 'You have access';
		})->middleware('isAdmin');
});
