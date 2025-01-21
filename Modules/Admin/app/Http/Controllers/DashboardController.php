<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Admin\Models\CareerEnquiry;
use Modules\Admin\Models\ContactEnquiry;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactCount = ContactEnquiry::count();
        $careerCount = CareerEnquiry::count();
        $contactEnquiries = ContactEnquiry::orderBy('created_at', 'desc')->limit(5)->get();
        $careerEnquiries = CareerEnquiry::orderBy('created_at', 'desc')->limit(5)->get();

        return view('admin::dashboard.index', compact('contactCount', 'careerCount', 'contactEnquiries', 'careerEnquiries'));
    }
}
