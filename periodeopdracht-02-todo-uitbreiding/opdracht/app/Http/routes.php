<?php




Route::group(['middleware' => ['web']], function () {
    
	//bind model aan route
	Route::bind("task", function($value, $route){
		
		//return een instance van Task
		return Task::where("id", $value)->first();
		
		
	});
	
	
	
	//routes naar verschillende pagina's
	Route::get('/', array('as' => 'home', 'uses' =>'PagesController@getMain'))->middleware(['auth']);
	Route::post('/', 'PagesController@postMain');
	
	
	Route::get('newtask', array('as' => 'newtask', 'uses' =>'PagesController@getNewTask'));
	Route::post('newtask', 'PagesController@postNewTask');
	
	Route::get('/delete/{task}', array('as' => 'delete', 'uses' => 'PagesController@getDelete'));
	
	Route::get('login',array('as' => 'login', 'uses' =>  'PagesController@getLogin'))->middleware(['guest']);
	Route::post('login', 'Auth\AuthController@postLogin');


	
	Route::get('logout',array('as' => 'logout', 'uses' => 'PagesController@getLogout'));


	Route::get('register',array('as' => 'register', 'uses' => 'PagesController@getRegister'))->middleware(['guest']);
	Route::post('register', 'Auth\AuthController@postRegister');
	
	
	
});