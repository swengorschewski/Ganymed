<?php


use Ganymed\Controller;

class HomeController extends Controller {

    public function index()
    {
        $this->response->fromView(view('partials.home'));
    }

}