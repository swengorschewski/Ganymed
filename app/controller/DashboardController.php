<?php

use Ganymed\Auth\Auth;
use Ganymed\Controller;

class DashboardController extends Controller {

    /*
     * /dashboard GET route method which checks if the session
     * is authorized to view this page.
     */
    public function index(Auth $auth)
    {
        if ($auth->check()) {
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