
<!DOCTYPE html>
<html>
<head>
	<title>Hi</title>
	<style>
		
   div {
     width:100%;
	 height: 50%;
	 align:center;
	 padding :20px;
	 /* margin : 20px; */

	 
	 
	 
   }
   .garis_tepi1 {
	 border: 2px solid black;
	 
   }
   .tabel{
	   align : center;
   }
 
			</style>

</head>
 
<body>
	@php
	$atribute = array('Gunung Hutan', 'PPGG','SAR', 'RC','Sebrang Kering');

	
	@endphp
		@php
		$no= 1;
	@endphp
	@php
		for($x=0;$x<count($atribute);$x++){
	echo $atribute[$x]."<br/>";
}
	@endphp
	@foreach ($data as $p)
  <p><pre>  Nama       	:  {{$p->nama_test}} </pre>  </p> 
 	<pre>  Nis        		:  {{$p->nis_test}} </pre>  
 <div class="garis_tepi1">

		<table style="width:100%">
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
						
						@if($p->minat_test <1)
						<td> Survival</td>
						@elseif($p->minat_test == 1)
						<td> SAR</td>
						@elseif($p->minat_test > 1)
						<td> RC</td>
						@elseif($p->minat_test > 2)
						<td> tidak terdefinisi</td>
						@else
							<td> nilai tidak ada </td>

						 @endif
						
						 @if($p->divisi_test <1)
						<td> SURVIVAL</td>
						@elseif($p->divisi_test == 1)
						<td> SAR </td>
						@elseif($p->divisi_test > 1)
						<td> RC</td>
						@elseif($p->divisi_test > 2)
						<td>Nilai tidak terdefinisi</td>
						@else
							<td> nilai tidak ada </td>
						 @endif
						
					</tr>
					<tr>
					<td>{{$no++}}</td>
					<td>SAR</td>
					
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
					
					@if($p->minat_test <1)
					<td> Survival</td>
					@elseif($p->minat_test == 1)
					<td> SAR</td>
					@elseif($p->minat_test > 1)
					<td> RC</td>
					@elseif($p->minat_test > 2)
					<td> tidak terdefinisi</td>
					@else
						<td> nilai tidak ada </td>

					 @endif
					
					 @if($p->divisi_test <1)
					<td> SURVIVAL</td>
					@elseif($p->divisi_test == 1)
					<td> SAR </td>
					@elseif($p->divisi_test > 1)
					<td> RC</td>
					@elseif($p->divisi_test > 2)
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