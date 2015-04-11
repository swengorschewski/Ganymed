<?php

use Ganymed\Auth\Auth;
use Ganymed\Controller;
use Ganymed\Http\Request;

class AuthController extends Controller {

    /**
     * /login GET route method.
     */
    public function login()
    {
        $session = $this->session;
        $this->response->fromView(view('dashboard.partials.login')->with(compact('session')));
    }

    /**
     * /login POST route method with type hinted request.
     * Attempts a login with the provided credentials.
     *
     * @param Request $request
     * @param Auth $auth
     */
    public function doLogin(Request $request, Auth $auth)
    {
        $input = $request->getInput();
        if ($auth->attempt($input['email'], $input['password'])) {
            flash('Login successful');
            redirect('/dashboard');
        } else {
            redirect('/login');
        }

    }

    /**
     * /logout POST route.
     * Destroy the current session and redirects back to the login page.
     */
    public function logout()
    {
        $this->session->forget();
        redirect('/login');
    }

}