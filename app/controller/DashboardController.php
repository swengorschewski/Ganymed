<?php

use Ganymed\Controller;

class DashboardController extends Controller {

    /*
     * /dashboard GET route method which checks if the session
     * is authorized to view this page.
     */
    public function index()
    {
        $view = view('dashboard.partials.dashboard')->with(['session' => $this->session, 'blub' => 'test']);
        $this->response->fromView($view);
    }

    public function logout()
    {
        $this->session->forget();
        redirect('/login');
    }

}