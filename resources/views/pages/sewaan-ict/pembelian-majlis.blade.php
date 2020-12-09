@extends('layout.master')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <span class="pull-right panel-options">
            <i class="fa" id="toggle"></i>
        </span>
        <h3 class="panel-title">Pendaftaran Aset Alih &gt; Pembelian Majlis</h3>
    </div>
    <div class="panel-body" id="panel">
        <form id="daftarLO" name="daftarLO" action="/ePBT_SSHT/pendaftaran/saveDaftarLOLink2" method="post" class="form-horizontal">

            <div class="form-group row">
                <label class="col-sm-3 control-label">Tahun Aset :</label>
                <div class="col-sm-2">
                    <div class="input-group">
                        <input type="text" name="jlmain.tahun" value="" disabled="disabled" id="tahun" class="form-control input-sm" onblur="loadDaftarAset()">
                        <input type="hidden" name="sinduk2.indukTahun" value="" id="tahun1">
                        <input type="hidden" name="sinduk2.indukNothn" value="" id="lc2Nothn">
                        <input type="hidden" name="sinduk2.indukRowid" value="" id="lc2Rowid">
                        <input type="hidden" name="sinduk2.indukNaset" value="" id="daftarLO_sinduk2_indukNaset">
                        <input type="hidden" name="sinduk2.indukNosiri" value="" id="daftarLO_sinduk2_indukNosiri">
                        
                        <span class="input-group-addon modalButton" data-toggle="modal" data-src="/ePBT_SSHT/pendaftaran/LovCarianAsetList" accesskey="" data-height="100%" data-width="99.6%" data-target="#modalAkaun">
                            <i class="fa fa-book"></i>
                        </span>
                    </div>
                </div>
                <label class="col-sm-3 control-label">Jenis Harta :</label>
                <div class="col-sm-2">
                    <b><div id="sjaJnama"></div></b>
                    <input type="hidden" name="sinduk2.indukJnshr" value="" id="lc2Jnshr">
                </div>
            </div>

            <!-- LOV UNTUK NO. PERMOHONAN -->
            <div>
                <div class="modal fade bs-example-modal-lg" id="modalAkaun" tabindex="-1" role="dialog" aria-labelledby="modalAkaunLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="modalAkaunLabel">Senarai Aset Yang Belum Didaftarkan</h4>
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
                <label class="col-sm-3 control-label">Tarikh Terima :</label>
                <div class="col-sm-2">
                    <b><div id="lc0Tkhtr"></div></b>
                </div>
                <label class="col-sm-3 control-label">Tarikh Pembelian :</label>
                <div class="col-sm-2">
                    <b><div id="lc0Tkloc"></div></b>
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-sm-3 control-label">Kuantiti :</label>
                <div class="col-sm-2">
                    <b><div id="lc2Quant2"></div></b>
                    <input type="hidden" name="sinduk2.lc2Quant1" value="" id="lc2Quant1">
                </div>
                <label class="col-sm-3 control-label">Harga Seunit [RM] :</label>
                <div class="col-sm-2">
                    <b><div id="lc2Harga"></div></b>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">No. LO :</label>
                <div class="col-sm-2">
                    <b><div id="lc0Nolcl"></div></b>
                    <input type="hidden" name="sinduk2.indukNolcl" value="" id="lc0Nolcl1">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Nama Aset :</label>
                <div class="col-sm-5">
                    <b><div id="sasSnama"></div></b>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Pembekal :</label>
                <div class="col-sm-5">
                    <b><div id="bekSnama"></div></b>
                    <input type="hidden" name="sinduk2.indukBekal" value="" id="bekBkkod">
                    <input type="hidden" name="sinduk2.indukAskod" value="" id="lc2Askod">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 control-label">Kategori Aset : </label>
                <div class="col-sm-5 form-control-static">
                    <select name="sinduk2.indukKtkod" id="daftarLO_sinduk2_indukKtkod" class="form-control input-sm" title="Kategori Aset" onchange="kategoriAset(this.value, '')">
                        <option value="">&lt;--- Pilih Kategori Aset ---&gt;</option>
                        <option value="A">A - TANAH MILIK BEBAS</option>
                        <option value="B">B - BANGUNAN</option>
                        <option value="C">C - KENDERAAN</option>
                        <option value="D">D - LOJI DAN JENTERA</option>
                        <option value="E">E - KELENGKAPAN PEJABAT</option>
                        <option value="F">F - PERHUBUNGAN DAN UTILITI</option>
                        <option value="G">G - SEWAAN</option>
                        <option value="H">H - PEMBERIAN DAN KENAAN BAYARAN TETAP</option>
                        <option value="I">I - PERBELANJAAN-PERBELANJAAN LAIN</option>
                        <option value="J">J - EMOLUMEN</option>
                        <option value="K">K - BAHAN-BAHAN MAKANAN DAN MINUMAN</option>
                        <option value="L">L - BEKALAN BAHAN BAHAN MAKANAN DAN MINUMAN</option>
                        <option value="M">M - BEKALAN BAHAN MENTAH/UTK PENYELENGGARAAN</option>
                        <option value="N">N - BEKALAN DAN BAHAN BAHAN LAIN</option>
                        <option value="P">P - PENYELENGGARAAN</option>
                        <option value="Q">Q - PROJEK MAJLIS</option>
                        <option value="R">R - PERKHIDMATAN</option>
                        <option value="S">S - PERJALANAN DAN SARA HIDUP</option>
                        <option value="T">T - PEMBAIKAN</option>
                        <option value="U">U - PERALATAN</option>
                        <option value="V">V - TANAH MILIK PAJAKAN </option>
                    </select>
                </div>
            </div>

            <div id="status1" style="display:none">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Jenis Badan :</label>
                    <div class="col-sm-5">
                        <select name="sinduk2.indukJenis" id="indukJenis" class="form-control input-sm" title="Jenis Badan" onchange="loadJenisJenama();">
                            <option value="">&lt;--- Sila Pilih ---&gt;</option>
                            <option value="1">KERETA</option>
                            <option value="2">LORI</option>
                            <option value="3">BAS</option>
                            <option value="4">TRAILER</option>
                            <option value="5">VAN</option>
                            <option value="6">MOTOSIKAL</option>
                            <option value="7">BASIKAL</option>
                            <option value="11">PAJERO</option>
                            <option value="12">TRAKTOR</option>
                            <option value="13">BACKHOE</option>
                            <option value="14">PICKUP TRUCK</option>
                            <option value="15">ENOCOM</option>
                            <option value="16">DISLUDGING TANKER</option>
                            <option value="17">LOADER EXCAVATOR</option>
                            <option value="8">MPV</option>
                            <option value="9">TESTING </option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Jenis Jenama :</label>
                    <div id="jenisJenama" class="col-sm-5">
                        <select name="sinduk2.indukJnama1" id="indukJnama1" class="form-control input-sm" title="Jenis Jenama" onchange="loadJenisModel();">
                            <option value="">&lt;--- Sila Pilih ---&gt;</option>
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Jenis Model :</label>
                    <div id="jenisModal" class="col-sm-5">
                        <select name="sinduk2.indukModel1" id="indukModel1" class="form-control input-sm" title="Jenis Model">
                            <option value="">&lt;--- Sila Pilih ---&gt;</option>
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Buatan :</label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <input type="text" name="sinduk2.indukBuatn1" value="" id="daftarLO_sinduk2_indukBuatn1" class="form-control input-sm">
                        </div>
                    </div>

                    <label class="col-sm-3 control-label">No.Enjin :</label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <input type="text" name="sinduk2.indukEnjin" value="" id="daftarLO_sinduk2_indukEnjin" class="form-control input-sm">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">No Casis :</label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <input type="text" name="sinduk2.indukCasis" value="" id="daftarLO_sinduk2_indukCasis" class="form-control input-sm">
                        </div>
                    </div>

                    <label class="col-sm-3 control-label">No.Pendaftaran :</label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <input type="text" name="sinduk2.indukNdftr" value="" id="daftarLO_sinduk2_indukNdftr" class="form-control input-sm">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Berat Tanpa Muatan :</label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <input type="text" name="sinduk2.indukBrttm" value="" id="daftarLO_sinduk2_indukBrttm" class="form-control input-sm">
                            <span class="input-group-addon">KG</span>
                        </div>
                    </div>

                    <label class="col-sm-3 control-label">Berat Dengan Muatan :</label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <input type="text" name="sinduk2.indukBrtdm" value="" id="daftarLO_sinduk2_indukBrtdm" class="form-control input-sm">
                            <span class="input-group-addon">KG</span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="status2" style="display:none">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Jenis Jenama :</label>
                    <div class="col-sm-5">
                        <input type="text" name="sinduk2.indukJnama" value="" id="daftarLO_sinduk2_indukJnama" class="form-control input-sm">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Model :</label>
                    <div class="col-sm-5">
                        <input type="text" name="sinduk2.indukModel" value="" id="daftarLO_sinduk2_indukModel" class="form-control input-sm">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Buatan :</label>
                    <div class="col-sm-5">
                        <input type="text" name="sinduk2.indukBuatn" value="" id="daftarLO_sinduk2_indukBuatn" class="form-control input-sm">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Nombor Siri :</label>
                    <div class="col-sm-5">
                        <input type="text" name="sinduk2.indukSirin" value="" id="daftarLO_sinduk2_indukSirin" class="form-control input-sm">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Unit Ukuran :</label>
                <div class="col-sm-5 form-control-static">
                    <select name="sinduk2.indukUnit" id="daftarLO_sinduk2_indukUnit" class="form-control input-sm" title="Unit Ukuran">
                        <option value="">&lt;--- Pilih Unit Ukuran ---&gt;</option>
                        <option value="A03">A03 - BATANG</option>
                        <option value="C03">C03 - BILAH</option>
                        <option value="C04">C04 - BOTOL</option>
                        <option value="B06">B06 - BUAH</option>
                        <option value="C09">C09 - BUKU</option>
                        <option value="B05">B05 - BUNGKUS</option>
                        <option value="A04">A04 - DOZEN</option>
                        <option value="B03">B03 - EKAR</option>
                        <option value="A02">A02 - GRAM</option>
                        <option value="C07">C07 - GULUNG</option>
                        <option value="C05">C05 - HELAI</option>
                        <option value="B01">B01 - KAKI PERSEGI</option>
                        <option value="C10">C10 - KEPING</option>
                        <option value="C02">C02 - KOTAK</option>
                        <option value="B02">B02 - METER</option>
                        <option value="A05">A05 - NASKAH</option>
                        <option value="A06">A06 - PASANG</option>
                        <option value="C06">C06 - RIM</option>
                        <option value="C08">C08 - SET</option>
                        <option value="A01">A01 - TAN METRIK</option>
                        <option value="B04">B04 - TIADA</option>
                        <option value="C01">C01 - UNIT</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 control-label">Perlu Selengara :</label>
                <div class="col-sm-2">
                    <select name="sinduk2.indukSlgra" id="daftarLO_sinduk2_indukSlgra" class="form-control input-sm" title="Status Selenggara">
                        <option value="">&lt;-- Sila Pilih --&gt;</option>
                        <option value="Y">YA</option>
                        <option value="T">TIDAK</option>
                    </select>
                </div>
                <label class="col-sm-3 control-label">Tempoh jaminan :</label>
                <div class="col-sm-2">
                    <div class="input-group">
                        <input type="text" name="sinduk2.indukJhyat" value="" id="daftarLO_sinduk2_indukJhyat" class="form-control input-sm">
                        <span class="input-group-addon">Tahun</span>
                    </div>
                </div>
            </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Harga Pembelian (RM) :</label>
                        <div class="col-sm-5">
                            <b><div id="lc2Harga1">
                        </div></b>
                        <input type="hidden" name="sinduk2.indukHtkos" value="" id="lc2Harga2">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Tarikh Diterima :</label>
                        <div class="col-sm-2 form-control-static">
                            <input type="text" name="sinduk2.indukDttrm" value="" id="lc0Tkhtr1" class="form-control has-feedback-right input-sm datepicker" title="Tarikh Diterima">
                            <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
                        </div>
                        <label class="col-sm-2 control-label">Tarikh Pembelian</label>
                        <div class="col-sm-2 form-control-static">
                            <input type="text" name="sinduk2.indukDbeli" value="" id="lc0Tkloc1" class="form-control has-feedback-right input-sm datepicker" title="Tarikh Pembelian">
                            <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Akseksori :</label>
                        <div class="col-sm-7">
                            <div class="input-group">
                                <textarea name="sinduk2.indukAksri" cols="90" rows="3" id="daftarLO_sinduk2_indukAksri" class="form-control input-sm" maxlength="4000"></textarea>

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Lokasi :</label>
                        <div class="col-sm-5">
                            <select name="sinduk2.indukLokkd" id="indukLokkd" class="form-control input-sm" title="Lokasi" onchange="loadLokasi();">
                                <option value="">&lt;--- Pilih Lokasi---&gt;</option>
                                <option value="0100">0100 : JABATAN KHIDMAT PENGURUSAN : null</option>
                                <option value="010119">010119 : BAHAGIAN PENTADBIRAN DAN KEURUSETIAAN : SURAU WANITA</option>
                                <option value="010108">010108 : BAHAGIAN PENTADBIRAN DAN KEURUSETIAAN : BILIK MESYUARAT IXORA</option>
                                <option value="010109">010109 : BAHAGIAN PENTADBIRAN DAN KEURUSETIAAN : BILIK AM</option>
                                <option value="010124">010124 : BAHAGIAN PENTADBIRAN DAN KEURUSETIAAN : TESTING </option>
                                <option value="010123">010123 : BAHAGIAN PENTADBIRAN DAN KEURUSETIAAN : IBU PEJABAT MDBG</option>
                                <option value="010122">010122 : BAHAGIAN PENTADBIRAN DAN KEURUSETIAAN : BILIK PEMANDU</option>
                                <option value="010121">010121 : BAHAGIAN PENTADBIRAN DAN KEURUSETIAAN : BILIK KAWALAN</option>
                                <option value="010120">010120 : BAHAGIAN PENTADBIRAN DAN KEURUSETIAAN : BILIK PABX</option>
                                <option value="010113">010113 : BAHAGIAN PENTADBIRAN DAN KEURUSETIAAN : BILIK AUDIO (BUNGA RAYA)</option>
                                <option value="010112">010112 : BAHAGIAN PENTADBIRAN DAN KEURUSETIAAN : BILIK MESYUARAT ALAMANDA</option>
                                <option value="010111">010111 : BAHAGIAN PENTADBIRAN DAN KEURUSETIAAN : BILIK PENYEDIAAN</option>
                                <option value="010110">010110 : BAHAGIAN PENTADBIRAN DAN KEURUSETIAAN : BILIK JAMUAN</option>
                                <option value="010102">010102 : BAHAGIAN PENTADBIRAN DAN KEURUSETIAAN : BILIK PEN PEG TADBIR N36</option>
                                <option value="010103">010103 : BAHAGIAN PENTADBIRAN DAN KEURUSETIAAN : BILIK FAIL</option>
                                <option value="010104">010104 : BAHAGIAN PENTADBIRAN DAN KEURUSETIAAN : KAUNTER</option>
                                <option value="010105">010105 : BAHAGIAN PENTADBIRAN DAN KEURUSETIAAN : RUANG PEJABAT</option>
                                <option value="010100">010100 : BAHAGIAN PENTADBIRAN DAN KEURUSETIAAN : BILIK SETIAUSAHA</option>
                                <option value="010114">010114 : BAHAGIAN PENTADBIRAN DAN KEURUSETIAAN : BILIK SELENGGARA (BUNGA RAYA)</option>
                                <option value="010115">010115 : BAHAGIAN PENTADBIRAN DAN KEURUSETIAAN : BILIK REHAT TETAMU (TINGKAT 1)</option>
                                <option value="010116">010116 : BAHAGIAN PENTADBIRAN DAN KEURUSETIAAN : AUDITORIUM</option>
                                <option value="010117">010117 : BAHAGIAN PENTADBIRAN DAN KEURUSETIAAN : BILIK SELENGGARA (AUDITORIUM)</option>
                                <option value="010118">010118 : BAHAGIAN PENTADBIRAN DAN KEURUSETIAAN : SURAU LELAKI</option>
                                <option value="010107">010107 : BAHAGIAN PENTADBIRAN DAN KEURUSETIAAN : BILIK AHLI MAJLIS</option>
                                <option value="010106">010106 : BAHAGIAN PENTADBIRAN DAN KEURUSETIAAN : BILIK PEMBANTU SETIAUSAHA</option>
                                <option value="010202">010202 : UNIT TEKNOLOGI MAKLUMAT : RUANG PEJABAT</option>
                                <option value="010201">010201 : UNIT TEKNOLOGI MAKLUMAT : BILIK PEG TEKNOLOGI MAKLUMAT</option>
                                <option value="010200">010200 : UNIT TEKNOLOGI MAKLUMAT : BILIK PEN PEG TEK. MAKLUMAT</option>
                                <option value="010204">010204 : UNIT TEKNOLOGI MAKLUMAT : BILIK SUMBER ICT</option>
                                <option value="010203">010203 : UNIT TEKNOLOGI MAKLUMAT : BILIK SERVER</option>
                                <option value="010300">010300 : UNIT AUDIT DALAM : BILIK AUDIT DALAM</option>
                                <option value="010400">010400 : UNIT PERHUBUNGAN AWAM &amp; KORPORAT : KAUNTER KHIDMAT PELANGGAN</option>
                                <option value="0105">0105 : BAHAGIAN PENGURUSAN SUMBER MANUSIA : null</option>
                                <option value="010605">010605 : BAHAGIAN TEKNOLOGI MAKLUMAT : BILIK DISKUSI</option>
                                <option value="010600">010600 : BAHAGIAN TEKNOLOGI MAKLUMAT : BILIK PEN. PEG. TEK. MAKLUMAT</option>
                                <option value="010604">010604 : BAHAGIAN TEKNOLOGI MAKLUMAT : RUANG PEJABAT</option>
                                <option value="010603">010603 : BAHAGIAN TEKNOLOGI MAKLUMAT : BILIK STOR</option>
                                <option value="010602">010602 : BAHAGIAN TEKNOLOGI MAKLUMAT : BILIK LATIHAN</option>
                                <option value="010601">010601 : BAHAGIAN TEKNOLOGI MAKLUMAT : BILIK SERVER</option>
                                <option value="0200">0200 : JABATAN PERBENDAHARAAN : null</option>
                                <option value="020106">020106 : JABATAN PERBENDAHARAAN : BILIK KEBAL</option>
                                <option value="020110">020110 : JABATAN PERBENDAHARAAN : LALUAN TANGGA</option>
                                <option value="020109">020109 : JABATAN PERBENDAHARAAN : LALUAN BILIK PEGAWAI</option>
                                <option value="020100">020100 : JABATAN PERBENDAHARAAN : BILIK PEGAWAI TADBIR</option>
                                <option value="020101">020101 : JABATAN PERBENDAHARAAN : BILIK PENOLONG AKAUNTAN</option>
                                <option value="020102">020102 : JABATAN PERBENDAHARAAN : BILIK MESYUARAT</option>
                                <option value="020103">020103 : JABATAN PERBENDAHARAAN : BILIK FAIL</option>
                                <option value="020104">020104 : JABATAN PERBENDAHARAAN : KAUNTER HASIL</option>
                                <option value="020108">020108 : JABATAN PERBENDAHARAAN : KAUNTER LAMAN LA</option>
                                <option value="020107">020107 : JABATAN PERBENDAHARAAN : RUANG MENUNGGU (LOBI)</option>
                                <option value="020105">020105 : JABATAN PERBENDAHARAAN : RUANG PEJABAT</option>
                                <option value="0300">0300 : JABATAN PENILAIAN : null</option>
                                <option value="030107">030107 : JABATAN PENILAIAN &amp; PENGURUSAN HARTA : DEWAN BANDARAN</option>
                                <option value="030100">030100 : JABATAN PENILAIAN &amp; PENGURUSAN HARTA : BILIK PEN PEGAWAI PENILAIAN</option>
                                <option value="030106">030106 : JABATAN PENILAIAN &amp; PENGURUSAN HARTA : BILIK DISKUSI</option>
                                <option value="030101">030101 : JABATAN PENILAIAN &amp; PENGURUSAN HARTA : BILIK KUMP B</option>
                                <option value="030102">030102 : JABATAN PENILAIAN &amp; PENGURUSAN HARTA : BILIK MESYUARAT</option>
                                <option value="030103">030103 : JABATAN PENILAIAN &amp; PENGURUSAN HARTA : BILIK FAIL</option>
                                <option value="030104">030104 : JABATAN PENILAIAN &amp; PENGURUSAN HARTA : RUANG PEJABAT</option>
                                <option value="030105">030105 : JABATAN PENILAIAN &amp; PENGURUSAN HARTA : KAUNTER</option>
                                <option value="030108">030108 : JABATAN PENILAIAN &amp; PENGURUSAN HARTA : ARENA SQUARE</option>
                                <option value="0400">0400 : JABATAN KHIDMAT BANDAR : null</option>
                                <option value="040101">040101 : JABATAN KHIDMAT BANDAR : BILIK PPKB U29</option>
                                <option value="040100">040100 : JABATAN KHIDMAT BANDAR : BILIK PPKB U32</option>
                                <option value="040102">040102 : JABATAN KHIDMAT BANDAR : RUANG PEJABAT</option>
                                <option value="040104">040104 : JABATAN KHIDMAT BANDAR : BILIK FAIL</option>
                                <option value="040105">040105 : JABATAN KHIDMAT BANDAR : KAUNTER</option>
                                <option value="040107">040107 : JABATAN KHIDMAT BANDAR : TAPAK PELUPUSAN SAMPAH</option>
                                <option value="040106">040106 : JABATAN KHIDMAT BANDAR : DEPOH KENDERAAN</option>
                                <option value="040103">040103 : JABATAN KHIDMAT BANDAR : BILIK PEN PEG PERANCANG II</option>
                                <option value="0500">0500 : JABATAN PERANCANG BANDAR &amp; LANDSKAP : null</option>
                                <option value="050107">050107 : BAHAGIAN PERANCANG BANDAR &amp; DESA : KAUNTER</option>
                                <option value="050101">050101 : BAHAGIAN PERANCANG BANDAR &amp; DESA : BILIK PEN PEG PERANCANG I</option>
                                <option value="050102">050102 : BAHAGIAN PERANCANG BANDAR &amp; DESA : BILIK FAIL</option>
                                <option value="050103">050103 : BAHAGIAN PERANCANG BANDAR &amp; DESA : BILIK MESYUARAT</option>
                                <option value="050104">050104 : BAHAGIAN PERANCANG BANDAR &amp; DESA : RUANG PEJABAT</option>
                                <option value="050106">050106 : BAHAGIAN PERANCANG BANDAR &amp; DESA : BILIK DISKUSI</option>
                                <option value="050105">050105 : BAHAGIAN PERANCANG BANDAR &amp; DESA : BILIK PEN JURUTERA</option>
                                <option value="050100">050100 : BAHAGIAN PERANCANG BANDAR &amp; DESA : BILIK PEG PERANCANG BANDAR</option>
                                <option value="050200">050200 : UNIT OSC : BILIK PEG PERANCANG OSC</option>
                                <option value="050205">050205 : UNIT OSC : RUANG LEGAR</option>
                                <option value="050206">050206 : UNIT OSC : BILIK FAIL 2</option>
                                <option value="050203">050203 : UNIT OSC : BILIK FAIL 1</option>
                                <option value="050202">050202 : UNIT OSC : KAUNTER OSC</option>
                                <option value="050201">050201 : UNIT OSC : BILIK PEN JURUTERA OSC</option>
                                <option value="0503">0503 : BAHAGIAN LANDSKAP : null</option>
                                <option value="0600">0600 : UNIT UNDANG-UNDANG : null</option>
                                <option value="060104">060104 : UNIT UNDANG-UNDANG : BILIK DISKUSI</option>
                                <option value="060103">060103 : UNIT UNDANG-UNDANG : KAUNTER</option>
                                <option value="060102">060102 : UNIT UNDANG-UNDANG : BILIK FAIL</option>
                                <option value="060101">060101 : UNIT UNDANG-UNDANG : RUANG PEJABAT</option>
                                <option value="060100">060100 : UNIT UNDANG-UNDANG : BILIK PEN PEG UNDANG-UNDANG</option>
                                <option value="0700">0700 : JABATAN PELESENAN : null</option>
                                <option value="070104">070104 : BAHAGIAN PELESENAN : KAUNTER</option>
                                <option value="070103">070103 : BAHAGIAN PELESENAN : RUANG PEJABAT</option>
                                <option value="070102">070102 : BAHAGIAN PELESENAN : BILIK FAIL</option>
                                <option value="070101">070101 : BAHAGIAN PELESENAN : BILIK KERJA</option>
                                <option value="070100">070100 : BAHAGIAN PELESENAN : BILIK PPKP U29</option>
                                <option value="070106">070106 : BAHAGIAN PELESENAN : RUANG MESYUARAT</option>
                                <option value="070105">070105 : BAHAGIAN PELESENAN : BILIK DISKUSI</option>
                                <option value="0800">0800 : JABATAN KEJURUTERAAN : null</option>
                                <option value="080100">080100 : JABATAN KEJURUTERAAN : BILIK JURUTERA</option>
                                <option value="080104">080104 : JABATAN KEJURUTERAAN : KAUNTER</option>
                                <option value="080102">080102 : JABATAN KEJURUTERAAN : BILIK FAIL</option>
                                <option value="080103">080103 : JABATAN KEJURUTERAAN : RUANG PEJABAT</option>
                                <option value="080101">080101 : JABATAN KEJURUTERAAN : BILIK PENOLONG JURUTERA</option>
                                <option value="080107">080107 : JABATAN KEJURUTERAAN : PANTRY</option>
                                <option value="080106">080106 : JABATAN KEJURUTERAAN : BILIK MESYUARAT</option>
                                <option value="080105">080105 : JABATAN KEJURUTERAAN : BILIK DISKUSI</option>
                                <option value="080202">080202 : JABATAN BANGUNAN : KAUNTER</option>
                                <option value="080204">080204 : JABATAN BANGUNAN : BILIK PANTRY</option>
                                <option value="080200">080200 : JABATAN BANGUNAN : BILIK PEN PEG SENIBINA</option>
                                <option value="080203">080203 : JABATAN BANGUNAN : BILIK FAIL</option>
                                <option value="080201">080201 : JABATAN BANGUNAN : RUANG PEJABAT</option>
                                <option value="090100">090100 : JABATAN LANDSKAP : BILIK PEN PEG ARKITEK L/SKAP</option>
                                <option value="090101">090101 : JABATAN LANDSKAP : KAUNTER</option>
                                <option value="090103">090103 : JABATAN LANDSKAP : NURSERY</option>
                                <option value="090102">090102 : JABATAN LANDSKAP : BILIK FAIL</option>
                                <option value="100102">100102 : JABATAN PENGUATKUASA : PANTRI</option>
                                <option value="100101">100101 : JABATAN PENGUATKUASA : RUANG PEJABAT</option>
                                <option value="100100">100100 : JABATAN PENGUATKUASA : BILIK PEMBANTU PENGUATKUASA</option>
                                <option value="1100">1100 : JABATAN YANG DIPERTUA : null</option>
                                <option value="110104">110104 : JABATAN YANG DIPERTUA : BILIK SOLAT YDP</option>
                                <option value="110103">110103 : JABATAN YANG DIPERTUA : BILIK MESYUARAT YANG DIPERTUA</option>
                                <option value="110102">110102 : JABATAN YANG DIPERTUA : BILIK PANTRY</option>
                                <option value="110100">110100 : JABATAN YANG DIPERTUA : BILIK YANG DIPERTUA</option>
                                <option value="110101">110101 : JABATAN YANG DIPERTUA : BILIK SETIAUSAHA PEJABAT</option>
                                <option value="1102">1102 : UNIT UNDANG-UNDANG : null</option>
                                <option value="110301">110301 : UNIT KORPORAT &amp; PERHUBUNGAN AWAM : BILIK PEN.PEG.TADBIR(PRO)</option>
                                <option value="110302">110302 : UNIT KORPORAT &amp; PERHUBUNGAN AWAM : RUANG PEJABAT (PRO)</option>
                                <option value="110303">110303 : UNIT KORPORAT &amp; PERHUBUNGAN AWAM : RUANG LOBI</option>
                                <option value="110300">110300 : UNIT KORPORAT &amp; PERHUBUNGAN AWAM : KAUNTER KHIDMAT PELANGGAN</option>
                                <option value="1104">1104 : UNIT AUDIT DALAM : null</option>
                                <option value="1105">1105 : UNIT PUSAT SEHENTI : null</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Pegawai Pengesah :</label>
                        <div id="pegPgsah" class="col-sm-5">
                            <select name="sinduk2.indukPnama" id="indukPnama" class="form-control input-sm" title="Pegawai Pengesah">
                                <option value="10317">10317 - SHAHIRI BIN TAN</option>
                                <option value="10416">10416 - MOHAMAD RAZIF BIN RAMLI</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Pegawai Bertanggungjawab :</label>
                        <div id="pegJawab" class="col-sm-5">
                            <select name="sinduk2.indukOnama" id="daftarLO_sinduk2_indukOnama" class="form-control input-sm" title="Pegawai Bertanggungjawab">
                                <option value="">&lt;--- Pilih Pegawai Bertanggungjawab ---&gt;</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <div class="col-sm-2 form-control-static">
                                <b>KOMPONEN</b>
                            </div>
                        </div>
                        <div class="col-sm-2 col-sm-offset-10">
                            <div class="btn-group">
                                <a id="addKomponen" class="btn btn-primary" href="#panelTransaksi">Tambah <i class="fa fa-plus-square"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body" id="panel">
                        <table class="table table-bordered table-condensed table-responsive table-striped" id="komponenTable">
                            <thead>
                                <tr>
                                    <th><label><b>No.</b></label></th>
                                    <th class="col-sm-2"><label><b>No. Siri</b></label></th>
                                    <th class="col-sm-2"><label><b>Jenis / Jenama</b></label></th>
                                    <th class="col-sm-2"><label><b>Model</b></label></th>
                                    <th class="col-sm-1"><label><b>Kos</b></label></th>
                                    <th class="col-sm-1"><label><b>Tempoh Jaminan</b></label></th>
                                    <th class="col-sm-4"><label><b>Catatan</b></label></th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                    <tr>
                                        <td>
                                            <div id="komponenList[0].skoSirikText">1</div>
                                        </td>
                                        <td class="col-sm-2">
                                            <input type="text" name="komponenList[0].skoSirik" maxlength="50" value="" id="komponenList[0].skoSirik" class="form-control input-sm">
                                        </td>
                                        <td class="col-sm-2">
                                            <input type="text" name="komponenList[0].skoJenis" maxlength="50" value="" id="komponenList[0].skoJenis" class="form-control input-sm"><br>
                                            <input type="text" name="komponenList[0].skoJenma" maxlength="50" value="" id="komponenList[0].skoJenma" class="form-control input-sm">
                                        </td>
                                        <td class="col-sm-2">
                                            <input type="text" name="komponenList[0].skoModel" maxlength="100" value="" id="komponenList[0].skoModel" class="form-control input-sm">
                                        </td>
                                        <td class="col-sm-1">
                                            <input type="text" name="komponenList[0].skoKosko" maxlength="12" value="" id="komponenList[0].skoKosko" class="form-control input-sm amount">
                                        </td>
                                        <td class="col-sm-1">
                                            <input type="text" name="komponenList[0].skoJamink" maxlength="10" value="" id="komponenList[0].skoJamink" class="form-control input-sm">
                                        </td>
                                        <td class="col-sm-4">
                                            <input type="text" name="komponenList[0].skoCatat" maxlength="200" value="" id="komponenList[0].skoCatat" class="form-control input-sm">
                                        </td>
                                    </tr>
                                
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-2 col-sm-offset-10">
                        <div class="btn-group">
                            <a id="addKomponen2" class="btn btn-primary" href="#panelTransaksi">Tambah <i class="fa fa-plus-square"></i></a>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="operation-button col-sm-offset-2 col-sm-10">
                            <button type="submit" class="simpan confirm btn btn-success" data-msg="Data yang dimasukkan adalah sahih?"><i class="fa fa-save fa"></i>&nbsp;Simpan Rekod</button>
                            <button type="reset" class="batal btn btn-primary" value="Batal Operasi" onclick="javascript:location.href = 'DaftarLOLink2'"><i class="fa fa-times"></i>&nbsp;Batal Operasi</button>
                            <button type="button" class="senarai btn btn-info" onclick="javascript:location.href = 'inputSenaraiKewpa032018Link2?';" disabled="true"><i class="fa fa-file"></i>&nbsp;Lihat Senarai Rekod</button>                            
                        </div>
                    </div>
                </form>

    </div>
</div>

@endsection