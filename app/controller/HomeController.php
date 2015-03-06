<?php


class HomeController {

    public function index()
    {
        view('partials.home')->withLayout('layouts.default')->render();
    }

}