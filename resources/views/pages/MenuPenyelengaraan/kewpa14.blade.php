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
                    <h3 class="panel-title">[KEW.PA 14] Senarai Penyelenggaraan Aset</h3>
                </div>
                <div class="panel-body" id="panel">
                    <form id="findSenaraiKewpa13ListLink2" name="findSenaraiKewpa13ListLink2" action="/ePBT_SSHT/penyelenggaraan/findSenaraiKewpa13ListLink2" method="post" class="form-horizontal">

                        <div class="row">
                            <div class="form-inline"> 
                            <label style="margin-left: 10px">Jabatan :</label>
                            <div class="col-sm-5">
                                <select name="sslgra.indukPtjpk" id="findSenaraiKewpa13ListLink2_sslgra_indukPtjpk" class="form-control input-sm" title="Lokasi" onchange="this.form.submit()">
                                    <option value="">&lt;--- Pilih Jabatan ---&gt;</option>
                                    <option value="0100">0100 : JABATAN KHIDMAT PENGURUSAN</option>
                                    <option value="0101">0101 : BAHAGIAN PENTADBIRAN DAN KEURUSETIAAN</option>
                                    <option value="0102">0102 : UNIT TEKNOLOGI MAKLUMAT</option>
                                    <option value="0103">0103 : UNIT AUDIT DALAM</option>
                                    <option value="0104">0104 : UNIT PERHUBUNGAN AWAM &amp; KORPORAT</option>
                                    <option value="0105">0105 : BAHAGIAN PENGURUSAN SUMBER MANUSIA</option>
                                    <option value="0106">0106 : BAHAGIAN TEKNOLOGI MAKLUMAT</option>
                                    <option value="0200">0200 : JABATAN PERBENDAHARAAN</option>
                                    <option value="0201">0201 : JABATAN PERBENDAHARAAN</option>
                                    <option value="0300">0300 : JABATAN PENILAIAN</option>
                                    <option value="0301">0301 : JABATAN PENILAIAN &amp; PENGURUSAN HARTA</option>
                                    <option value="0400">0400 : JABATAN KHIDMAT BANDAR</option>
                                    <option value="0401">0401 : JABATAN KHIDMAT BANDAR</option>
                                    <option value="0500">0500 : JABATAN PERANCANG BANDAR &amp; LANDSKAP</option>
                                    <option value="0501">0501 : BAHAGIAN PERANCANG BANDAR &amp; DESA</option>
                                    <option value="0502">0502 : UNIT OSC</option>
                                    <option value="0503">0503 : BAHAGIAN LANDSKAP</option>
                                    <option value="0600">0600 : UNIT UNDANG-UNDANG</option>
                                    <option value="0601">0601 : UNIT UNDANG-UNDANG</option>
                                    <option value="0700">0700 : JABATAN PELESENAN</option>
                                    <option value="0701">0701 : BAHAGIAN PELESENAN</option>
                                    <option value="0800">0800 : JABATAN KEJURUTERAAN</option>
                                    <option value="0801">0801 : JABATAN KEJURUTERAAN</option>
                                    <option value="0802">0802 : JABATAN BANGUNAN</option>
                                    <option value="0901">0901 : JABATAN LANDSKAP</option>
                                    <option value="1001">1001 : JABATAN PENGUATKUASA</option>
                                    <option value="1100">1100 : JABATAN YANG DIPERTUA</option>
                                    <option value="1101">1101 : JABATAN YANG DIPERTUA</option>
                                    <option value="1102">1102 : UNIT UNDANG-UNDANG</option>
                                    <option value="1103">1103 : UNIT KORPORAT &amp; PERHUBUNGAN AWAM</option>
                                    <option value="1104">1104 : UNIT AUDIT DALAM</option>
                                    <option value="1105">1105 : UNIT PUSAT SEHENTI</option>
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
        <h3 class="panel-title">hasil carian</h3>
    <div class="table-responsive">
    <div id="models_wrapper" class="table table-bordered table-sm table-hover table-striped">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="dataTables_length" id="models_length">
                                <label>Paparkan 
                                    <select name="models_length" aria-controls="models" class="form-control input-sm">
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
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 10%">No. Aset</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 60%">Keterangan Aset</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 20%">Tarikh Pembelian</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 50%">Jumlah Kos [RM]</th>
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