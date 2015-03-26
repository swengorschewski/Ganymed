<?php

use Ganymed\Controller;

class DashboardController extends Controller {

    /*
     * /dashboard GET route method which checks if the session
     * is authorized to view this page.
     */
    public function index()
    {
        view('dashboard.partials.dashboard')->withLayout('dashboard.layouts.default')->render();
    }

    public function logout()
    {
        $this->session->forget();
        redirect('/login');
    }

}