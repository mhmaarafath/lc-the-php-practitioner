<?php

namespace App\Controllers;

class PagesController {
    public function home(){
    }

    public function about(){
        require view('about');
    }

    public function contact(){
        require view('contact');
    }

}