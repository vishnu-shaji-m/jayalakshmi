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

<<<<<<< HEAD
    /**
     * Display the brides page.
=======
      /**
     * Display the index page.
>>>>>>> e7019b4d7e3e85e880d6046cec9cdc9b866cb600
     *
     * @author [Your Name Here]
     * @return \Illuminate\View\View
     */
<<<<<<< HEAD
    
    public function brides()
    {
        return view('brides');
    }
}
=======
    public function categoryListing()
    {
        return view('categoryListing');
    }

    
      /**
     * Display the index page.
     *
     * @author [Your Name Here]
     * @return \Illuminate\View\View
     */
    public function subCategoryListing()
    {
        return view('subCategoryListing');
    }
}
>>>>>>> e7019b4d7e3e85e880d6046cec9cdc9b866cb600
