
<!DOCTYPE html>
<html>
<head>
	<title>print pdf</title>
	<style>
		 
   	
	.garis_logo{
	width:100%;
	height: 5%;
	padding :15px;
	border: 2px solid black;


	}
	.logo{
		width: 100%;
		align:center;
	}
   .garis_tepi1 {
	width:100%;
	 height: 50%;
	 align:center;
	 padding :20px;
	 border: 2px solid black;
	 
   }
   .tabel{
	   align : center;
   }
   

   
    table,th, td {
		border: 1px solid black;
  	border-collapse: collapse;
	}
	th  {
  	padding: 15px;
	  text-align: center;
	}
	td{
		padding: 15px;
	}
   text{
	   size: 10px;
   }
.data{
	
  
	  


}

			</style>

</head>
 
<body>
	
	
		@php
		$no= 1;
    @endphp
        <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>GH</th>
                  <th>PPGD</th>
                  <th>SAR</th>
                  <th>IMPK</th>
                  <th>Repling</th>
                  <th>SK</th>
                  <th>Minat</th>
                  <th>Divisi</th>
                  
                  
                  
                </tr>
                </thead>
                <tbody>
                        @php
                        $no= 1;
                    @endphp
                    @foreach ($pdf_trai as $p)

                    <tr>

                        <td>{{$no++}}</td>
                        @if($p->nilai_gh <1)
                        <td> rendah</td>
                        @elseif($p->nilai_gh == 1)
                        <td> sedang</td>
                        @elseif($p->nilai_gh > 1)
                            <td> tinggi</td>
                        @else
                            <td> nilai tidak ada </td>
                         @endif
                            {{-- ==========gh==================== --}}     
                            @if($p->nilai_ppgd <1)
                        <td> rendah</td>
                        @elseif($p->nilai_ppgd == 1)
                        <td> sedang</td>
                        @elseif($p->nilai_ppgd > 1)
                        <td> tinggi</td>
                        @else
                            <td> nilai tidak ada </td>
                         @endif
                         {{-- --------------------------------------------- --}}
                          {{-- ==========ppgd==================== --}}   
                          {{-- ---------------------------------------------------- --}}
                          @if($p->nilai_sar <1)
                          <td> rendah</td>
                          @elseif($p->nilai_sar == 1)
                          <td> sedang</td>
                          @elseif($p->nilai_sar > 1)
                          <td> tinggi</td>
                          @else
                              <td> nilai tidak ada </td>
                           @endif
                          {{-- ---------------------------------------------------- --}}

                            {{-- ==========sar==================== --}}  
                          {{-- ---------------------------------------------------- --}}

                          
                             @if($p->nilai_impk <1)
                        <td> rendah</td>
                        @elseif($p->nilai_impk == 1)
                        <td> sedang</td>
                        @elseif($p->nilai_impk > 1)
                        <td> tinggi</td>
                        @else
                            <td> nilai tidak ada </td>
                         @endif
                          {{-- ---------------------------------------------------- --}}

                          {{-- ==========impk==================== --}} 
                          {{-- ---------------------------------------------------- --}}

                          @if($p->nilai_repling <1)
                          <td> rendah</td>
                          @elseif($p->nilai_repling == 1)
                          <td> sedang</td>
                          @elseif($p->nilai_repling > 1)
                          <td> tinggi</td>
                          @else
                              <td> nilai tidak ada </td>
                           @endif
                            {{-- ---------------------------------------------------- --}}

                            {{-- ==========repling==================== --}} 
                            {{-- ---------------------------------------------------- --}}

                            @if($p->nilai_sebrang_kering <1)
                          <td> rendah</td>
                          @elseif($p->nilai_sebrang_kering == 1)
                          <td> sedang</td>
                          @elseif($p->nilai_sebrang_kering > 1)
                          <td> tinggi</td>
                          @else
                              <td> nilai tidak ada </td>
                           @endif

                            {{-- ==========sebrNg kering==================== --}} 
                            @if($p->minat <1)
                            <td> survival</td>
                            @elseif($p->minat == 1)
                            <td> sar</td>
                            @elseif($p->minat > 1)
                            <td> rc</td>
                            @else
                                <td> nilai tidak ada </td>
                             @endif

                              {{-- ==========minat==================== --}} 
                              @if($p->divisi <1)
                              <td> SURVIVAL</td>
                              @elseif($p->divisi == 1)
                              <td> SAR</td>
                              @elseif($p->divisi > 1)
                              <td> RC</td>
                              @else
                                  <td> nilai tidak ada </td>
                               @endif
  
                                {{-- ==========minat==================== --}} 
                            </td>
                    </tr>
                    </tr>
                    @endforeach
                
               
                </tbody>
                <tfoot>
                <tr>
                        <th>No</th>
                        <th>GH</th>
                        <th>PPGD</th>
                        <th>SAR</th>
                        <th>IMPK</th>
                        <th>Repling</th>
                        <th>SK</th>
                        <th>Minat</th>
                        <th>Divisi</th>
                        
                </tr>
                </tfoot>
              </table>
	
</body>
</html>