<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CostumersController extends Controller
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
        return view('admin.costumers.index');
    }

    public function newCostumer(){
        return view('admin.costumers.create');
    }

    public function editCostumer(){
        return view('admin.costumers.edit');
    }
}
