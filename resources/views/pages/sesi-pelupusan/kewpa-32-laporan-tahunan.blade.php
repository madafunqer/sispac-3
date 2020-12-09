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
                        <h3 class="panel-title">Sesi Pelupusan &gt; [KEW.PA 32] Laporan Tahunan</h3>
                    </div>
                    <div class="panel-body" id="panel">
                        <form id="findSenaraiKewpa20ListLink2" name="findSenaraiKewpa20ListLink2" action="/ePBT_SSHT/pelupusan/findSenaraiKewpa20ListLink2" method="post" class="form-horizontal">
                            <div class="row">
                                <div class="form-inline"> 
                                    <label style="margin-left: 10px">Tahun :</label>
                                <div class="col-sm-2">
                                    <select name="sesast.Tahun" id="findSenaraiKewpa20ListLink2_sesast_Tahun" class="form-control input-sm" title="Tahun" onchange="this.form.submit()">
                                        <option value=""> Pilih Tahun </option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
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

    <div class="content">
        <div class="container-fluid">
        <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
        <div class="card-body">
            <h3 class="panel-title">hasil carian</h3>
        <div class="table-responsive">
                    <table id="details" pagesize="" class="table table-bordered table-condensed table-responsive table-striped" cellpadding="5px;">
                        <thead class="thead-dark">
                            <tr>
                                <th class="col-sm-3" rowspan="2" style="text-align: center, width: 40%">Jabatan/Bahagian</th>                                        
                                <th class="col-sm-1" rowspan="2" style="text-align: right, width: 20%">Jumlah Harga Pembelian [RM]</th>
                                <th rowspan="2" style="text-align: right, width: 20%">Kuantiti Pelupusan</th>
                                <th class="col-sm-1" rowspan="2" style="text-align: right, width: 20%">Hasil Pelupusan [RM]</th>
                                <th class="col-sm-1" colspan="4" style="text-align: center">Jumlah Nilai Perolehan Semasa Secara</th>
                            </tr> 
                            <tr>                                        
                                <th class="col-sm-1" style="text-align: right, width: 20%">Jualan [RM]</th>
                                <th class="col-sm-1" style="text-align: right, width: 20%">E-waste [RM]</th>
                                <th class="col-sm-1" style="text-align: right, width: 20%">Musnah [RM]</th>
                                <th class="col-sm-1" style="text-align: right, width: 20%">Kaedah Lain [RM]</th>
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
        </div>
        </div>
        </div>
        </div>
    </div>

@endsection