<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\WebsiteSettings;

class DiscountsController extends Controller
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

        return view('admin.discounts.index', compact('websitesettings'));
    }

    public function newDiscount(){

        // to include website settings
        $websitesettings = WebsiteSettings::get();

        return view('admin.discounts.create', compact('websitesettings'));
    }

    public function editDiscount(){

        // to include website settings
        $websitesettings = WebsiteSettings::get();

        return view('admin.discounts.edit', compact('websitesettings'));
    }
}
