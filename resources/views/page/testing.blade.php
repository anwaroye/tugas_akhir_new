@extends('main')
@section('title',$title)

@section('index')
<div class="col-md-6">
        <!-- Horizontal Form -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Horizontal Form</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          
            <div class="box-body">
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                             @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                             @endforeach
                        </ul>
                    </div>
                @endif

            
                <form action="{{route('createtesting')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    {{csrf_field()}}
            <div class="row form-group">
                    <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Nama</label>
                        </div>
                       <div class="col-12 col-md-9">
                           <input type="text" id="nama" name="nama"
                               placeholder=" " value="{{old('nama') }}"  class="form-control @error('nama') is-invalid @enderror ">
                           
                       </div>
                    </div>
                    <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">NIS</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="number" value="{{old('nis_test') }}" id="nisn_test" name="nis_test"
                                    placeholder=" " class="form-control">

                            </div>
                        </div>

                               
                                        <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Nilai Gunung
                                                Hutan</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="number" min="0" max="100" id="gh" name="gh"
                                                placeholder=" " value="{{old('gh') }}"  class="form-control @error('gh') is-invalid @enderror ">
            
                                        </div>
            
                                            @error('gh')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                         
                                    </div>
                                    <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Nilai PPGD</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="number" min="0" max="100"value="{{old('ppgd') }}" id="ppgd" name="ppgd"
                                                    placeholder=" " class="form-control">
                
                                            </div>
                                        </div>
                                    
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Nilai SAR</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="number" min="0"value="{{old('sar') }}" max="100" id="sar" name="sar"
                                                    placeholder=" " class="form-control">
                
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Nilai IMPK</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="number" min="0" max="100"value="{{old('impk') }}" id="impk" name="impk"
                                                    placeholder=" " class="form-control">
                
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nilai Repling</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" min="0" max="100"value="{{old('repling') }}" id="repling" name="repling"
                                                        placeholder=" " class="form-control">
                    
                                                </div>
                                            </div>
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nilai Seebrang Kering</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                        <input type="number" min="0" max="100" value="{{old('sk') }}" id="sk" name="sk"
                                                        placeholder=" " class="form-control">
                    
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class="form-control-label">minat</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                            <select name="minat" class="form-control">
                                                                    <option value="">---pilih minat---</option>
                                                                   <option value="0">survival</option>
                                                                   <option value="1">SAR</option>
                                                                   <option value="2">RC</option>
                                                                  </select>
                                                                
                        
                                                    </div>
                                                </div>
                                                
                                      
                    
                                                <div class="box-footer">
                                                        {{-- <button type="submit" class="btn btn-default">Cancel</button> --}}
                                                        <button type="submit" class="btn btn-info pull-right">Submit</button>
                                                      </div>
        </form>

            </div>
            <!-- /.box-body -->
           
            <!-- /.box-footer -->
        </div>
        <!-- /.box -->
        
      </div>
      

       
      <section class="content">
            <div class="row">
              <div class="col-xs-12">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Hover Data Table</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                            <td>No</td>
                            <td>nama</td>                                
                            <td>nis</td>                                
                            <td>[label] Divisi</td>
                            <td>action</td>
                        
                        
                        
                      </tr>
                      </thead>
                      <tbody>
                              
                          @php
                          $no= 1;
                      @endphp
                      @foreach ($dttesting as $dttestings)

                      <tr>

                      <td>{{$no++}}</td>
                      <td>{{$dttestings->nama_test}}</td>
                      <td>{{$dttestings->nis_test}}</td>
                    <td>{{$dttestings->divisi_test}}</td>
                      <td>
                              <div class="card-body">
                                  <form  action=""  method="post" style="display: inline-block;">
                                       {{ csrf_field() }}
                                      
                              <button type="button" class="btn btn-danger btn-sm">
                              {{-- <a href="{{!! url('/print-test', $dttestings->id)!!}}"></a> --}}
                                          <i class="fa fa-trash"></i></button>      
                                       </form>
                                       
                                  <button class="btn btn-primary btn-sm" type="button"
                                  
                                   data-id="{{$dttestings->id}}" 
                                   data-nama_test="{{$dttestings->nama_test}}"                                         data-nama_test="{{$dttestings->nama_test}}"
                                   data-nis_test="{{$dttestings->nis_test}}" 

                                   @if ($dttestings->n_gh_test <1)
                                   data-n_gh_test="rendah"  
                                   @elseif ($dttestings->n_gh_test == 1)  
                                   data-n_gh_test="sedang"  
                                   @elseif($dttestings->n_gh_test > 1)
                                   data-n_gh_test ="tinggi"
                                   @else
                                   data-n_gh_test="data tidak ada"
                                   @endif

                                   @if ($dttestings->n_ppgd_test <1)
                                   data-n_ppgd_test="rendah"  
                                   @elseif ($dttestings->n_ppgd_test == 1)  
                                   data-n_ppgd_test="sedang"  
                                   @elseif($dttestings->n_ppgd_test > 1)
                                   data-n_ppgd_test ="tinggi"
                                   @else
                                   data-n_ppgd_test="data tidak ada"
                                   @endif

                                   @if ($dttestings->n_sar_test <1)
                                   data-n_sar_test="rendah"  
                                   @elseif ($dttestings->n_sar_test == 1)  
                                   data-n_sar_test="sedang"  
                                   @elseif($dttestings->n_sar_test > 1)
                                   data-n_sar_test ="tinggi"
                                   @else
                                   data-n_sar_test="data tidak ada"
                                   @endif

                                   @if ($dttestings->n_impk_test <1)
                                   data-n_impk_test="rendah"  
                                   @elseif ($dttestings->n_impk_test == 1)  
                                   data-n_impk_test="sedang"  
                                   @elseif($dttestings->n_impk_test > 1)
                                   data-n_impk_test ="tinggi"
                                   @else
                                   data-n_impk_test="data tidak ada"
                                   @endif

                                   @if ($dttestings->n_repling_test <1)
                                   data-n_repling_test="rendah"  
                                   @elseif ($dttestings->n_repling_test == 1)  
                                   data-n_repling_test="sedang"  
                                   @elseif($dttestings->n_repling_test > 1)
                                   data-n_repling_test ="tinggi"
                                   @else
                                   data-n_repling_test="data tidak ada"
                                   @endif

                                   @if ($dttestings->n_sebrang_kering_test <1)
                                   data-n_sebrang_kering_test="rendah"  
                                   @elseif ($dttestings->n_sebrang_kering_test == 1)  
                                   data-n_sebrang_kering_test="sedang"  
                                   @elseif($dttestings->n_sebrang_kering_test > 1)
                                   data-n_sebrang_kering_test ="tinggi"
                                   @else
                                   data-n_sebrang_kering_test="data tidak ada"
                                   @endif

                                   @if ($dttestings->minat_test <1)
                                   data-minat_test="rendah"  
                                   @elseif ($dttestings->minat_test == 1)  
                                   data-minat_test="sedang"  
                                   @elseif($dttestings->minat_test > 1)
                                   data-minat_test ="tinggi"
                                   @else
                                   data-minat_test="data tidak ada"
                                   @endif


                                       
                                  
                                                                             
                                   data-n_gh_test="{{$dttestings->n_gh_test}}"                                           
                                   data-n_ppgd_test="{{$dttestings->n_ppgd_test}}"                                           
                                   data-n_sar_test="{{$dttestings->n_sar_test}}"                                           
                                   data-n_impk_test="{{$dttestings->n_impk_test}}"                                           
                                   data-n_repling_test="{{$dttestings->n_repling_test}}"                                           
                                   data-n_sebrang_kering_test="{{$dttestings->n_sebrang_kering_test}}"                                           
                                   data-minat_test="{{$dttestings->minat_test}}"                                           
                                   data-divisi_test="{{$dttestings->divisi_test}}"                                           
                                   
                                   data-toggle="modal" data-target="#mediumModal">
                                      <i class="fa fa-eye"></i>
                                      </button> 
                                      {{-- <button type="button" class="btn btn-success btn-sm" method="post"> --}}
                                      <a href="{{route('cetak',[$dttestings->id])}}" class="btn btn-success">
                                        </a>
                                        <i class="btn-success fa fa-print"></i>
                                                {{-- </button>     --}}
                                                 
                              </div>

                          </td>        
                      </tr>
                          @endforeach
                      
                     
                      </tbody>
                      <tfoot>
                      <tr>
                            <td>No</td>
                            <td>nama</td>                                
                            <td>nis</td>                                
                            <td>[label] Divisi</td>
                            <td>action</td>
                              
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
<!-- Modal Detail Proposal -->


