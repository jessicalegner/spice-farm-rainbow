<?php

class AuthController extends BaseController {

  public function status() {
    return Response::json(Auth::check());
  }

  public function secrets() {
    if(Auth::check()) {
      return 'You are logged in, here are secrets.';
    } else {
      return 'You aint logged in, no secrets for you.';
    }
  }

  public function login()
  {
      if(Input::get('email') && Input::get('password') && Auth::attempt(Input::only('email', 'password'))){
        return Redirect::to('/');
      }else{
        return Redirect::to('login')->withError('Incorrect Email or Password')->withInput(Input::except('password'));;
      }
  }

  public function logout()
  {
    Auth::logout();
    return Response::json(array('flash' => 'Logged Out!'));
  }

}