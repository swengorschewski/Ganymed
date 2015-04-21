<?php

use Ganymed\Controller;

class HomeController extends Controller {

    public function index()
    {
        $view = view('partials.home');

        $this->response->fromView($view);
    }

}