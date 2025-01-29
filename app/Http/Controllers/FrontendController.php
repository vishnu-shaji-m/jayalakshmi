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

    /**
     * Display the brides page.
     *
     * @author [Your Name Here]
     * @return \Illuminate\View\View
     */
    
    public function faq()
    {
        return view('faq');
    }

      /**
     * Display the contact page.
     *
     * @author [Your Name Here]
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('contact');
    }

         /**
     * Display the index page.
     *
     * @author [Your Name Here]
     * @return \Illuminate\View\View
     */
    public function privacy()
    {
        return view('privacy');
    }

         /**
<<<<<<< HEAD
     * Display the productList page.
=======
     * Display the index page.
>>>>>>> 2e82ad5b758bd02c4d65bb24f265a3176732cbdc
     *
     * @author [Your Name Here]
     * @return \Illuminate\View\View
     */
<<<<<<< HEAD
    public function productList()
    {
        return view('productList');
=======
    public function career()
    {
        return view('career');
    }

            /**
     * Display the index page.
     *
     * @author [Your Name Here]
     * @return \Illuminate\View\View
     */
    public function bookSlot()
    {
        return view('bookSlot');
>>>>>>> 2e82ad5b758bd02c4d65bb24f265a3176732cbdc
    }
}
