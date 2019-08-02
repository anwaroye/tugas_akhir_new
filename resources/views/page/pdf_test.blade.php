
<!DOCTYPE html>
<html>
<head>
	<title>Hi</title>
</head>
 
<body>
	
<form action="{{route('pdf',[$cetak->id])}}" method="POST">
		{{ csrf_field() }}

		<div class="form-group">
            <label>Nama event</label>
            <input value="{{$pdf->n_gh_test}}" type="text" class="form-control" id="title_event" required="required" placeholder="Enter nama event" name="n_gh_test">
        </div>
	</form>
	
        
        {{-- <input id="id" type="text" class="form-control"  data-tag-class="label label-primary" value="id" disabled/> --}}
        {{-- <input id="nama_test" type="text" class="form-control form-control-invisible"  data-tag-class="label label-primary" value="" disabled/> --}}
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	@foreach ($cetakPdf as $pdf)
	{{-- <td>{{$i->gh_test}}</td> --}}
		
	@endforeach
 
</body>
</html>