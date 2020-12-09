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
					<h3 class="panel-title">[KEW.PA 16] Laporan Tahunan Penyelenggaraan</h3>
				</div>
				<div class="panel-body" id="panel">
					<form id="findSenaraiKewpa152018bListLink2" name="findSenaraiKewpa152018bListLink2" action="/ePBT_SSHT/penyelenggaraan/findSenaraiKewpa152018bListLink2" method="post" class="form-horizontal">

						<div class="row">
							<div class="form-inline"> 
								<label style="margin-left: 10px">Tahun :</label>
							<div class="col-sm-2">
								<select name="sslgra.tahun" id="findSenaraiKewpa152018bListLink2_sslgra_tahun" class="form-control input-sm" title="Lokasi" onchange="this.form.submit()">
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
						<div class="dataTables_length" id="kewpa152018b_length">
							<label>Paparkan <select name="kewpa152018b_length" aria-controls="kewpa152018b" class="form-control input-sm">
							<option value="10">10</option>
							<option value="20">20</option>
							<option value="50">50</option>
							<option value="100">100</option>
							<option value="-1">Semua</option>
							</select></label>rekod
						</div>
					</div>
					<div class="col-sm-6">
					<div id="kewpa152018b_filter" class="dataTables_filter">
					<label style="float: right">Buat Carian Di Sini : <input type="search" class="form-control input-sm" placeholder="" aria-controls="kewpa152018b">
					</label>
					</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
					<table class="table table-bordered table-condensed table-responsive table-striped dataTable" id="kewpa152018b" role="grid" aria-describedby="kewpa152018b_info" cellpadding="5px;">
					<thead class="thead-dark">
					<tr role="row">
					<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 151.75px;">Kementerian/Jabatan/Ptj</th>
					<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 151.75px;">Kuantiti (Harta Modal)</th>
					<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 158.75px;">Jumlah Nilai Penyelenggaraan (Harta Modal)[RM]</th>
					<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 152.75px;">Kuantiti (Aset Bernilai Rendah)</th>
					<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 158.75px;">Jumlah Nilai Penyelenggaraan (Aset Bernilai Rendah)[RM]</th>
					<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 154.75px;">Jumlah Kuantiti Di selenggara</th>
					<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 160px;">Nilai Keseluruhan Penyelenggaraan Aset Alih [RM]</th>
					</tr>
					</thead>
					<tfoot> 
										<tr style="background-color: #53A7D5; font-weight: bold;">
					<th style="text-align: right;" rowspan="1" colspan="1"> Jumlah : </th>
					<th style="width:15%; padding-right:10px !important; text-align: center;" rowspan="1" colspan="1">0</th>
					<th style="width:15%; padding-right:10px !important; text-align: right;" rowspan="1" colspan="1">0.00</th>
					<th style="width:15%; padding-right:10px !important; text-align: center;" rowspan="1" colspan="1">0</th>
					<th style="width:15%; padding-right:10px !important; text-align: right;" rowspan="1" colspan="1">0.00</th>
					<th style="width:15%; padding-right:10px !important; text-align: center;" rowspan="1" colspan="1">0</th>
					<th style="width:15%; padding-right:10px !important; text-align: right;" rowspan="1" colspan="1">0.00</th>
					</tr> 
									</tfoot>
					<tbody> <tr class="empty odd" role="row">
					<td colspan="5">Tiada rekod dijumpai.</td>
					</tr>
					</tbody>
					</table>
					</div>
				</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="dataTables_info" id="kewpa152018b_info" role="status" aria-live="polite">Memaparkan 1 hingga 1 rekod daripada 1 rekod</div>
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