<?php

namespace App\Controllers;

class PagesController {
    /**
     * Show the home ( add phone  & email ) page.
     */
    public function home() {
        
        return view('index', ['pageTitle' => "Add your phone number"]);
    }
    /**
     * Show "Retrieve your phone number" page
     */
    public function retrive() {

        return view('retrive', ['pageTitle' => "Retrieve your phone number"]);
    }
    /**
     * Show "Not found" page
     */
    public function notFound404() {

        return view('404', ['pageTitle' => "Page not found"]);
    }
}