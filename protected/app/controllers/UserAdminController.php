<?php
 
class UserAdminController extends \BaseController {
 
    public function login()
    {
        return View::make('admin.login');
    }
 
    public function doLogin()
    {
        $rules = array(
            'email'    => 'required|email',
            'password' => 'required|alphaNum|min:5'
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('admin')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
        } else {
            $userdata = array(
                'email'     => Input::get('email'),
                'password'  => Input::get('password')
            );
            if (Auth::attempt($userdata)) {
                return Redirect::to('admin/home');
            } else {               
                return Redirect::to('admin');
            }
        }
    }
 
    public function logout()
    {
        Auth::logout();
        return Redirect::to('admin');
    }

    public function home()
    {
        return View::make('admin.home');
    }
    
    public function laravel()
    {
        return View::make('admin.laravel');
    }
}