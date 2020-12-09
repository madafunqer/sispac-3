@extends('layout.master')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="panel panel-default">
                <div id="infoMessage" style="display: none;">
                </div>
                
                <div class="panel-heading">
                    <span class="pull-right panel-options">
                        <i class="fa" id="toggle"></i>
                    </span>
                    <h3 class="panel-title">[KEW.PA-18] Laporan Pindahan Aset Alih</h3>
                </div>

                <div class="panel-body" id="panel">
                    <form id="findSenaraiKewpa182018ListLink2" name="findSenaraiKewpa182018ListLink2" action="/ePBT_SSHT/pendaftaran/findSenaraiKewpa182018ListLink2" method="post" class="form-horizontal">

                        <div class="row">
                        <div class="form-inline"> 
                            <label style="margin-left: 10px">Tahun :</label>
                            <div class="col-sm-2">
                                <select name="kewpa18.tahun" id="findSenaraiKewpa182018ListLink2_kewpa18_tahun" class="form-control input-sm" title="Tahun Pindah" onchange="this.form.submit()">
                                <option value=""> Pilih Tahun </option>
                                <option value="2020" selected="selected">2020</option>


                                </select>


                            </div>
                        </div>    
                        <div class="form-inline"> 
                            <div class="col-sm-offset-2 col-sm-10">
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
     
                

                    <div class="btn-group pull-right">
                        <button class="btn btn-primary dropdown-toggle cetak" data-toggle="dropdown"> <i class="fa fa-angle-down"></i>
                        <i class="fa fa-print"></i>&nbsp;Cetak Rekod</button>
                        <ul class="dropdown-menu pull-right"> 
                            <li><a class="modalButton" data-toggle="modal" data-src="/ePBT_SSHT/report/cetak?reportName=kewpa18-new&amp;param1=2020" data-height="500px" data-width="99.6%" data-target="#modalCetak" data-backdrop="static" data-keyboard="false">KEW.PA-18</a></li>
                        </ul>
                    </div> 
                
                    
                <div id="models_wrapper" class="table table-bordered table-sm table-hover table-striped"> 

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="dataTables_length" id="kewpa182018_length">
                                <label>Paparkan 
                                    <select name="kewpa182018_length" aria-controls="kewpa182018" class="form-control input-sm">
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                        <option value="-1">Semua</option>
                                    </select>
                                </label>rekod
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div id="kewpa182018_filter" class="dataTables_filter">
                                <label style="float: right">Buat Carian Di Sini : <input type="search" class="form-control input-sm" placeholder="" aria-controls="kewpa182018">
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered table-condensed table-responsive table-striped dataTable" id="kewpa182018" role="grid" aria-describedby="kewpa182018_info" cellpadding="5px;" >
                                <thead class="thead-dark">
                                    <tr role="row">
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 505.75px;">Kementerian / Jabatan</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 96.75px;">Kuantiti Terimaan Pindahan</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 96.75px;">Nilai Perolehan Asal Terimaan</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 96.75px;">Jumlah Nilai Semasa Terimaan (RM)</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 96.75px;">Kuantiti Pengeluaran Pindahan</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 96.75px;">Nilai Perolehan Asal Pengeluaran</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 98px;">Jumlah Nilai Semasa Pengeluaran (RM)</th>
                                    </tr>
                                </thead>
                                <tfoot> 
                                    <tr style="background-color: #53A7D5; font-weight: bold;">
                                        <th style="text-align: right;" rowspan="1" colspan="1"> Jumlah Keseluruhan : </th>
                                        <th style="width:10%; padding-right:20px !important; text-align: center;" rowspan="1" colspan="1">5</th>
                                        <th style="width:10%; padding-right:20px !important; text-align: right;" rowspan="1" colspan="1">23,450.00</th>
                                        <th style="width:10%; padding-right:20px !important; text-align: right;" rowspan="1" colspan="1">2,500.00</th>
                                        <th style="width:10%; padding-right:20px !important; text-align: center;" rowspan="1" colspan="1">5</th>
                                        <th style="width:10%; padding-right:20px !important; text-align: right;" rowspan="1" colspan="1">23,450.00</th>
                                        <th style="width:10%; padding-right:20px !important; text-align: right;" rowspan="1" colspan="1">2,500.00</th>
                                    </tr> 
                                </tfoot>
                                <tbody>
                                    <tr class="odd" role="row">
                                        <td style="width:40%;">BAHAGIAN PELESENAN</td>
                                        <td style="width:10%; text-align:center;">3</td>
                                        <td style="width:10%; text-align:right;">10,950.00</td>
                                        <td style="width:10%; text-align:right;">2,500.00</td>
                                        <td style="width:10%; text-align:center;">0</td>
                                        <td style="width:10%; text-align:right;">0.00</td>
                                        <td style="width:10%; text-align:right;">0.00</td>
                                    </tr>
                                    <tr class="even" role="row">
                                        <td style="width:40%;">BAHAGIAN PENTADBIRAN DAN KEURUSETIAAN</td>
                                        <td style="width:10%; text-align:center;">0</td>
                                        <td style="width:10%; text-align:right;">0.00</td>
                                        <td style="width:10%; text-align:right;">0.00</td>
                                        <td style="width:10%; text-align:center;">5</td>
                                        <td style="width:10%; text-align:right;">23,450.00</td>
                                        <td style="width:10%; text-align:right;">2,500.00</td>
                                    </tr>
                                    <tr class="odd" role="row">
                                        <td style="width:40%;">JABATAN PERBENDAHARAAN</td>
                                        <td style="width:10%; text-align:center;">2</td>
                                        <td style="width:10%; text-align:right;">12,500.00</td>
                                        <td style="width:10%; text-align:right;">0.00</td>
                                        <td style="width:10%; text-align:center;">0</td>
                                        <td style="width:10%; text-align:right;">0.00</td>
                                        <td style="width:10%; text-align:right;">0.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="dataTables_info" id="kewpa182018_info" role="status" aria-live="polite">Memaparkan 1 hingga 3 rekod daripada 3 rekod</div>
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