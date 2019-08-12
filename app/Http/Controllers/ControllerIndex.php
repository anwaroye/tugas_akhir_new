<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use\App\training;
use Session;
use App\Imports\TrainingImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use\App\testing;

class ControllerIndex extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()) {
            $title = 'training';
            $di  ["div_survival"]          =training::where('divisi','0')->get();
            $di  ["div_sar"]              = training::where('divisi','1')->get();
            $di  ["div_rc"]               = training::where('divisi','2')->get();
            $di  ["div_survival_test"]    = testing::where('divisi_test','0')->get();
            $di  ["div_sar_test"]         = testing::where('divisi_test','1')->get();
            $di  ["div_rc_test"]          = testing::where('divisi_test','2')->get();
           
            $dtraining = training::orderBy('id','desc')->paginate(100); 
            return view ('page.index',$di, compact('dtraining','title'));
       
            # code...
        }
        return view('auth.login');
    }

    public function import_excel(Request $request)
    {
        // validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
        // menangkap file excel
        // $file = $request->file('file')->store('excel-files');
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
		$file->move('file_training',$nama_file);
 
        // import data
        // dd($file);
        
        Excel::import(new TrainingImport, public_path('/file_training/'.$nama_file));
		// notifikasi dengan session
		Session::flash('sukses','Data Training Berhasil Diimport!');
 
		// alihkan halaman kembali
		return redirect('/index');
	
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
