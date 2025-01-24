<?php

namespace App\Http\Controllers;

class FrontendController extends Controller
{
    /**
     * Display the index page.
     *
     * @author [Your Name Here]
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Display the index page.
     *
     * @author [Your Name Here]
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Display the brides page.
     *
     * @author [Your Name Here]
     * @return \Illuminate\View\View
     */
    
    public function brides()
    {
        return view('brides');
    }
}