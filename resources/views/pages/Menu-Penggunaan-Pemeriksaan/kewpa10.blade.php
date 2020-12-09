@extends('layout.master')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">  
            <div class="panel panel-default">
                <div id="infoMessage" style="display: none;"></div>
                <div class="panel-heading">
                    <span class="pull-right panel-options">
                        <i class="fa" id="toggle"></i>
                    </span>
                    <h3 class="panel-title">[KEW.PA 10] Kelulusan Aduan Kerosakan </h3>
                </div>
                <div class="panel-body" id="panel">   
                    <form id="findKelulusanAduanRosakListLink2" name="findKelulusanAduanRosakListLink2" action="/ePBT_SSHT/penggunaan/findKelulusanAduanRosakListLink2" method="post" class="form-horizontal">

                        <div class="form-group row">
                            <label class="col-sm-2 control-label">Status Kelulusan : </label>                          
                            <div class="col-sm-3 form-control-static">             
                                <select name="aduank.aduStatus" id="findKelulusanAduanRosakListLink2_aduank_aduStatus" class="form-control input-sm" title="Status Tindakan">
                                    <option value="">&lt;--- Sila Pilih Status ---&gt;</option>
                                    <option value="A">BATAL</option>
                                    <option value="B">DALAM PROSES</option>
                                    <option value="TL">TIDAK LULUS</option>
                                    <option value="T">TANGGUH</option>
                                    <option value="L">LULUS</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 control-label">Jenis Aset :</label>
                            <div class="col-sm-3">
                                <select name="aduank.indukJnshr" id="findKelulusanAduanRosakListLink2_aduank_indukJnshr" class="form-control input-sm" title="Jenis Aset" onchange="this.form.submit()">
                                    <option value="">&lt;--- Sila Pilih Jenis Aset ---&gt;</option>
                                    <option value="I">I : INVENTORI</option>
                                    <option value="H">H : HARTA MODAL</option>
                                </select>
                            </div>
                        </div>
                                
                        <div class="form-group row"> 
                            <div class="col-sm-offset-2 col-sm-5">
                                <button type="submit" class="cari btn btn-primary" style="float: right"><i class="fa fa-search"></i>&nbsp;Carian</button>
                            </div>
                        </div>               
                    </form>
                </div>            
            </div>
        </div>
    </div>
</div>


    
<div class="content">
    <div class="container-fluid">
    <div class="row justify-content-center">
    <div class="col-md-12">
    <div class="card">
    <div class="card-body">
        <h3 class="panel-title">hasil carian</h3>
    <div class="table-responsive">
    <div id="models_wrapper" class="table table-bordered table-sm table-hover table-striped">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="dataTables_length" id="models_length">
                                <label>Paparkan <select name="models_length" aria-controls="models" class="form-control input-sm">
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="-1">Semua</option>
                                </select></label>rekod
                                </div>
                                </div>
                                <div class="col-sm-6">
                                <div id="models_filter" class="dataTables_filter">
                                <label style="float: right">Saring : <input type="search" class="form-control input-sm" placeholder="" aria-controls="models">
                                </label>
                            </div>
                        </div>
                    </div>
        <div class="row">
                <div class="col-sm-12">
                    <table class="table table-bordered table-condensed table-responsive table-striped dataTable no-footer" id="models" role="grid" aria-describedby="models_info" cellpadding="5px;" style="width:100%">
                        <thead class="thead-dark">
                            <tr role="row">
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 5%">No. Aset</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 10%">Jenis Aset</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 30%">Nama Aset</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 10%">Tarikh Aduan</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 10%">Tarikh Kerosakan</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 30%">Pegawai Pelapor</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 40%">Perihal Kerosakan</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 20%">Status</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 10%">Tindakan</th>
                            </tr>
                        </thead>
                            <tbody> 
                                <tr class="empty odd" role="row">
                                    <td colspan="6">Tiada rekod dijumpai.</td>
                                </tr>
                            </tbody>
                    </table>
                </div>
        </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="dataTables_info" id="models_info" role="status" aria-live="polite">Memaparkan 1 hingga 1 rekod daripada 1 rekod</div>
        </div>
        <div class="col-sm-12">
            <div class="dataTables_paginate paging_simple_numbers">
                <button class="button1 button-next" style="float: left">kembali</button>
                <button class="button1 button-next" style="float: right">seterusnya</button>
            </div>
        </div> 
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</div>   
@endsection