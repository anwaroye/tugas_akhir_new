
<!DOCTYPE html>
<html>
<head>
	<title>Hi</title>
	<style>
		
   div {
     width:100%;
	 height: 50%;
	 align:center;
	 
	 
	 
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
	
	@foreach ($data as $p)
  <p><pre>  Nama       :  {{$p->nama_test}} </pre>  </p> 
 <pre>  Nis        :  {{$p->nis_test}} </pre>  
 <div class="garis_tepi1">
<div class ="tabel" >
		<table class="table table-bordered" align = "center" width ="100 %">
				<thead>
				  <tr>
					<th scope="col"> Gunung Hutan</th>
					<th scope="col"> PPGD</th>
					<th scope="col"> SAR</th>
					<th scope="col"> IMPK</th>
					<th scope="col"> Rock Climbing</th>
					<th scope="col"> Sebrang Kering</th>
					<th scope="col">Minat</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
					
						@if($p->n_gh_test <1)
						<td> rendah</td>
						@elseif($p->n_gh_test == 1)
						<td> sedang</td>
						@elseif($p->n_gh_test > 1)
							<td> tinggi</td>
						@else
							<td> nilai tidak ada </td>
						 @endif
	
						 @if($p->n_ppgd_test <1)
						 <td> rendah</td>
						 @elseif($p->n_ppgd_test == 1)
						 <td> sedang</td>
						 @elseif($p->n_ppgd_test > 1)
							 <td> tinggi</td>
						 @else
							 <td> nilai tidak ada </td>
						  @endif
						  
						 
						  @if($p->n_sar_test <1)
						  <td> rendah</td>
						  @elseif($p->n_sar_test == 1)
						  <td> sedang</td>
						  @elseif($p->n_sar_test > 1)
							  <td> tinggi</td>
						  @else
							  <td> nilai tidak ada </td>
						   @endif
	
					
				</tbody>
			  </table>
	 </div>
	
		
	@endforeach
			
</div>
	
</body>
</html>