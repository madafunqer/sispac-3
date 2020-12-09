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
                    <h3 class="panel-title">[KEW.PA 15] Daftar Penyelenggaraan</h3>
                </div>
                <div class="panel-body" id="panel">   
                    <form id="findDaftarKewpa152018ListLink2" name="findDaftarKewpa152018ListLink2" action="/ePBT_SSHT/penyelenggaraan/findDaftarKewpa152018ListLink2" method="post" class="form-horizontal">

                        <div class="form-group">
                            <label class="col-sm-3 control-label">No. Aset :</label> 
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input type="text" name="sinduk2.indukNhrta" value="" disabled="disabled" id="indukNhrta" class="form-control input-sm">
                                    
                                    <span class="input-group-addon modalButton" data-toggle="modal" data-src="/ePBT_SSHT/penggunaan/LovCariAsetList" accesskey="" data-height="100%" data-width="99.6%" data-target="#modalAkaun">
                                        <i class="fa fa-book"></i>
                                    </span>
                                </div>                            
                            </div> 
                            <div class="input-group">      
                                <input type="hidden" name="sslgra.slgraNaset" value="" id="aduNosiri" class="form-control input-sm">
                                <input type="hidden" name="sslgra.indukJnshr" value="" id="indukJnshr" class="form-control input-sm">
                            </div>  
                        </div> 
                        <div class="row">                      
                            <div class="form-inline">
                                <label style="margin-left: 25px">Nama Aset :</label>                         
                            <div class="col-sm-6">
                                <b><div id="indukJnama">
                                        
                                    </div></b>                                    
                            </div> 
                        </div> 
                        <div class="form-inline"> 
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="cari btn btn-primary"><i class="fa fa-search"></i>&nbsp;Carian</button>
                            </div>
                        </div>
                        </div> 
                        <!-- LOV UNTUK NO. PERMOHONAN -->
                        <div>
                            <div class="modal fade bs-example-modal-lg" id="modalAkaun" tabindex="-1" role="dialog" aria-labelledby="modalAkaunLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="modalAkaunLabel">Carian Aset</h4>
                                        </div>
                                        <div class="modal-body">
                                            <iframe id="akaunFrame" scrolling="no" style="overflow-x:hidden; overflow-y:auto;" frameborder="0"></iframe>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div>
                        </div>
                                      
                    </form>
                </div>            
            </div>            
        </div>
    </div>            
</div>            

<!---->
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
                        <table class="table table-bordered table-condensed table-responsive table-striped dataTable no-footer" id="models" role="grid" aria-describedby="models_info" cellpadding="5px;">
                            <thead class="thead-dark">
                                <tr role="row">
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 10%">Tarikh Penyelenggaraan</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 20%">Butiran Kerja</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 20%">No. Kontrak/ PesananKerajaan dan Tarikh</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 20%">Harga Kos [RM]</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 40%">Pegawai</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 20%">Tindakan</th>
                                </tr>
                            </thead>
                        <tbody> <tr class="empty odd" role="row">
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