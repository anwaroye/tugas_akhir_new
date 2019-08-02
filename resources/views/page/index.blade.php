@extends('main')
@section('title',$title)
    
@section('index')
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>

            {{-- notifikasi form validasi --}}
		@if ($errors->has('file'))
		<span class="invalid-feedback" role="alert">
			<strong>{{ $errors->first('file') }}</strong>
		</span>
    @endif
    
    {{-- notifikasi sukses --}}
		@if ($sukses = Session::get('sukses'))
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button> 
			<strong>{{ $sukses }}</strong>
		</div>
    @endif
    <section> 
      <form role="form" action="{{URL::to('index/import_excel')}}" method="post" enctype="multipart/form-data">
        <button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
          Import Training
        </button>
      </form>
    </section>
    
    

    <!-- Import Excel -->
		<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="post" action="/index/import_excel" enctype="multipart/form-data">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
						</div>
						<div class="modal-body">
 
							{{ csrf_field() }}
 
							<label>Pilih file excel</label>
							<div class="form-group">
								<input type="file" name="file" required="required">
							</div>
 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Import</button>
						</div>
					</div>
				</form>
			</div>
    </div>
    {{-- {{ Form::open(array('url' => 'user/poster/upload_process', 'files' => true, 'method' => 'post')) }}

{{ Form::close() }} --}}
    

   
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
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
                    @foreach ($dtraining as $dtrainings)

                    <tr>

                        <td>{{$no++}}</td>
                        @if($dtrainings->nilai_gh <1)
                        <td> rendah</td>
                        @elseif($dtrainings->nilai_gh == 1)
                        <td> sedang</td>
                        @elseif($dtrainings->nilai_gh > 1)
                            <td> tinggi</td>
                        @else
                            <td> nilai tidak ada </td>
                         @endif
                            {{-- ==========gh==================== --}}     
                            @if($dtrainings->nilai_ppgd <1)
                        <td> rendah</td>
                        @elseif($dtrainings->nilai_ppgd == 1)
                        <td> sedang</td>
                        @elseif($dtrainings->nilai_ppgd > 1)
                        <td> tinggi</td>
                        @else
                            <td> nilai tidak ada </td>
                         @endif
                         {{-- --------------------------------------------- --}}
                          {{-- ==========ppgd==================== --}}   
                          {{-- ---------------------------------------------------- --}}
                          @if($dtrainings->nilai_sar <1)
                          <td> rendah</td>
                          @elseif($dtrainings->nilai_sar == 1)
                          <td> sedang</td>
                          @elseif($dtrainings->nilai_sar > 1)
                          <td> tinggi</td>
                          @else
                              <td> nilai tidak ada </td>
                           @endif
                          {{-- ---------------------------------------------------- --}}

                            {{-- ==========sar==================== --}}  
                          {{-- ---------------------------------------------------- --}}

                          
                             @if($dtrainings->nilai_impk <1)
                        <td> rendah</td>
                        @elseif($dtrainings->nilai_impk == 1)
                        <td> sedang</td>
                        @elseif($dtrainings->nilai_impk > 1)
                        <td> tinggi</td>
                        @else
                            <td> nilai tidak ada </td>
                         @endif
                          {{-- ---------------------------------------------------- --}}

                          {{-- ==========impk==================== --}} 
                          {{-- ---------------------------------------------------- --}}

                          @if($dtrainings->nilai_repling <1)
                          <td> rendah</td>
                          @elseif($dtrainings->nilai_repling == 1)
                          <td> sedang</td>
                          @elseif($dtrainings->nilai_repling > 1)
                          <td> tinggi</td>
                          @else
                              <td> nilai tidak ada </td>
                           @endif
                            {{-- ---------------------------------------------------- --}}

                            {{-- ==========repling==================== --}} 
                            {{-- ---------------------------------------------------- --}}

                            @if($dtrainings->nilai_sebrang_kering <1)
                          <td> rendah</td>
                          @elseif($dtrainings->nilai_sebrang_kering == 1)
                          <td> sedang</td>
                          @elseif($dtrainings->nilai_sebrang_kering > 1)
                          <td> tinggi</td>
                          @else
                              <td> nilai tidak ada </td>
                           @endif

                            {{-- ==========sebrNg kering==================== --}} 
                            @if($dtrainings->minat <1)
                            <td> SAR</td>
                            @elseif($dtrainings->minat == 1)
                            <td> RC</td>
                            @elseif($dtrainings->minat > 1)
                            <td> SURVIVAL</td>
                            @else
                                <td> nilai tidak ada </td>
                             @endif

                              {{-- ==========minat==================== --}} 
                              @if($dtrainings->divisi <1)
                              <td> SAR</td>
                              @elseif($dtrainings->divisi == 1)
                              <td> RC</td>
                              @elseif($dtrainings->divisi > 1)
                              <td> SURVIVAL</td>
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
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
    </section>
      
            
      

@endsection