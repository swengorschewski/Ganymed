<?php

use Ganymed\Auth\Auth;
use Ganymed\Http\Request;
use Ganymed\Services\Session;

class AuthController {

    protected $session;
    protected $auth;

    /**
     * Constructor with type hinted session and auth classes.
     *
     * @param Session $session
     * @param Auth $auth
     */
    function __construct(Session $session, Auth $auth)
    {
        $this->session = $session;
        $this->auth = $auth;
    }

    /**
     * /login GET route method.
     */
    public function login()
    {
        if ($this->auth->check()) {
            redirect('/dashboard');
        } else {
            $session = $this->session;
            view('dashboard.partials.login')->withData(compact('session'))->render();
        }
    }

    /**
     * /login POST route method with type hinted request.
     * Attempts a login with the provided credentials.
     *
     * @param Request $request
     */
    public function doLogin(Request $request)
    {
        $input = $request->getInput();
        if ($this->auth->attempt($input['email'], $input['password'])) {
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