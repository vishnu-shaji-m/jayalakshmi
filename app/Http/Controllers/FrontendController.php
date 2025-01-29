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
     * Display the productList page. 
     *
     * @author [Your Name Here]
     * @return \Illuminate\View\View
     */
    public function productList()
    {
        return view('productList');
  
    }
            /**
     * Display the bookSlot page.
     *
     * @author [Your Name Here]
     * @return \Illuminate\View\View
     */
    public function bookSlot()
    {
        return view('bookSlot');
    }

         /**
    * Display the career page.
    *
    * @author [Your Name Here]
    * @return \Illuminate\View\View
        */

    public function career()
    {
        return view('career');
    }

           /**
    * Display the categoryListing page.
    *
    * @author [Your Name Here]
    * @return \Illuminate\View\View
        */

    public function categoryListing()
    {
        return view('categoryListing');
    }

           /**
    * Display the subCategoryListing page.
    *
    * @author [Your Name Here]
    * @return \Illuminate\View\View
        */

    public function subCategoryListing()
    {
        return view('subCategoryListing');
    }
}