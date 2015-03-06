<?php

use Ganymed\Services\Auth;
use Ganymed\Services\Session;

class DashboardController {

    private $session;
    private $auth;

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

    /*
     * /dashboard GET route method which checks if the session
     * is authorized to view this page.
     */
    public function index()
    {
        if ($this->auth->check()) {
            view('dashboard.partials.dashboard')->withLayout('dashboard.layouts.default')->render();
        } else {
            redirect('/login');
        }
    }

    public function logout()
    {
        $this->session->forget();
        redirect('/login');
    }

}