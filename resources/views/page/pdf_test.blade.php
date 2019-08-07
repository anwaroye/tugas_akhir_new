
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
	{{-- @php
		for($x=0;$x<count($atribute);$x++){
	echo $atribute[$x]."<br/>";
}
	@endphp --}}
	<div class="garis_logo" >
		<center>
				<img src="img/logo-projek.png" width="200" height="50" alt="" />

		</center>
	
	</div>
	 
	@foreach ($data as $p)
	<p></p>
			<p>Nama &nbsp;&nbsp;&nbsp;&nbsp;  : {{$p->nama_test}}      </p>
			<p> NIS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{$p->nis_test}}</p>
			
			
						 
			
 <div class="garis_tepi1">

		<table class="data" style="width:100%">
				<thead>
				  <tr>
					<th scope="col"> NO</th>
					<th scope="col"> MATERI</th>
					<th scope="col"> NILAI</th>
					<th scope="col"> MINAT</th>
					
					<th scope="col"> REKOMENDASI</th>
				  </tr>
				</thead>
				<tbody>
					<tr> 
					<td>{{$no++}}</td>
						<td>Gunung Hutan</td>

						@if($p->n_gh_test <1)
						<td> rendah</td>
						@elseif($p->n_gh_test == 1)
						<td> sedang</td>
						@elseif($p->n_gh_test > 1)
						<td> tinggi</td>
						@elseif($p->n_gh_test > 2)
						<td>Nilai tidak terdefinisi</td>
						@else
							<td> nilai tidak ada </td>

						 @endif
						
						
						<td align="center" rowspan="6" > 
						 @if($p->minat_test <1)
						 <p> Survival</p>
						 @elseif($p->minat_test == 1)
						 <p> SAR</p>
						 @elseif($p->minat_test > 1)
						 <p> RC</p>
						 @elseif($p->minat_test > 2)
						 <p> tidak terdefinisi</p>
						 @else
							 <p> nilai tidak ada </p>
		 
						  @endif
						</td>

						<td align="center" rowspan="6">
						 @if($p->divisi_test <1)
						<p> SURVIVAL</p>
						@elseif($p->divisi_test == 1)
						<p> SAR </p>
						@elseif($p->divisi_test > 1)
						<p> RC</p>
						@elseif($p->divisi_test > 2)
						<p>Nilai tidak terdefinisi</p>
						@else
							<p> nilai tidak ada </p>
						 @endif
						</td>
						
					</tr>
					<tr>
						<td>{{$no++}}</td>
						<td>PPGD</td>
						
					@if($p->n_ppgd_test <1)
					<td> rendah</td>
					@elseif($p->n_ppgd_test == 1)
					<td> sedang</td>
					@elseif($p->n_ppgd_test > 1)
					<td> tinggi</td>
					@elseif($p->n_ppgd_test > 2)
					<td>Nilai tidak terdefinisi</td>
					@else
						<td> nilai tidak ada </td>

					 @endif
						
						</tr>


					<tr>
					<td>{{$no++}}</td>
					<td>SAR</td>
					
					@if($p->n_sar_test <1)
					<td> rendah</td>
					@elseif($p->n_sar_test == 1)
					<td> sedang</td>
					@elseif($p->n_sar_test > 1)
					<td> tinggi</td>
					@elseif($p->n_sar_test > 2)
					<td>Nilai tidak terdefinisi</td>
					@else
						<td> nilai tidak ada </td>

					 @endif
					</tr>
					<tr>
					<td>{{$no++}}</td>
					<td>Ilmu Medan Peta Kompas</td>
					
					@if($p->n_impk_test <1)
					<td> rendah</td>
					@elseif($p->n_impk_test == 1)
					<td> sedang</td>
					@elseif($p->n_impk_test > 1)
					<td> tinggi</td>
					@elseif($p->n_impk_test > 2)
					<td>Nilai tidak terdefinisi</td>
					@else
						<td> nilai tidak ada </td>

					 @endif
					</tr>
					<tr>

					<td>{{$no++}}</td>
					<td>Repling</td>
					
					@if($p->n_repling_test <1)
					<td> rendah</td>
					@elseif($p->n_repling_test == 1)
					<td> sedang</td>
					@elseif($p->n_repling_test > 1)
					<td> tinggi</td>
					@elseif($p->n_repling_test > 2)
					<td>Nilai tidak terdefinisi</td>
					@else
						<td> nilai tidak ada </td>

					 @endif
					</tr>

					<tr>

						<td>{{$no++}}</td>
						<td>Sebrang Kering</td>
						
						@if($p->n_sebrang_kering_test <1)
						<td> rendah</td>
						@elseif($p->n_sebrang_kering_test == 1)
						<td> sedang</td>
						@elseif($p->n_sebrang_kering_test > 1)
						<td> tinggi</td>
						@elseif($p->n_sebrang_kering_test > 2)
						<td>Nilai tidak terdefinisi</td>
						@else
							<td> nilai tidak ada </td>
	
						 @endif
						</tr>

					
					
					
					
					 
					
	
						
	
					
				</tbody>
			  </table>
	
	
		
	@endforeach
			
</div>
	
</body>
</html>