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

Route::get('/', function()
{
    return View::make('index');
});

Route::get('/authtest', array('before' => 'auth.basic', function()
{
    return View::make('hello');
}));

Route::group(['prefix' => 'admin'], function() {

	Route::post('login', array('as' => 'admin.login', 'uses' => 'AuthController@Login'));

	Route::post('/forgottenpassword', function () {
	    	$email = Request::get('email_address');
	    	$member = Member::where('email_address', $email)->get();;
			    	$member = $member->lists('email_address');
	    	if (!empty($member)){
	        	return Response::json(['msg' => 'Confirmation email sent.'
	        	]);
    		} else {
				return Response::json(['msg' => 'Please, check again email address you entered.'
				]);
    		}
	});

	    Route::get('/all-members', function () {
	    	$members = Member::where('status', '1')->get();
        	return Response::json(['members' => $members->toArray()
        	]);
	    });

	    Route::post('/remove-member', function () {
	    	$id = Request::get('id');
	    	$reason = Request::get('reason');
	        $member = Member::find($id);
	        $member->delete();

	        // return Response::json(['status' => 200, 'mesg' => 'Member deleted - '.$reason
	        // ]);
	    });

	    Route::get('/join-requests', function () {
	    	$members = Member::where('status', '0')->get();
        	return Response::json([ $members->toArray()
        	]);
	    });

//NESTED JSON OBJECT
	    Route::post('join-requests', function () {
	    	$accept = Request::get('accept');
	    	$numberOfAcceptIds = count($accept);
	    	$numberA = $numberOfAcceptIds-1;

	    	$reject = Request::get('reject');
	    	$numberOfRejectIds = count($reject);
	    	$numberR = $numberOfRejectIds-1;

	    	if($accept!='') {

		    	for ($i=0; $i <= $numberA; $i++) {
		    			$id = $accept[$i]['id'];
			    		$members = Member::find($id);  
			    		$members->status='1';
			    		$members->save();
		    	}

		    } 
		    
		    if ($reject!='') {

		    	for ($n=0; $n <= $numberR; $n++) {
		    			$id = $reject[$n]['id'];
			    		$members = Member::find($id);  
			    		$members->delete();
		    	}

		    }

	    	// return Response::json(['status' => 200, 'mesg' => 'Membership join-requests updated']);
	    	
        });

	    Route::get('/community-settings', function () {
			$settings = Settings::get();
        	return Response::json(['settings' => $settings->toArray()
        	]);
	    });

	    Route::post('/community-settings', function () {
	    	$color1 = Request::get('color1');
	    	$color2 = Request::get('color2');
	    	$color3 = Request::get('color3');
	    	$welcome_logo = Request::get('welcome_logo');
	    	$app_header = Request::get('app_header');
	    	$menu_header = Request::get('menu_header');

			$settings = Settings::find(1);
			// # = %23

		    if ($color1)
		    {
		        $settings->color1 = $color1;
		    }
		 
		    if ($color2)
		    {
		        $settings->color2 = $color2;
		    }

		    if ($color3)
		    {
		        $settings->color3 = $color3;
		    }

		    if ($welcome_logo)
		    {
		        $settings->welcome_logo = $welcome_logo;
		    }

		    if ($app_header)
		    {
		        $settings->app_header = $app_header;
		    }

		    if ($menu_header)
		    {
		        $settings->menu_header = $menu_header;
		    }
		 
		    $settings->save();

        	// return Response::json(['status' => 200, 'mesg' => 'Settings updated'
        	// ]);
	    });

});