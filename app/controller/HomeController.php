<?php


use Ganymed\Controller;

class HomeController extends Controller {

    public function index()
    {
        //view('partials.home')->withLayout('layouts.default')->render();

        pd(template('partials.test')->display());
        //pd(template('partials.expression')->display());


    }

}