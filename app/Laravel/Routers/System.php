<?php

$this->group([

	/**
	*
	* Backend routes main config
	*/
	'namespace' => "System", 
	'as' => "system.", 
	'prefix'	=> "admin",
	// 'middleware' => "", 

], function(){


	$this->group(['middleware' => ["web","system.guest"]], function(){
		$this->get('register/{_token?}',['as' => "register",'uses' => "AuthController@register"]);
		$this->post('register/{_token?}',['uses' => "AuthController@store"]);
		$this->get('login/{redirect_uri?}',['as' => "login",'uses' => "AuthController@login"]);
		$this->post('login/{redirect_uri?}',['uses' => "AuthController@authenticate"]);
	});

	$this->group(['middleware' => ["web","system.auth","system.client_partner_not_allowed"]], function(){
		
		$this->get('logout',['as' => "logout",'uses' => "AuthController@destroy"]);


		$this->group(['middleware' => ["system.update_profile_first"]], function() {

			$this->group(['prefix' => "product", 'as' => "product."], function () {
				$this->get('/',['as' => "index", 'uses' => "ProductController@index"]);
				$this->get('create',['as' => "create", 'uses' => "ProductController@create"]);
				$this->post('create',['uses' => "ProductController@store"]);
				$this->get('edit/{id?}',['as' => "edit", 'uses' => "ProductController@edit"]);
				$this->post('edit/{id?}',['uses' => "ProductController@update"]);
				$this->any('delete/{id?}',['as' => "destroy", 'uses' => "ProductController@destroy"]);
			});

			$this->group(['prefix' => "user-management", 'as' => "user_management."], function () {
				$this->get('/',['as' => "index", 'uses' => "UserManagementController@index"]);
				$this->any('delete/{id?}',['as' => "destroy", 'uses' => "UserManagementController@destroy"]);
			});

			$this->group(['prefix' => "side-effect", 'as' => "side_effect."], function () {
				$this->get('/',['as' => "index", 'uses' => "SideEffectController@index"]);
				$this->any('delete/{id?}',['as' => "destroy", 'uses' => "SideEffectController@destroy"]);

			});
			$this->group(['prefix' => "information", 'as' => "information."], function () {
				$this->get('/',['as' => "index", 'uses' => "informationController@index"]);
				$this->any('delete/{id?}',['as' => "destroy", 'uses' => "SideEffectController@destroy"]);

			});
			
			$this->group(['prefix' => "dashboard", 'as' => "dashboard."], function () {
				$this->get('/',['as' => "index", 'uses' => "DashBoardController@index"]);
			});
			
		
		});
	});
});