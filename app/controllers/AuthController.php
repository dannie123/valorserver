<?php

// session_start();
class AuthController extends BaseController{

    public function Login(){
        if(Auth::attempt(['admin_id' => Request::get('admin_id'), 'password' => Request::get('password')])){
         // $_SESSION['login'] = md5(123456);
         $dashboard = Dashboard::get();
         $response =  Response::json(['dashboard' => $dashboard->toArray()
         ]);
         // echo 'SessionID = '.$_SESSION['login'];
         return $response;
        }else{
            return 'invalid admin_id/pass combo';
        }

    }
    

    public Function Logout(){
        Auth::logout();
        session_destroy(); 
        return 'logged out';
    }

}