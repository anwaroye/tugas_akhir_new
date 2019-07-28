
<!DOCTYPE html>
<html>
<head>
	<title>Hi</title>
</head>
 
<body>
	@foreach ($ctk as $i)
	<th>
	<td> {{[$i->nama_test]}}</td>
	</th>
		
	@endforeach

        
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