<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use\App\testing;
use\App\training;
use PDF;


use Illuminate\Http\Request;

class ControllerTesting extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth::user()) {
            $title='testing';
        $da  ["div_survival"]          =training::where('divisi','0')->get();
        $da  ["div_sar"]              = training::where('divisi','1')->get();
        $da  ["div_rc"]               = training::where('divisi','2')->get();
        $da  ["div_survival_test"]    = testing::where('divisi_test','0')->get();
        $da  ["div_sar_test"]         = testing::where('divisi_test','1')->get();
        $da  ["div_rc_test"]          = testing::where('divisi_test','2')->get();
         $dttesting = testing::orderBy('id','DESC')->paginate(100);
            
            return view('page.testing',$da,
             compact('dttesting','title',));
    }
    return view('auth/login');
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
        $messages = [
            'required' => ' wajib diisi ',
            'min' => ':attribute harus diisi minimal :min karakter ya ',
            'max' => ':attribute harus diisi maksimal :max karakter ya ',
        ];
        $this->validate($request, [
            'nama'=> 'required',
            'nis_test'=>'required',
            'gh'=>'required',
            'ppgd'=>'required',
            'sar'=>'required',
            'impk'=>'required',
            'repling'=>'required',
           'sk'=>'required',
           'minat'=>'required',
        ],$messages);

        //   $dttesting= new data();
        //   $dttesting->nilai_gh = $request->get('gh');
        //   $dttesting->nilai_ppgd = $request->get('ppgd');
        //   $dttesting->nilai_sar = $request->get('sar');
        //   $dttesting->nilai_impk = $request->get('impk');
        //   $dttesting->nilai_repling = $request->get('repling');
        //   $dttesting->nilai_sebrang_kering = $request->get('sk');
        //   $dttesting->minat = $request->get('minat');
        //   $dttesting->jenis_data ='1';
         
         $data[0]= $request->get('gh');
         $data[1]= $request->get('ppgd');
         $data[2]= $request->get('sar');
         $data[3]= $request->get('impk');
         $data[4]= $request->get('repling');
         $data[5]= $request->get('sk');
         $minat= $request->get('minat');
         $atribut = $this->kat_atribut($data);

         $data_nb = array(  'gh'=>$atribut[0],
                            'ppgd'=>$atribut[1],
                            'sar'=>$atribut[2],
                            'impk'=>$atribut[3],
                            'repling'=>$atribut[4],
                            'sk'=>$atribut[5],
                            'minat'=>$minat);
        $hasil = $this->nb($data_nb);

          $dttesting= new testing();
          $dttesting->nama_test = $request->get('nama');
          $dttesting->nis_test = $request->get('nis_test');
          $dttesting->n_gh_test = $atribut[0];
          $dttesting->n_ppgd_test = $atribut[1];
          $dttesting->n_sar_test = $atribut[2];
          $dttesting->n_impk_test = $atribut[3];
          $dttesting->n_repling_test = $atribut[4];
          $dttesting->n_sebrang_kering_test = $atribut[5];
          $dttesting->minat_test = $minat;
          $dttesting->divisi_test = $hasil['hasil'];
    //    dd($dttesting);

       
          $dttesting->save();

    //       var_dump(request('id_event'));
          return redirect()->route('testing')->with('alert-success', 'data berhasil dimasukan');
 
    }
    private function kat_atribut($data){
		for($i=0; $i<count($data); $i++){
			switch ($data[$i]) {
				case ($data[$i] <= 44):
					$x[$i] = 0; 
					break;
				case ($data[$i] <= 84):
					$x[$i] = 1; 
					break;
				case ($data[$i] > 84):
					$x[$i] = 2; 
					break;
				default:
					$x[$i] = "data tidak ada!";
					break;
			}
		}
		return $x;
    }
    

    private function nb($data){
		$gh = $data['gh'];
		$ppgd = $data['ppgd'];
		$n_sar = $data['sar'];
		$impk = $data['impk'];
        $repling = $data['repling'];
		$sk = $data['sk'];
        $minat = $data['minat']; 
        $table_data  = training::get();       
        $tot_row = $table_data->count();
        $survival = training::where('divisi',0);
        $survival_row = $survival->count();
        $sar = training::where('divisi',1);
        $sar_row = $sar->count();
        $rc = training::where('divisi',2);
        $rc_row = $rc->count();
        
		$tot_gh_survival = training::where('nilai_gh',$gh)->where('divisi','0')->count();
		$p_gh_survival = $tot_gh_survival / $survival_row;
		$tot_gh_sar = training::where('nilai_gh',$gh)->where('divisi',1)->count();
		$p_gh_sar = $tot_gh_sar / $sar_row;
		$tot_gh_rc = training::where('nilai_gh',$gh)->where('divisi',2)->count();
		$p_gh_rc = $tot_gh_rc / $rc_row;

		$tot_ppgd_survival = training::where('nilai_ppgd',$ppgd)->where('divisi',0)->count();
		$p_ppgd_survival = $tot_ppgd_survival / $survival_row;
		$tot_ppgd_sar = training::where('nilai_ppgd',$ppgd)->where('divisi',1)->count();
		$p_ppgd_sar = $tot_ppgd_sar / $sar_row;
		$tot_ppgd_rc = training::where('nilai_ppgd',$ppgd)->where('divisi',2)->count();
		$p_ppgd_rc = $tot_ppgd_rc / $rc_row;

		$tot_sar_survival = training::where('nilai_sar',$n_sar)->where('divisi',0)->count();
		$p_sar_survival = $tot_sar_survival / $survival_row;
		$tot_sar_sar = training::where('nilai_sar',$n_sar)->where('divisi',1)->count();
		$p_sar_sar = $tot_sar_sar / $sar_row;
		$tot_sar_rc = training::where('nilai_sar',$n_sar)->where('divisi',2)->count();
		$p_sar_rc = $tot_sar_rc / $rc_row;

		$tot_impk_survival = training::where('nilai_impk',$impk)->where('divisi',0)->count();
		$p_impk_survival = $tot_impk_survival / $survival_row;
		$tot_impk_sar = training::where('nilai_impk',$impk)->where('divisi',1)->count();
		$p_impk_sar = $tot_impk_sar / $sar_row;
		$tot_impk_rc = training::where('nilai_impk',$impk)->where('divisi',2)->count();
		$p_impk_rc = $tot_impk_rc / $rc_row;

		$tot_repling_survival = training::where('nilai_repling',$repling)->where('divisi',0)->count();
		$p_repling_survival = $tot_repling_survival / $survival_row;
		$tot_repling_sar = training::where('nilai_repling',$repling)->where('divisi',1)->count();
		$p_repling_sar = $tot_repling_sar / $sar_row;
		$tot_repling_rc = training::where('nilai_repling',$repling)->where('divisi',2)->count();
        $p_repling_rc = $tot_repling_rc / $rc_row;
        
        $tot_sk_survival = training::where('nilai_sebrang_kering',$sk)->where('divisi',0)->count();
		$p_sk_survival = $tot_gh_survival / $survival_row;
		$tot_sk_sar = training::where('nilai_sebrang_kering',$sk)->where('divisi',1)->count();
		$p_sk_sar = $tot_sk_sar / $sar_row;
		$tot_sk_rc = training::where('nilai_sebrang_kering',$sk)->where('divisi',2)->count();
        $p_sk_rc = $tot_sk_rc / $rc_row;
        
		$tot_minat_survival = training::where('minat',$minat)->where('divisi',0)->count();
		$p_minat_survival = $tot_minat_survival / $survival_row;
		$tot_minat_sar = training::where('minat',$minat)->where('divisi',1)->count();
		$p_minat_sar = $tot_minat_sar / $sar_row;
		$tot_minat_rc = training::where('minat',$minat)->where('divisi',2)->count();
		$p_minat_rc = $tot_minat_rc / $rc_row;


        $x_survival = $p_gh_survival * $p_ppgd_survival * $p_sar_survival * $p_impk_survival * $p_repling_survival * $p_sk_survival * $p_minat_survival;
        $x_sar      = $p_gh_sar * $p_ppgd_sar * $p_sar_sar * $p_impk_sar * $p_repling_sar * $p_sk_sar * $p_minat_sar;
        $x_rc       = $p_gh_rc * $p_ppgd_rc * $p_sar_rc * $p_impk_rc * $p_repling_rc * $p_sk_rc * $p_minat_rc;
        
        
		$b_survival       = $survival_row / $tot_row;
		$b_sar            = $sar_row / $tot_row;
		$b_rc             = $rc_row / $tot_row;

		$p_survival = $x_survival * $b_survival;
		$p_sar = $x_sar * $b_sar;
		$p_rc = $x_rc * $b_rc;

		$data['survival'] = $p_survival;
		$data['sar'] = $p_sar;
		$data['rc'] = $p_rc;

		if(($p_rc < $p_survival) && ($p_survival > $p_sar)){
			$data['hasil'] = 0;
		}else if(($p_rc < $p_sar) && ($p_sar > $p_survival)){
			$data['hasil'] = 1;
		}else if(($p_sar < $p_rc) && ($p_rc > $p_survival)){
			$data['hasil'] = 2;
		}else{
			$data['hasil'] = "Error";
		}
		return $data;
	}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        
            // $show = testing::findOrFail(id);
            // return view('page.show',compact('show'));
        
        
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
        {
            $deltes = testing::findOrFail($id);
            $deltes->delete();
            return redirect()->route('testing')->with('alert', 'data berhasil di hapus');
           // code...
         }
    }
    public function generatePDF(Request $request, $id)
 
    {
        $pdf = testing::findOrFail($id);
      $pdf->n_gh_test=$request->n_gh_test;
    //   $pdf->location_event=$request->location_event;
    //   $pdf->desc_event=$request->desc_event;
      $success = $pdf->save();

      if($success){
        return redirect()->route('event')->with('alert', 'data berhasil dimasukan');

      }else{
        return redirect()->route('testing')->with('alert','data tidak berhasil dimasukan');
      }
        $pdf->reset();
        return redirect()->route('testing');
       





        // $cetakPdf = testing::where('testing')->join('gh_test')->select('gh_test')->get();
        // $data = testing::get(['n_gh_test']);
        // $data = testing::all();
 
        // $pdf = PDF::loadView('page.pdf_test','data');
        // >setPaper('a4','landscape');
        // return $pdf->download('print-test.pdf');
        // return $pdf->stream();
    }
    public function cetak($id)
    {
        // $ctk = testing::where('');
        $cetak = testing::findOrFail($id);
    	$pdf = PDF::loadview('page.pdf_test',$cetak);
        // return $pdf->download('page.pdf_test',);
        return $pdf->stream();
        

    }
}
