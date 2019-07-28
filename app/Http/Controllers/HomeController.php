<?php

namespace App\Http\Controllers;
use App\testing;
use App\User;
use App\training;
use Illuminate\Http\Request;

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
    public function index()

    {
        $name = User::all();
        $data  ["div_survival"]          =training::where('divisi','0')->get();
        $data  ["div_sar"]              = training::where('divisi','1')->get();
        $data  ["div_rc"]               = training::where('divisi','2')->get();
        $data  ["div_survival_test"]    = testing::where('divisi_test','0')->get();
        $data  ["div_sar_test"]         = testing::where('divisi_test','1')->get();
        $data  ["div_rc_test"]          = testing::where('divisi_test','2')->get();
        return view('main',$data,$name);
    }
}
