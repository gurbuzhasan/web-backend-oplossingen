<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Input;
use App\Task;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{

	
	
    public function getMain(){
		
		//neem alle tasks van de user
		$tasks = Auth::user()->tasks;
		
		return view("home")->with("tasks", $tasks);
	}
	
	public function postMain(){
		//neem de value van de checkbox
		$task_id = Input::get("task_id");

		//zoek een task met de value van de checkbox
		$task = Task::findOrFail($task_id);
		
		if ($task->user_id == Auth::user()->id){
			
			//als de juiste user is ingelogd verander de bool van de task
			$task->isDone();
		}
		
		
		
		return Redirect::route('home');
		
	}
	
	public function getLogin(){
		
		
		return view("login");
	}
	
	public function getRegister(){
		
		
		
		return view("register");
	}
	
	
	public function getNewTask(){
		
		
		return view('newtask');
		
	}
	
	public function postNewTask(){
		//check of de input ingevuld is en stuur al dan niet een error
		$rules = array(
			
			'newtask' => 'required'
			
		);
		$validator = Validator::make(Input::all(), $rules);
		if($validator->fails()){
			
			return Redirect::route("newtask")->withErrors($validator);
			
		}
		//steek de task in de db
		$task = new Task;
		$task->name = Input::get('newtask');
		$task->user_id = Auth::user()->id;
		$task->save();
		
		return Redirect::route('home');
	}
	
	
	public function getDelete(Task $task){
		
		if($task->user_id == Auth::user()->id){
			//delete task als de juiste user is ingelogd
			$task->delete();
			
		}
		
		
		
		return Redirect::route('home');
	}
	
	
	public function getLogout()
	{
		//loguit
	    Auth::logout();
	    return Redirect::route('login');
	}
	
	
	
	
	
	
	
	
	
}
