<?php

$this->group([

	/**
	*
	* Backend routes main config
	*/
	'namespace' => "Frontend", 
	'as' => "frontend.", 
	// 'prefix'	=> "admin",
	// 'middleware' => "", 

	], function(){

		
		 $this->get('/', ['as' => "home_page",'uses' => "MainController@home_page"]);
		
		$this->group(['prefix' => "information", 'as' => "information."], function () {
			$this->get('/',['as' => "index", 'uses' => "MainController@information"]);
			$this->get('/success',['as' => "success", 'uses' => "MainController@success"]);
			$this->get('/side-effect',['as' => "side_effect", 'uses' => "MainController@side_effect"]);
			$this->post('/',['uses' => "MainController@update"]);
			$this->post('/side-effect',['uses' => "MainController@store"]);
			
		});

		

		
	
});