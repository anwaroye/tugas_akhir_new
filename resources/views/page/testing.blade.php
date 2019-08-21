@extends('main')
@section('title',$title)

@section('index')


<section class="content">
<div class="col-sm-12">
        <!-- Horizontal Form -->
    
        <div class="col-md-6 col-sm-6 col-sm-3">
            <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Input Testing Form</h3>
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
                                <input type="number" value="{{old('nis_test') }}" id="nis_test" name="nis_test"
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
                                                    <label for="text-input" class=" form-control-label">Nilai Sebrang Kering</label>
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
</div>
<div class="row">
        @if ($message = Session::get('sukses'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button> 
            <strong>{{ $message }}</strong>
        </div>
        @endif
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
            <h3> <sup style="font-size: 20px">%</sup></h3>

              <p>Bounce Rate</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
       
        <!-- ./col -->
       
        <!-- ./col -->
      </div>
    </div>

</section>

        <!-- /.box -->
        
      

     
<section class="content">
    {{-- <div class="col-md-12"> --}}
            <div class="row">
              <div class="col-md-12 col-xs-12 col-sm-6">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Data Testing</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-hover">
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
                      @if($dttestings->divisi_test <1)
                        <td> Survival</td>
                        @elseif($dttestings->divisi_test == 1)
                        <td> SAR</td>
                        @elseif($dttestings->divisi_test > 1)
                        <td> RC</td>
                        @elseif($dttestings->divisi_test>2)
                        <td>nilai tidak terdefinisikan</td>
                        @else
                        <td> nilai tidak ada </td>
                               @endif
  
                    {{-- <td>{{$dttestings->divisi_test}}</td> --}}
                      <td>
                              <div class="card-body">
                              <form  action="{{route('deltes',[$dttestings->id])}}"  method="post" style="display: inline-block;">
                                       {{ csrf_field() }}
                                      
                              <button type="submit" onClick="return confirm('Yakin ingin menghapus data ini ?');" class="btn btn-danger btn-sm">
                              <a href=""></a>
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
                                   @elseif($dttestings->n_gh_test_test>2)
                                    data-n_gh_test="nilai tidak terdefinisikan"
                                   @else
                                   data-n_gh_test="data tidak ada"
                                   @endif

                                   @if ($dttestings->n_ppgd_test <1)
                                   data-n_ppgd_test="rendah"  
                                   @elseif ($dttestings->n_ppgd_test == 1)  
                                   data-n_ppgd_test="sedang"  
                                   @elseif($dttestings->n_ppgd_test > 1)
                                   data-n_ppgd_test ="tinggi"
                                   @elseif($dttestings->n_ppgd_test>2)
                                    data-n_ppgd_test="nilai tidak terdefinisikan"
                                   @else
                                   data-n_ppgd_test="data tidak ada"
                                   @endif

                                   @if ($dttestings->n_sar_test <1)
                                   data-n_sar_test="rendah"  
                                   @elseif ($dttestings->n_sar_test == 1)  
                                   data-n_sar_test="sedang"  
                                   @elseif($dttestings->n_sar_test > 1)
                                   data-n_sar_test ="tinggi"
                                   @elseif($dttestings->n_sar_test>2)
                                    data-n_sar_test="nilai tidak terdefinisikan"
                                   @else
                                   data-n_sar_test="data tidak ada"
                                   @endif

                                   @if ($dttestings->n_impk_test <1)
                                   data-n_impk_test="rendah"  
                                   @elseif ($dttestings->n_impk_test == 1)  
                                   data-n_impk_test="sedang"  
                                   @elseif($dttestings->n_impk_test > 1)
                                   data-n_impk_test ="tinggi"
                                   @elseif($dttestings->n_impk_test>2)
                                    data-n_impk_test="nilai tidak terdefinisikan"
                                   @else
                                   data-n_impk_test="data tidak ada"
                                   @endif

                                   @if ($dttestings->n_repling_test <1)
                                   data-n_repling_test="rendah"  
                                   @elseif ($dttestings->n_repling_test == 1)  
                                   data-n_repling_test="sedang"  
                                   @elseif($dttestings->n_repling_test > 1)
                                   data-n_repling_test ="tinggi"
                                   @elseif($dttestings->n_repling_test>2)
                                    data-n_repling_test="nilai tidak terdefinisikan"
                                   @else
                                   data-n_repling_test="data tidak ada"
                                   @endif

                                   @if ($dttestings->n_sebrang_kering_test <1)
                                   data-n_sebrang_kering_test="rendah"  
                                   @elseif ($dttestings->n_sebrang_kering_test == 1)  
                                   data-n_sebrang_kering_test="sedang"  
                                   @elseif($dttestings->n_sebrang_kering_test > 1)
                                   data-n_sebrang_kering_test ="tinggi"
                                   @elseif($dttestings->n_sebrang_kering_test>2)
                                    data-n_sebrang_kering_test="nilai tidak terdefinisikan"
                                   @else
                                   data-n_sebrang_kering_test="data tidak ada"
                                   @endif

                                   @if ($dttestings->minat_test <1)
                                   data-minat_test="Survival"  
                                   @elseif ($dttestings->minat_test == 1)  
                                   data-minat_test="Sar"  
                                   @elseif($dttestings->minat_test > 1)
                                   data-minat_test ="Rc"
                                   @elseif($dttestings->minat_test>2)
                                    data-minat_test="nilai tidak terdefinisikan"
                                   @else
                                   data-minat_test="data tidak ada"
                                   @endif

                                   @if ($dttestings->divisi_test <1)
                                   data-divisi_test="Survival"  
                                   @elseif ($dttestings->divisi_test == 1)  
                                   data-divisi_test="Sar"  
                                   @elseif($dttestings->divisi_test > 1)
                                   data-divisi_test ="Rc"
                                   @elseif($dttestings->divisi_test>2)
                                    data-divisi_test="nilai tidak terdefinisikan"
                                   @else
                                   data-divisi_test="data tidak ada"
                                   @endif

                                       
                                  
                                    data-nis_test="{{$dttestings->nis_test}}"                                          
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
                                        <a href="{{route('pdf',[$dttestings->id])}}" target="_blank" type="button" class="btn btn-success">
                                        {{-- <a href="/testing/pdf/{{$dttestings->id}}" class="btn btn-success"> --}}
                                        <i class="btn-success fa fa-print"></i>

                                        </a>

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



