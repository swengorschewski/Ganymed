<?php


use Ganymed\Controller;

class HomeController extends Controller {

    public function index()
    {
        dd($this->session);
        view('partials.home')->withLayout('layouts.default')->render();
    }

}