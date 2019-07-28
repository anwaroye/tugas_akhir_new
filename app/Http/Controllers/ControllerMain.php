<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\testing;
use App\training;

use Illuminate\Http\Request;


class ControllerMain extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()) {
            $main = "main";
            $di  ["div_survival"]         = training::where('divisi','0')->get();
            $di  ["div_sar"]              = training::where('divisi','1')->get();
            $di  ["div_rc"]               = training::where('divisi','2')->get();
            $di  ["div_survival_test"]    = testing::where('divisi_test','0')->get();
            $di  ["div_sar_test"]         = testing::where('divisi_test','1')->get();
            $di  ["div_rc_test"]          = testing::where('divisi_test','2')->get();
           
            return view ($main,$di);
            # code...
        }
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
