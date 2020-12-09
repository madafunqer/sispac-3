@extends('layout.lay-aset-ict')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="col-lg-12">
                <div id="infoMessage" style="display: none;"></div>
            
                <div class="panel panel-default"> 
                    <div class="panel-heading">
                        <span class="pull-right panel-options">
                            <i class="fa" id="toggle"></i>
                        </span>
                        <h3 class="panel-title">Daftar Laporan Awal Kehilangan Aset</h3>
                    </div>
                    <div class="panel-body" id="panel">                
                        <form id="DaftarHilangAset" name="DaftarHilangAset" action="/ePBT_SSHT/hapuskira/saveDaftarHilangAsetLink2" method="post" class="form-horizontal">

                            <div class="form-group row">
                                <label class="col-sm-3 control-label">No. Aset :</label> 
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <input type="text" name="shapus.indukNhrta" value="" disabled="disabled" id="indukNhrta" class="form-control input-sm">
                                        
                                        <span class="input-group-addon modalButton" data-toggle="modal" data-src="/ePBT_SSHT/hapuskira/LovCariAsetList" accesskey="" data-height="100%" data-width="99.6%" data-target="#modalAkaun">
                                            <i class="fa fa-book"></i>
                                        </span>
                                    </div>                            
                                </div> 
                                <div class="input-group">      
                                    <input type="hidden" name="shapus.hapusNosiri" value="" id="aduNosiri" class="form-control input-sm">
                                    <input type="hidden" name="shapus.hapusNaset" value="" id="indukNaset" class="form-control input-sm">
                                    <input type="hidden" name="shapus.hapusIdrow" value="" id="DaftarHilangAset_shapus_hapusIdrow" class="form-control input-sm">
                                    <input type="hidden" name="shapus.hapusAdukd" value="" id="DaftarHilangAset_shapus_hapusAdukd" class="form-control input-sm">
                                </div>  
                            </div> 

                            <div class="form-group row">
                                <label class="col-sm-3 control-label">Nama Aset :</label>                         
                                <div class="col-sm-6 form-control-static">
                                    <b><div id="indukJnama">
                                            
                                        </div></b>                                    
                                </div> 
                            </div>                     
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

                            <div class="form-group row">
                                <label class="col-sm-3 control-label">Pegawai Bertanggungjawab :</label>
                                <div class="col-sm-2" form-control-static="">
                                    <b><div id="indukOnama">
                                            
                                        </div></b>
                                </div>
                            </div>

                            <div class="form-group row">                   
                                <label class="col-sm-3 control-label">Tarikh Pembelian :</label>
                                <div class="col-sm-2" form-control-static="">
                                    <b><div id="indukDbeli">
                                            
                                        </div></b>
                                </div>                
                                <label class="col-sm-3 control-label">Harga Pembelian [RM] :</label>
                                <div class="col-sm-2">
                                    <b><div id="indukHtkos" form-control-static="">
                                            
                                        </div></b>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 control-label">Tarikh Aduan :</label>
                                <div class="col-sm-2">
                                    <div class="input-group">
                                        <input type="text" name="shapus.hapusTarikha" value="" id="DaftarHilangAset_shapus_hapusTarikha" class="form-control input-sm datepicker" title="Tarikh Diterima">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div> 
                                <label class="col-sm-3 control-label">Tarikh Kehilangan :</label> 
                                <div class="col-sm-2">
                                    <div class="input-group">
                                        <input type="text" name="shapus.hapusTarikhh" value="" id="DaftarHilangAset_shapus_hapusTarikhh" class="form-control input-sm datepicker" title="Tarikh Diterima">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>  

                            <div class="form-group row">
                                <label class="col-sm-3 control-label">Kuantiti Aset  :</label> 
                                <div class="col-sm-2">
                                    <div class="input-group">
                                        <input type="text" name="shapus.hapusKuantiti" value="" id="DaftarHilangAset_shapus_hapusKuantiti" class="form-control input-sm">
                                    </div>
                                </div>

                                <label class="col-sm-3 control-label">Cara Kehilangan : </label>                          
                                    <div class="col-sm-2">
                                    <select name="shapus.hapusCara" id="DaftarHilangAset_shapus_hapusCara" class="form-control input-sm">
                                        <option value="">&lt;--- Sila Pilih ---&gt;</option>
                                        <option value="01">KECURIAN</option>
                                        <option value="02">KEMALANGAN</option>
                                        <option value="03">KEBAKARAN</option>
                                        <option value="07">KECUAIAN</option>
                                        <option value="05">KESUSUTAN</option>
                                        <option value="06">PENIPUAN</option>
                                        <option value="04">BENCANA ALAM</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 control-label">Tempat Kehilangan :</label>
                                <div class="col-sm-2">
                                    <div class="input-group">
                                        <textarea name="shapus.hapusTempat" cols="" rows="" id="DaftarHilangAset_shapus_hapusTempat" class="form-control input-sm"></textarea>
                                    </div>
                                </div> 
                                <label class="col-sm-3 control-label">Bagaimana Kehilangan Diketahui  :</label>
                                <div class="col-sm-2">
                                    <div class="input-group">
                                        <textarea name="shapus.hapusKetahui" cols="" rows="" id="DaftarHilangAset_shapus_hapusKetahui" class="form-control input-sm"></textarea>

                                    </div>
                                </div> 
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 control-label">Tarikh Kehilangan Diketahui  :</label>
                                <div class="col-sm-2">
                                    <div class="input-group">
                                        <input type="text" name="shapus.hapusTarikhk" value="" id="DaftarHilangAset_shapus_hapusTarikhk" class="form-control input-sm datepicker" title="Tarikh Diterima">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div> 
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 control-label">Prima Facie :</label>
                                <div class="col-sm-2">
                                    <select name="shapus.hapusPriface" id="DaftarHilangAset_shapus_hapusPriface" class="form-control input-sm">
                                        <option value="">&lt;--- Sila Pilih ---&gt;</option>
                                        <option value="Y">YA</option>
                                        <option value="T">TIDAK</option>
                                    </select>   
                                </div>
                                <label class="col-sm-3 control-label">Pegawai Ditahan Kerja :</label>
                                <div class="col-sm-2">                            
                                    <select name="shapus.hapusPegthn" id="DaftarHilangAset_shapus_hapusPegthn" class="form-control input-sm">
                                        <option value="">&lt;--- Sila Pilih ---&gt;</option>
                                        <option value="Y">YA</option>
                                        <option value="T">TIDAK</option>
                                    </select>
                                </div> 
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 control-label">Rujukan Laporan Polis :</label>
                                <div class="col-sm-2">
                                    <div class="input-group">
                                        <textarea name="shapus.hapusRujukpolis" cols="" rows="" id="DaftarHilangAset_shapus_hapusRujukpolis" class="form-control input-sm"></textarea>
                                    </div>
                                </div> 

                                <label class="col-sm-3 control-label">Tarikh Laporan Polis  :</label>
                                <div class="col-sm-2">
                                    <div class="input-group">
                                        <input type="text" name="shapus.hapusTarikhr" value="" id="DaftarHilangAset_shapus_hapusTarikhr" class="form-control input-sm datepicker" title="Tarikh Diterima">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div> 
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 control-label">Langkah Elak Kehilangan :</label>
                                <div class="col-sm-2">
                                    <div class="input-group">
                                        <textarea name="shapus.hapusElak" cols="" rows="" id="DaftarHilangAset_shapus_hapusElak" class="form-control input-sm"></textarea>
                                    </div>
                                </div> 

                                <label class="col-sm-3 control-label">Langkah Pencegahan :</label>
                                <div class="col-sm-2">
                                    <div class="input-group">
                                        <textarea name="shapus.hapusCegah" cols="" rows="" id="DaftarHilangAset_shapus_hapusCegah" class="form-control input-sm"></textarea>
                                    </div>
                                </div> 
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 control-label">No.Rujukan Laporan Awal :</label>
                                <div class="col-sm-2">
                                    <div class="input-group">
                                        <textarea name="shapus.hapusNrujuka" cols="" rows="" id="DaftarHilangAset_shapus_hapusNrujuka" class="form-control input-sm"></textarea>
                                    </div>
                                </div> 
                                <label class="col-sm-3 control-label">Catatan :</label>
                                <div class="col-sm-2">
                                    <div class="input-group">
                                        <textarea name="shapus.hapusCatat" cols="" rows="" id="DaftarHilangAset_shapus_hapusCatat" class="form-control input-sm"></textarea>
                                    </div>
                                </div> 
                            </div>

                            <div class="form-group row">
                                <div class="operation-button col-sm-offset-2 col-sm-10">                             
                                        <button type="submit" class="simpan confirm btn btn-success" data-msg="Data yang dimasukkan adalah sahih?"><i class="fa fa-save fa"></i>&nbsp;Simpan Rekod</button>                            
                                        <button type="reset" class="batal btn btn-primary" value="Batal Operasi" onclick="javascript:location.href = 'DaftarHilangAsetLink2'"><i class="fa fa-times"></i>&nbsp;Batal Operasi</button>                            
                                        <button type="button" class="senarai btn btn-info" onclick="javascript:location.href = 'inputSenaraiKewpa28Link2';" disabled="true"><i class="fa fa-file"></i>&nbsp;Lihat Senarai Rekod</button>                                                       
                                    </div>
                                </div>                    
                        </form>
                    </div>
                </div>
            </div>
        </div>            
    </div> 
</div>

@endsection