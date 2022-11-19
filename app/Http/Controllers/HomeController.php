<?php



namespace App\Htpp\Controllers;


class HomeController{


    public function index()
    {
        return new view('home');
    }
}
