@extends('layout.master')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div id="infoMessage" style="display: none;"></div>
                    
                    <div class="header">
                        <span class="pull-right panel-options">
                            <i class="fa" id="toggle"></i>
                        </span>
                        <h3 class="panel-title">Penerimaan Aset Alih</h3>
                    </div>
                    <div class="panel-body" id="panel">
                        <div class="panel-body" id="panel">
                            <form id="terimaan" name="terimaan" action="/ePBT_SSHT/penerimaan/savePenerimaanLink2" method="post" >

                                
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">No. Permohonan :</label> 
                                    <div class="col-sm-2">
                                        <div class="input-group">
                                            <input type="text" name="obj.lc2Nopmh" value="" id="lc2Nopmh" class="form-control input-sm">  
                                            
                                            <span class="input-group-addon modalButton" data-toggle="modal" data-src="/ePBT_SSHT/penerimaan/LovCariSakbList" accesskey="" data-height="100%" data-width="99.6%" data-target="#modalAkaun">
                                                <i class="fa fa-book"></i>
                                            </span>
                                        </div>
                                    </div>  

                                    <label class="col-sm-3 control-label">Tahun Permohonan :</label> 
                                    <div class="col-sm-2">
                                        <div class="input-group"> 
                                            <input type="hidden" name="obj.Obkod" value="" id="Obkod" class="form-control input-sm">
                                            <input type="text" name="obj.lc0Tahun" value="" disabled="disabled" id="lc0Tahun" class="form-control input-sm" onblur="reloadMaklumat(this.form, 'PenerimaanLink2')">                                    
                                            <input type="hidden" name="obj.lc0Tahun" value="" id="lc0Tahun1" class="form-control input-sm">
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
                                                    <h4 class="modal-title" id="modalAkaunLabel">Senarai Penerimaan Aset</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <iframe id="akaunFrame" scrolling="no" style="overflow-x:hidden; overflow-y:auto;" frameborder="0"></iframe>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div>
                                </div>
                                <!-- LOV UNTUK NO. PERMOHONAN -->
                                
                                <!----------------------------------------------------------->
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Tarikh Pesanan :</label>
                                    <div class="col-sm-2 form-control-static">
                                        <input type="text" name="obj.lc0Tkpmh" value="" disabled="disabled" id="lc0Tkpmh" class="form-control input-sm">
                                        <input type="hidden" name="obj.lc0Tkpmh" value="" id="lc0Tkpmh1" class="form-control input-sm">
                                        <input type="hidden" name="jlsubbList.lc0Tkpmh" value="" id="lc0Tkpmh2" class="form-control input-sm">
                                    </div>
                                    <label class="col-sm-3 control-label">No Pesanan :</label>
                                    <div class="col-sm-2 form-control-static">
                                        <input type="text" name="obj.lc0Nolcl" value="" disabled="disabled" id="lc0Nolcl" class="form-control input-sm">   
                                        <input type="hidden" name="obj.lc0Nolcl" value="" id="lc0Nolcl1" class="form-control input-sm">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Kod Pembelian :</label>
                                    <div class="col-sm-2 form-control-static">
                                        <input type="text" name="obj.lc2Obkod" value="" disabled="disabled" id="lc2Obkod" class="form-control input-sm">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Nama Pembekal :</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="obj.bekSnama" value="" disabled="disabled" id="bekSnama" class="form-control input-sm">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Alamat Pembekal :</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="obj.bekAlam1" value="" disabled="disabled" id="bekAlam1" class="form-control input-sm">
                                        <input type="text" name="obj.bekAlam2" value="" disabled="disabled" id="bekAlam2" class="form-control input-sm">
                                        <input type="text" name="obj.bekAlam3" value="" disabled="disabled" id="bekAlam3" class="form-control input-sm">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">No. Telefon :</label>
                                    <div class="col-sm-2 form-control-static">
                                        <input type="text" name="obj.bekNotel" value="" disabled="disabled" id="bekNotel" class="form-control input-sm">
                                    </div>
                                    <label class="col-sm-3 control-label">No. Faksimili :</label>
                                    <div class="col-sm-2 form-control-static">
                                        <input type="text" name="obj.bekNofax" value="" disabled="disabled" id="bekNofax" class="form-control input-sm">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Tarikh Terima : <em class="req">*</em></label>
                                    <div class="col-sm-2 form-control-static">

                                        <input type="text" name="jlmain.lc0Tkhtr" value="" id="terimaan_jlmain_lc0Tkhtr" class="form-control has-feedback-right input-sm datepicker" title="Tarikh Terima">
                                        <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">No Nota Hantaran : <em class="req">*</em></label>
                                    <div class="col-sm-2 form-control-static">
                                        <input type="text" name="jlmain.lc0Notah" value="" id="lc0Notah" class="form-control input-sm">
                                    </div>
                                    <label class="col-sm-3 control-label">Tarikh Nota Hantaran : <em class="req">*</em></label>
                                    <div class="col-sm-2 form-control-static">

                                        <input type="text" name="jlmain.lc0Tkhnh" value="" id="terimaan_jlmain_lc0Tkhnh" class="form-control has-feedback-right input-sm datepicker" title="Tarikh Nota Hantaran">
                                        <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Jenis Penerimaan : <em class="req">*</em></label>
                                    <div class="col-sm-2 form-control-static">
                                        <input type="text" name="jlmain.eecJepen" value="" id="eecJepen" class="form-control input-sm">
                                    </div>
                                    <label class="col-sm-3 control-label">Maklumat Pengangkutan : <em class="req">*</em></label>
                                    <div class="col-sm-2 form-control-static">
                                        <input type="text" name="jlmain.eecMkpen" value="" id="eecMkpen" class="form-control input-sm">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 cont rol-label">Pegawai Penerima : <em class="req">*</em></label>
                                    <div class="col-sm-5 form-control-static"> 
                                        
                                        <select name="jlmain.lc0Pgtrm" id="terimaan_jlmain_lc0Pgtrm" class="form-control input-sm" title="Pegawai Penerima">
                                                <option value="">&lt;--- Pilih Pegawai Penerima ---&gt;</option>
                                                <option value="10104">10104 - ANDRI ARIF</option>
                                                <option value="10115">10115 - MAKHLIS B. OTHMAN</option>
                                                <option value="10137">10137 - NORITA BINTI MD ALWI</option>
                                                <option value="10240">10240 - AZIM BIN MOHD LAYANI</option>
                                                <option value="10244">10244 - AMIZIANA BINTI MOHD RADI</option>
                                                <option value="10245">10245 - INTAN ZALIZA BINTI AHMAD ZAINI</option>
                                                <option value="10246">10246 - ZAHRATUL AINI  BT MD ISMAIL</option>
                                                <option value="10247">10247 - ASMAWATI BT. ALIAS</option>
                                                <option value="10249">10249 - NORMAWATI BT HARUN</option>
                                                <option value="10255">10255 - ZAILAYATI BINTI LOT</option>
                                                <option value="10263">10263 - MOHD FAIZAL BIN AZIZI</option>
                                                <option value="10264">10264 - AZLIN NORA BT. MUHD. NAZERI</option>
                                                <option value="10289">10289 - MOHD SHAH RIDLA B. MOHD ISMET</option>
                                                <option value="10293">10293 - MOHD YASSER B. TERMAZI</option>
                                                <option value="10330">10330 - MUHAMAD HAFFIZZUL BIN SUBANI</option>
                                                <option value="10372">10372 - NURUL SOFIA BINTI MOHD LASIM</option>
                                                <option value="10388">10388 - NORAZILA BINTI AHMAD HAMDI</option>
                                                <option value="10412">10412 - ARLIANY SYAZLIN BINTI ARASAD</option>


                                        </select>

        
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Pegawai Pengesah : <em class="req">*</em></label>
                                    <div class="col-sm-5 form-control-static">   
                                        
                                        <select name="jlmain.lc0Pgsah" id="terimaan_jlmain_lc0Pgsah" class="form-control input-sm" title="Pegawai Pengesah">
                                            <option value="">&lt;--- Pilih Pegawai Pengesah ---&gt;</option>
                                            <option value="10317">10317 - SHAHIRI BIN TAN</option>
                                            <option value="10416">10416 - MOHAMAD RAZIF BIN RAMLI</option>


                                    </select>

        
                                    </div>
                                </div>
                                <!-------------------------------------------------------------------->

                                <legend>BUTIRAN PESANAN</legend>   
                                <div class="panel panel-default">                  
                                    <table id="jlsubbList" pagesize="" class="table table-bordered table-condensed table-responsive table-striped" cellpadding="5px;">
                                        <thead>
                                            <tr>
                                                <th class="col-sm-1" rowspan="2" style="text-align: center">Bil.</th>
                                                <th class="col-sm-3" rowspan="2" style="text-align: center">Butiran</th>                                        
                                                <th class="col-sm-1" rowspan="2" style="text-align: right">Harga Seunit [RM]</th>
                                                <th class="col-sm-1" colspan="2" style="text-align: center">Kuantiti</th>
                                            </tr> 
                                            <tr>                                        
                                                <th class="col-sm-1" style="text-align: center">Pesan</th>
                                                <th class="col-sm-1" style="text-align: center">Nota Hantaran</th>
                                                <th class="col-sm-1" style="text-align: center">Terima</th>
                                            </tr> 
                                        </thead> 
                                        
                                        <tbody>
                                            
                                        </tbody>
                                        
                                    </table>
                                </div>
                                <div class="form-group row">
                                    <div class="operation-button col-sm-offset-2 col-sm-10"> 
                                        
                                        
                                            <button type="submit" class="simpan confirm btn btn-success" data-msg="Data yang dimasukkan adalah sahih?" formid="terimaan"><i class="fa fa-save fa"></i>&nbsp;Simpan Rekod</button> 
                                        
                                        <button type="reset" class="batal btn btn-primary" value="Batal Operasi" onclick="javascript:location.href = 'PenerimaanLink2'"><i class="fa fa-times"></i>&nbsp;Batal Operasi</button>
                                        
                                        
                                            <button type="button" class="senarai btn btn-info" onclick="javascript:location.href = 'inputJLmainLink2?sts=upd&amp;obj.lc0Nothn=/&amp;obj.lc0Nolcl=';" disabled="true"><i class="fa fa-file"></i>&nbsp;Lihat Senarai Rekod</button>
                                        

                                    </div>
                                </div>
                            </form></div> 
                        




                    </div>
                </div>            
            </div>
        </div>
    </div>
</div>

@endsection
