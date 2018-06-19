<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\WebsiteSettings;
use App\Subscribers;


class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        // to include website settings
        $websitesettings = WebsiteSettings::get();

        $subscribers = Subscribers::get();
        // returns to the view with the website settings compacted
        return view('admin.home.index', compact('websitesettings','subscribers'));
    }

    
}
