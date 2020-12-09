@extends('layout.master')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="panel panel-default">
                <div id="infoMessage" style="display: none;"></div>
                <div class="panel-heading">
                    <span class="pull-right panel-options">
                        <i class="fa" id="toggle">
                        </i>
                    </span>
                    <h3 class="panel-title">[KEW.PA 11] Pemeriksaan Aset Alih</h3>
                </div>
                <div class="panel-body" id="panel">
                    <form id="findSenaraiKewpa112018ListLink2" name="findSenaraiKewpa112018ListLink2" action="/ePBT_SSHT/penggunaan/findSenaraiKewpa112018ListLink2" method="post" class="form-horizontal">

                        <div class="row"> 
                            <label style="margin-left: 15px">No Sesi : </label>
                            <div class="col-sm-3">
                                <select name="sesast.ssaNosesi" id="findSenaraiKewpa112018ListLink2_sesast_ssaNosesi" class="form-control input-sm" title="No. Sesi" onchange="this.form.submit()">
                                <option value=""> Pilih No. Sesi </option>
                                <option value="P/002/2020">P/002/2020</option>
                                <option value="P/001/2020">P/001/2020</option>
                            </select>
                            </div>
                        
                       
                            <div class="col-sm">
                                <button type="submit" class="cari btn btn-primary">
                                    <i class="fa fa-search">
                                    </i>&nbsp;Carian
                                </button>
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
                            <div class="dataTables_length" id="kewpa112018_length">
                                <label>Paparkan 
                                    <select name="kewpa112018_length" aria-controls="kewpa112018" class="form-control input-sm">
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
                            <div id="kewpa112018_filter" class="dataTables_filter">
                                <label style="float: right">Buat Carian Di Sini : <input type="search" class="form-control input-sm" placeholder="" aria-controls="kewpa112018">
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered table-condensed table-responsive table-striped dataTable no-footer" id="kewpa112018" role="grid" aria-describedby="kewpa112018_info" cellpadding="5px;">
                                <thead class="thead-dark">
                                    <tr role="row">
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 162.75px;">No. Aset</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 273.75px;">Keterangan Aset</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 281.75px;">Tarikh Pembelian</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 278.75px;">Jumlah Kos [RM]</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 169px;">Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <tr class="group">
                                        <td colspan="5">
                                            <b> Nama Pembekal : Tiada rekod dijumpai.</b>
                                        </td>
                                    </tr>
                                    <tr class="empty odd" role="row">
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="dataTables_info" id="kewpa112018_info" role="status" aria-live="polite">Memaparkan 1 hingga 1 rekod daripada 1 rekod</div>
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

@endsection