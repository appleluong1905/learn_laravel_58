<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        return view('backend.dashboard.index');
    }

    /**
     * Show the application listProduct.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function listProduct()
    {
        return view('backend.products.index');
    }

}
