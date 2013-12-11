<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function(){
	return View::make('home');
});

//_________________________________CONTACTING (EMAIL)____________________________


Route::get('contact', function(){
	return View::make('contact');
});


Route::post('contact', function(){

		$aRules = array(
			'name'=>'required',
			'email'=>'required|email',
			'subject'=>'required',
			'email_message'=>'required',
		);
	$validator = Validator::make(Input::all(),$aRules);

	if($validator->fails()){
		return Redirect::to('contact')->withErrors($validator)->withInput();;
	} else {
		$data = Input::all();
		Mail::send('contactEmail', $data, function($message) use ($data)
		{
			$message->from($data["email"],$data["name"]);
		    $message->to("annie.c.kyles@gmail.com", "Annie")->subject($data["subject"]);
		});
		return Redirect::to('contactConfirm');
	}
});


Route::get('contactConfirm', function(){
	return View::make('contactConfirm');
});



//________________________________CONTENT ROUTES_____________________________________


Route::get('design', function(){
	return View::make('design');
});

Route::get('web', function(){
	return View::make('web');
});

Route::get('home', function(){
	return View::make('home');
});
