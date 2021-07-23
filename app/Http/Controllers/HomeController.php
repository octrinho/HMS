<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function admin_home()
    {
        return view('admin.admin_home');
    }

    public function doctor_home()
    {
        return view('doctor.doctor_home');
    }
    public function receptionist_home()
    {
        return view('reception.reception_home');
    }
}
