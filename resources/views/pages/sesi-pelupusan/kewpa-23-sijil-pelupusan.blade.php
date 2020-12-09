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
                        <h3 class="panel-title">Sesi Pelupusan &gt; [KEW.PA 23] Sijil Pelupusan</h3>
                    </div>
                    <div class="panel-body" id="panel">
                        <form id="findSenaraiKewpa19ListLink2" name="findSenaraiKewpa19ListLink2" action="/ePBT_SSHT/pelupusan/findSenaraiKewpa19ListLink2" method="post" class="form-horizontal">
                            <div class="row">
                                <div class="form-inline"> 
                                    <label style="margin-left: 10px">No sesi :</label>
                                <div class="col-sm-3">
                                    <select name="sesast.ssaNosesi" id="findSenaraiKewpa19ListLink2_sesast_ssaNosesi" class="form-control input-sm" title="No. Sesi" onchange="this.form.submit()">
                                        <option value=""> Pilih No. Sesi </option>
                                        <option value="L/001/2020">L/001/2020</option>
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
                    <table class="table table-bordered table-condensed table-responsive table-striped" id="models" cellpadding="5px;">
                        <thead class="thead-dark">
                            <tr>
                                <th style="width: 10%">No. Aset</th>
                                <th style="width: 40%">Nama Aset</th>
                                <th style="width: 20%">Tarikh Pembelian</th>
                                <th style="width: 20%">Harga Pembelian</th>
                                <th style="width: 15%">Kaedah Pelupusan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="empty">
                                <td colspan="6">Tiada rekod dijumpai.</td>
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