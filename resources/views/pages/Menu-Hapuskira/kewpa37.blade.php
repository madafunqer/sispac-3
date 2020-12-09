@extends('layout.lay-aset-ict')
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
                    <h3 class="panel-title">[KEW.PA 37]Laporan Hapus Kira Aset Alih</h3>
                </div>
                <div class="panel-body" id="panel">
                    <form id="findSenaraiKewpa32ListLink2" name="findSenaraiKewpa32ListLink2" action="/ePBT_SSHT/hapuskira/findSenaraiKewpa32ListLink2" method="post" class="form-horizontal">

                        <div class="row">                        
                            <div class="form-inline">
                                <label class="col-sm control-label" style="margin-right: -20px">Tahun :</label>
                                <div class="col-sm">
                                    <select name="shilang.hapusTahun" id="findSenaraiKewpa32ListLink2_shilang_hapusTahun" class="form-control input-sm" title="Tahun" onchange="this.form.submit()">
                                        <option value="">&lt;--- Pilih Tahun ---&gt;</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                    </select>                           
                                </div>  
                        
                                <div class="col-sm">
                                    <button type="submit" class="cari btn btn-primary"><i class="fa fa-search"></i>&nbsp;Carian</button>
                               </div>
                              </div>
                            </div>  
                    </form>
                </div>
            </div>
        </div> 
    </div> 
</div>       
     <!------------------------------------------------------------------------->

     <div class="content">
        <div class="container-fluid">
        <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
        <div class="card-body">
            <div class="table-responsive">
        <div id="models_wrapper" class="table table-bordered table-sm table-hover table-striped">

            <div class="row">
                <div class="col-sm-6">
                    <div class="dataTables_length" id="kewpa32_length">
                        <label>Paparkan <select name="kewpa32_length" aria-controls="kewpa32" class="form-control input-sm">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                            <option value="-1">Semua</option>
                        </select></label>rekod
                    </div>
                </div>
                <div class="col-sm-6">
                    <div id="kewpa32_filter" class="dataTables_filter">
                        <label style="float: right">Buat Carian Di Sini : <input type="search" class="form-control input-sm" placeholder="" aria-controls="kewpa32">
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="kewpa32" pagesize="" class="table table-bordered table-condensed table-responsive table-striped dataTable no-footer" role="grid" aria-describedby="kewpa32_info" style="width: 100%;" cellpadding="5px;">
                         <thead class="thead-dark">
                        <tr role="row">
                        <th class="col-sm-1 sorting_disabled" rowspan="2" style="text-align: left; width: 10%" colspan="1">Ruj. Kelulusan <br> Perbendaharaan</th>
                        <th class="col-sm-1 sorting_disabled" rowspan="2" style="text-align: left; width: 6%" colspan="1">Bahagian / Jabatan</th>
                        <th class="col-sm-1 sorting_disabled" rowspan="2" style="text-align: left; width: 15%" colspan="1">Nama Aset</th>
                        <th class="col-sm-1 sorting_disabled" rowspan="2" style="text-align: left; width: 15%" colspan="1">Punca Kehilangan</th>
                        <th class="col-sm-1 sorting_disabled" rowspan="2" style="text-align: right; width: 6%" colspan="1">Harga Kos [RM]</th>
                        <th class="col-sm-1 sorting_disabled" rowspan="2" style="text-align: right; width: 6%" colspan="1">Nilai Semasa [RM]</th>
                        <th class="col-sm-1" colspan="2" style="text-align: center" rowspan="1">Tindakan Surcaj</th>
                        <th class="col-sm-1" colspan="2" style="text-align: center" rowspan="1">Tindakan Tatatertib</th>
                        <th class="col-sm-1 sorting_disabled" rowspan="2" style="text-align: center; width: 83px;" colspan="1">Tindakan</th>
                        </tr> 
                                            <tr role="row">
                        <th class="col-sm-1 sorting_disabled" style="text-align: right; width: 6%" rowspan="1" colspan="1">Amaun [RM]</th>
                        <th class="col-sm-1 sorting_disabled" style="text-align: center; width: 6%" rowspan="1" colspan="1">Tarikh Dikenakan</th>
                        <th class="col-sm-1 sorting_disabled" style="text-align: center; width: 6%" rowspan="1" colspan="1">Jenis Hukuman </th>
                        <th class="col-sm-1 sorting_disabled" style="text-align: center; width: 6%" rowspan="1" colspan="1">Tarikh Dikenakan</th>
                        </tr> 
                        </thead>

                        <tbody>                                       
                        <tr class="odd">
                        <td colspan="11" class="dataTables_empty" valign="top">Tiada rekod dijumpai</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        <div class="row">
            <div class="col-sm-6">
            <div class="dataTables_info" id="kewpa32_info" role="status" aria-live="polite">Memaparkan 0 hingga 0 daripada 0 rekod</div>
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