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
                    <h3 class="panel-title">[KEW.PA 12 &amp; 13] Sijil Tahunan Pemeriksaan</h3>
                </div>
                <div class="panel-body" id="panel">
                    <form id="findSenaraiKewpa12ListLink2" name="findSenaraiKewpa12ListLink2" action="/ePBT_SSHT/penggunaan/findSenaraiKewpa12ListLink2" method="post" class="form-horizontal">
                        <div class="row">
                            <div class="form-inline"> 
                                <label style="margin-left: 10px">Tahun Pemeriksaan :</label>
                                <div class="col-sm-2">
                                <select name="sesast.tahun" id="findSenaraiKewpa12ListLink2_sesast_tahun" class="form-control input-sm" title="Tahun Sesi" onchange="this.form.submit()">
                                <option value=""> Pilih Tahun </option>
                                <option value="2020">2020</option>
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
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 20%">Tarikh Permeriksaan</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 20%">Sesi</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 70%">Jabatan</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 20%">Tindakan</th>
                                </tr>
                            </thead>
                            <tbody> 
                                <tr class="empty odd" role="row">
                                    <td colspan="5">Tiada rekod dijumpai.</td>
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