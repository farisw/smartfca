<h1 class="page-header">
    Entry Data <small> checklist document</small>
</h1>
<?php
$querypark = 	"
				
				";
?>

<?php
?>     
      <form>
		<input type="hidden" id="start_time" value="<?php echo date("Y-m-d H:i:s");?>">
		<input type="hidden" id="area" value="<?php echo $_SESSION['AREA'];?>">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><span class="glyphicon glyphicon-th">&nbsp</span>Check list-Kelengkapan Dokumen Pembayaran Kontrak</h3>
          </div>
          <div class="panel-body"> 
            <div class="row"> 
	            <div class="entry_result" id="entry_result"></div>
    		</div>
            <!--  Panel content -->
            <div class="row"> 
              <!--  nama_mitra -->
              <div class="col-lg-12">
                <div class="input-group"> <span class="input-group-addon">Nama Mitra &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                  <input type="text" class="form-control" placeholder="Nama Mitra" id="nama_mitra">
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 --> 
            </div>
            <!-- /.row -->
            
            <div class="row"> 
              <!--  nama_projek -->
              <div class="col-lg-12">
                <div class="input-group"> <span class="input-group-addon">Nama Projek &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                  <input type="text" class="form-control" placeholder="Nama Projek" id="nama_proyek">
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 --> 
            </div>
            <!-- /.row -->
            
            <div class="row"> 
              <!--  No_Kontrak + PPN-->
              <div class="col-lg-5">
                <div class="input-group"> <span class="input-group-addon">No. Kontrak &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                  <input type="text" class="form-control" placeholder="No. Kontrak" id="kontrak_no">
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-4 --> 
              <!--  No Kontrak + PPN Tgl-->
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">Tgl</span>
                  <input type="text" class="form-control" placeholder="Tgl" id="kontrak_tgl">
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-4 --> 
              <!--  No Kontrak + PPN IDR-->
              <div class="col-lg-1">
                <div class="input-group"> 
                  <select class="form-control" id="kontrak_currency">
                    <!--<option value="#" disabled>Currency</option>-->
                    <option>IDR</option>
                    <option>USD</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="input-group"> <span class="input-group-addon"></span>
                  <input type="text" class="form-control" placeholder="Amount" id="kontrak_amount">
                </div>
              </div>              <!-- /.col-lg-4 --> 
            </div>
            <!-- /.row -->
            
            <div class="row">
              <!--  No_PO/SP-->
              <div class="col-lg-5">
                <div class="input-group"> <span class="input-group-addon">No. PO/SP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                  <input type="text" class="form-control" placeholder="No. PO/SP" id="po_sp_no">
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-4 --> 
              <!--  No Kontrak + PPN Tgl-->
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">Tgl</span>
                  <input type="text" class="form-control" placeholder="Tgl" id="po_sp_tgl">
                </div>
                <!-- /input-group --> 
              </div>
              <div class="col-lg-1">
                <div class="input-group"> 
                  <select class="form-control" id="po_sp_currency">
                    <!--<option value="#" disabled>Currency</option>-->
                    <option>IDR</option>
                    <option>USD</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="input-group"> <span class="input-group-addon"></span>
                  <input type="text" class="form-control" placeholder="Amount" id="po_sp_amount">
                </div>
              </div>
            </div>
            <div class="row"> 
              <!--  No_Amandemen-->
              <div class="col-lg-5">
                <div class="input-group"> <span class="input-group-addon">No. Amandemen</span>
                  <input type="text" class="form-control" placeholder="No. Amandemen" id="amandemen_no">
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-4 --> 
              <!--  No Kontrak + PPN Tgl-->
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">Tgl</span>
                  <input type="text" class="form-control" placeholder="Tgl" id="amandemen_tgl">
                </div>
                <!-- /input-group --> 
              </div>
              <div class="col-lg-1">
                <div class="input-group"> 
                  <select class="form-control" id="amandemen_currency">
                    <!--<option value="#" disabled>Currency</option>-->
                    <option>IDR</option>
                    <option>USD</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="input-group"> <span class="input-group-addon"></span>
                  <input type="text" class="form-control" placeholder="Amount" id="amandemen_amount">
                </div>
              </div>
              <!-- /.col-lg-4 --> 
            </div>
            <!-- /.row -->

            <div class="row"> 
              <!--  No_Amandemen-->
              <div class="col-lg-5">
                <div class="input-group"> <span class="input-group-addon">Nilai stlh Pajak&nbsp;&nbsp;&nbsp;</span>
                  <input type="text" class="form-control" placeholder="Amount" id="true_amount" name="number">
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-4 --> 
              <!--  No Kontrak + PPN Tgl-->
              <div class="col-lg-1">
                <div class="input-group"> 
                  <select class="form-control" id="true_currency">
                    <!--<option value="#" disabled>Currency</option>-->
                    <option>IDR</option>
                    <option>USD</option>
                  </select>
                </div>
              </div>
              <!-- /.col-lg-4 --> 
            </div>
            <!-- /.row -->
            
            <div class="row"> 
              <!--  Keterangan -->
              <div class="col-lg-12">
                <div class="input-group"> <span class="input-group-addon">Keterangan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                  <input type="text" class="form-control" placeholder="Keterangan" id="keterangan_value">
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 --> 
            </div>
            <!-- /.row --> 
            
            <div class="row"> 
              <!--  Keterangan -->
              <div class="col-lg-5">
                <div class="input-group"> <span class="input-group-addon">No. SAP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                  <input type="text" class="form-control" placeholder="No SAP" id="no_sap">
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 --> 
            </div>
            <!-- /.row --> 
            
            <!--  Panel content --> 
          </div>
        </div>
        <!--anel panel-default-->
        
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><span class="glyphicon glyphicon-th">&nbsp</span>Detail Document</h3>
          </div>
          <div class="panel-body"> 
            <!--  Panel content -->
            <p>1.) No. Surat Tagihan</p>
            <div class="row">
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="tagihan" id="tagihan_1" >
                  </span>
                  <input type="text" class="form-control" placeholder="Ada" disabled="">
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 -->
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="tagihan" id="tagihan_0">
                  </span>
                  <input type="text" class="form-control" placeholder="Tidak Ada" disabled="">
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 --> 
              
              <!--  Surat Tagihan -->
              <div class="col-lg-4">
                <div class="input-group"> <span class="input-group-addon">No. Surat Tagihan</span>
                  <input type="text" class="form-control" placeholder="No Surat Tagihan" id="tagihan_no">
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 --> 
              
              <!--  Tgl-->
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">Tgl</span>
                  <input type="text" class="form-control" placeholder="Tgl" id="tagihan_tgl">
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-4 --> 
              <!--  Tgl-->
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">Tgl</span>
                  <input type="text" class="form-control" placeholder="Tgl Masuk" id="tagihan_tgl_masuk">
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-4 --> 
            </div>
            <!-- /.row -->
            
            <p>2.) Invoice</p>
            <div class="row">
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="invoice" id="invoice_1">
                  </span>
                  <input type="text" class="form-control" placeholder="Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 -->
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="invoice" id="invoice_0">
                  </span>
                  <input type="text" class="form-control" placeholder="Tidak Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 --> 
              
              <!--  Invoice -->
              <div class="col-lg-4">
                <div class="input-group"> <span class="input-group-addon">No. Invoice</span>
                  <input type="text" class="form-control" placeholder="No Invoice" id="invoice_no">
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 --> 
              
              <!--  Tgl-->
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">Tgl</span>
                  <input type="text" class="form-control" placeholder="Tgl" id="invoice_tgl">
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-4 --> 
              <!--  Tgl-->
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">Tgl</span> 
                  <!-- <input type="text" class="form-control" placeholder="Tgl Masuk" class="datepicker" data-date-format="mm/dd/yyyy" > -->
                  <input type="text" class="form-control" placeholder="Tgl Masuk" id="invoice_tgl_masuk" data-date-format="mm/dd/yyyy">
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-4 --> 
              
            </div>
            <!-- /.row -->
            
            <p>3.) PO Awal NON PPN</p>
            <div class="row" > 
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="po_non_ppn" id="po_non_ppn_1">
                  </span>
                  <input type="text" class="form-control" placeholder="Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 -->
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="po_non_ppn" id="po_non_ppn_0">
                  </span>
                  <input type="text" class="form-control" placeholder="Tidak Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 --> 
              <div class="col-lg-1">
                <div class="input-group"> 
                  <select class="form-control" id="po_non_ppn_currency" >
                    <!--<option value="#" disabled>Currency</option>-->
                    <option>IDR</option>
                    <option>USD</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="input-group"> <span class="input-group-addon"></span>
                  <input type="text" class="form-control" placeholder="Amount" id="po_non_ppn_amount">
                </div>
              </div>
              <!-- /.col-lg-4 --> 
              <div class="col-lg-4a">
                <div class="input-group"> <span class="input-group-addon">THP REKON</span>
                  <input type="text" class="form-control" placeholder="Tahap REKON" id="po_non_ppn_thp_rekon">
                </div>
              </div>
            </div>
            <!-- /.row -->
            
            <div class="row"> 

              <!-- /.col-lg-6 --> 
              <div class="col-lg-4">
                <div class="input-group"> <span class="input-group-addon">NILAI AMANDEMEN NON PPN</span>
                  <select class="form-control" id="po_non_ppn_amd_currency" >
                    <!--<option value="#" disabled>Currency</option>-->
                    <option>IDR</option>
                    <option>USD</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="input-group"> <span class="input-group-addon">NILAI AMANDEMEN NON PPN</span>
                  <input type="text" class="form-control" placeholder="Amount" id="po_non_ppn_amd_amount">
                </div>
              </div>
              <!-- /.col-lg-4 --> 
            </div>
            <!-- /.row -->
            <p>4.) Batas Akhir Pekerjaan</p>
            <div class="row"> 
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="bts_akhir_kerja" id="bts_akhir_kerja_1">
                  </span>
                  <input type="text" class="form-control" placeholder="Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 -->
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="bts_akhir_kerja" id="bts_akhir_kerja_0">
                  </span>
                  <input type="text" class="form-control" placeholder="Tidak Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
              <div class="col-lg-4">
                <div class="input-group"> <span class="input-group-addon">NO. BAUT</span>
                  <input type="text" class="form-control" placeholder="No BAUT" id="bts_akhir_kerja_no">
                </div>
              </div>
            </div>
            
            <p>5.) BAST NON PPN</p>
            <div class="row"> 
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="bast_non_ppn" id="bast_non_ppn_1">
                  </span>
                  <input type="text" class="form-control" placeholder="Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 -->
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="bast_non_ppn" id="bast_non_ppn_0">
                  </span>
                  <input type="text" class="form-control" placeholder="Tidak Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
               <div class="col-lg-1">
                <div class="input-group"> 
                  <select class="form-control" id="bast_non_ppn_currency" >
                    <!--<option value="#" disabled>Currency</option>-->
                    <option>IDR</option>
                    <option>USD</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="input-group"> <span class="input-group-addon"></span>
                  <input type="text" class="form-control" placeholder="Amount" id="bast_non_ppn_amount" >
                </div>
              </div>
              <div class="col-lg-4a">
                <div class="input-group"> <span class="input-group-addon">Barang</span>
                  <input type="text" class="form-control" placeholder="Barang" id="bast_non_ppn_barang">
                </div>
              </div>
            </div>
            
            <div class="row"> 
              <div class="col-lg-4">
                <div class="input-group"> <span class="input-group-addon">Jasa</span>
                  <input type="text" class="form-control" placeholder="Jasa" id="bast_non_ppn_jasa">
                </div>
              </div>
              <!--  Tgl-->
              <div class="col-lg-3">
                <div class="input-group"> <span class="input-group-addon">Tgl BAUT</span> 
                  <!-- <input type="text" class="form-control" placeholder="Tgl Masuk" class="datepicker" data-date-format="mm/dd/yyyy" > -->
                  <input type="text" class="form-control" placeholder="Tgl BAUT" data-date-format="mm/dd/yyyy" id="bast_non_ppn_tgl_baut">
                </div>
              </div>
              <div class="col-lg-3">
                <div class="input-group"> <span class="input-group-addon">Tgl BAST</span> 
                  <!-- <input type="text" class="form-control" placeholder="Tgl Masuk" class="datepicker" data-date-format="mm/dd/yyyy" > -->
                  <input type="text" class="form-control" placeholder="Tgl BAST" data-date-format="mm/dd/yyyy" id="bast_non_ppn_tgl_bast">
                </div>
              </div>
            </div>
            
            <p>6.) Potongan Uang Muka</p>
            <div class="row"> 
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="ptgn_uang_muka" id="ptgn_uang_muka_1">
                  </span>
                  <input type="text" class="form-control" placeholder="Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 -->
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="ptgn_uang_muka" id="ptgn_uang_muka_0">
                  </span>
                  <input type="text" class="form-control" placeholder="Tidak Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
               <div class="col-lg-1">
                <div class="input-group"> 
                  <select class="form-control"  id="ptgn_uang_muka_currency">
                    <!--<option value="#" disabled>Currency</option>-->
                    <option>IDR</option>
                    <option>USD</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="input-group"> <span class="input-group-addon"></span>
                  <input type="text" class="form-control" placeholder="Amount" id="ptgn_uang_muka_amount">
                </div>
              </div>
            </div>
            
            <p>7.) Kuitansi + PPN</p>
            <div class="row"> 
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="kuitansi" id="kuitansi_1">
                  </span>
                  <input type="text" class="form-control" placeholder="Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 -->
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="kuitansi" id="kuitansi_0">
                  </span>
                  <input type="text" class="form-control" placeholder="Tidak Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
               <div class="col-lg-1">
                <div class="input-group">
                  <select class="form-control"  id="kuitansi_currency">
                    <!--<option value="#" disabled>Currency</option>-->
                    <option>IDR</option>
                    <option>USD</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="input-group"> <span class="input-group-addon"></span>
                  <input type="text" class="form-control" placeholder="Amount" id="kuitansi_amount">
                </div>
              </div>
              <div class="col-lg-4a">
                <div class="input-group"> <span class="input-group-addon">Atau</span>
                  <input type="text" class="form-control" placeholder="Atau" id="kuitansi_atau">
                </div>
              </div>
            </div>
            
            <div class="row"> 
              <div class="col-lg-4">
                <div class="input-group"> <span class="input-group-addon">No Kuitansi</span>
                  <input type="text" class="form-control" placeholder="No Kuitansi" id="kuitansi_no">
                </div>
              </div>         
            </div>

            <p>8.) Rekening</p>
            <div class="row"> 
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="rekening" id="rekening_1">
                  </span>
                  <input type="text" class="form-control" placeholder="Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 -->
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="rekening" id="rekening_0">
                  </span>
                  <input type="text" class="form-control" placeholder="Tidak Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
              <div class="col-lg-4a">
                <div class="input-group"> <span class="input-group-addon">A.N</span>
                  <input type="text" class="form-control" placeholder="Atas Nama" id="rekening_ats_nm">
                </div>
              </div>
               <div class="col-lg-1">
                <div class="input-group"> 
                  <select class="form-control"  id="rekening_currency">
                    <!--<option value="#" disabled>Currency</option>-->
                    <option>IDR</option>
                    <option>USD</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="input-group"> <span class="input-group-addon"></span>
                  <input type="text" class="form-control" placeholder="Amount"  id="rekening_amount">
                </div>
              </div>
            </div>
            
            <div class="row"> 
              <div class="col-lg-4">
                <div class="input-group"> <span class="input-group-addon">BANK</span>
                  <input type="text" class="form-control" placeholder="BANK" id="rekening_bank">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="input-group"> <span class="input-group-addon">Kode Switch</span>
                  <input type="text" class="form-control" placeholder="Kode Switch" id="rekening_switch">
                </div>
              </div>
            </div>
            
            <p>9.) Faktur Pajak</p>
            <div class="row"> 
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="pajak" id="pajak_1">
                  </span>
                  <input type="text" class="form-control" placeholder="Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 -->
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="pajak" id="pajak_0">
                  </span>
                  <input type="text" class="form-control" placeholder="Tidak Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
               <div class="col-lg-1">
                <div class="input-group"> 
                  <select class="form-control" id="pajak_currency">
                    <!--<option value="#" disabled>Currency</option>-->
                    <option>IDR</option>
                    <option>USD</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="input-group"> <span class="input-group-addon"></span>
                  <input type="text" class="form-control" placeholder="Amount" id="pajak_amount">
                </div>
              </div>
              <div class="col-lg-4a">
                <div class="input-group"> <span class="input-group-addon">NO</span>
                  <input type="text" class="form-control" placeholder="No" id="pajak_no">
                </div>
              </div>
            </div>
	
    		<div class="row">
              <div class="col-lg-3">
                <div class="input-group"> <span class="input-group-addon">Tanggal</span>
                  <input type="text" class="form-control" placeholder="Tanggal" id="pajak_tgl">
                </div>
              </div>
            </div>
            

            <p>10.) Jaminan Uang Muka</p>
            <div class="row"> 
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="jamn_uang_muka" id="jamn_uang_muka_1">
                  </span>
                  <input type="text" class="form-control" placeholder="Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 -->
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="jamn_uang_muka" id="jamn_uang_muka_0">
                  </span>
                  <input type="text" class="form-control" placeholder="Tidak Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
               <div class="col-lg-1">
                <div class="input-group"> 
                  <select class="form-control" id="jamn_uang_muka_currency">
                    <!--<option value="#" disabled>Currency</option>-->
                    <option>IDR</option>
                    <option>USD</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="input-group"> <span class="input-group-addon"></span>
                  <input type="text" class="form-control" placeholder="Amount" id="jamn_uang_muka_amount">
                </div>
              </div>
              <div class="col-lg-4a">
                <div class="input-group"> <span class="input-group-addon">ASSR</span>
                  <input type="text" class="form-control" placeholder="ASSR" id="jamn_uang_muka_assr">
                </div>
              </div>
            </div>
	
    		<div class="row">
              <div class="col-lg-3">
                <div class="input-group"> <span class="input-group-addon">Expired</span>
                  <input type="text" class="form-control" placeholder="Expired" id="jamn_uang_muka_expired">
                </div>
              </div>
            </div> 
           
            
            <p>11.) Jaminan Pelaksanaan</p>
            <div class="row"> 
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="jamn_plksa" id="jamn_plksa_1">
                  </span>
                  <input type="text" class="form-control" placeholder="Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 -->
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="jamn_plksa" id="jamn_plksa_0">
                  </span>
                  <input type="text" class="form-control" placeholder="Tidak Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
               <div class="col-lg-1">
                <div class="input-group"> 
                  <select class="form-control" id="jamn_plksa_currency">
                    <!--<option value="#" disabled>Currency</option>-->
                    <option>IDR</option>
                    <option>USD</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="input-group"> <span class="input-group-addon"></span>
                  <input type="text" class="form-control" placeholder="Amount" id="jamn_plksa_amount">
                </div>
              </div>
              <div class="col-lg-4a">
                <div class="input-group"> <span class="input-group-addon">ASSR</span>
                  <input type="text" class="form-control" placeholder="ASSR" id="jamn_plksa_assr">
                </div>
              </div>
            </div>
	
    		<div class="row">
              <div class="col-lg-3">
                <div class="input-group"> <span class="input-group-addon">Expired</span>
                  <input type="text" class="form-control" placeholder="Expired" id="jamn_plksa_expired">
                </div>
              </div>
            </div> 


            <p>12.) Jaminan Pemeliharaan</p>
            <div class="row"> 
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="jamn_pmhr" id="jamn_pmhr_1">
                  </span>
                  <input type="text" class="form-control" placeholder="Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 -->
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="jamn_pmhr" id="jamn_pmhr_0">
                  </span>
                  <input type="text" class="form-control" placeholder="Tidak Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
               <div class="col-lg-1">
                <div class="input-group"> 
                  <select class="form-control" id="jamn_pmhr_currency">
                    <!--<option value="#" disabled>Currency</option>-->
                    <option>IDR</option>
                    <option>USD</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="input-group"> <span class="input-group-addon"></span>
                  <input type="text" class="form-control" placeholder="Amount" id="jamn_pmhr_amount">
                </div>
              </div>
              <div class="col-lg-4a">
                <div class="input-group"> <span class="input-group-addon">ASSR</span>
                  <input type="text" class="form-control" placeholder="ASSR" id="jamn_pmhr_assr">
                </div>
              </div>
            </div>
	
    		<div class="row">
              <div class="col-lg-3">
                <div class="input-group"> <span class="input-group-addon">Expired</span>
                  <input type="text" class="form-control" placeholder="Expired" id="jamn_pmhr_expired">
                </div>
              </div>
            </div> 


            <p>13.) Polis Asuransi</p>
            <div class="row"> 
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="pls_asu" id="pls_asu_1">
                  </span>
                  <input type="text" class="form-control" placeholder="Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 -->
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="pls_asu" id="pls_asu_0">
                  </span>
                  <input type="text" class="form-control" placeholder="Tidak Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
              <div class="col-lg-3">
                <div class="input-group"> <span class="input-group-addon">No</span>
                  <input type="text" class="form-control" placeholder="No" id="pls_asu_no">
                </div>
              </div>
              <div class="col-lg-3">
                <div class="input-group"> <span class="input-group-addon">ASSR</span>
                  <input type="text" class="form-control" placeholder="ASSR" id="pls_asu_assr">
                </div>
              </div>
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">Expired</span>
                  <input type="text" class="form-control" placeholder="Expired" id="pls_asu_expired">
                </div>
              </div>
            </div>
	

            <p>14.) Tanda Terima AS BUILD DRAW</p>
            <div class="row"> 
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="tt_bld_draw" id="tt_bld_draw_1">
                  </span>
                  <input type="text" class="form-control" placeholder="Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 -->
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="tt_bld_draw" id="tt_bld_draw_0">
                  </span>
                  <input type="text" class="form-control" placeholder="Tidak Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
              <div class="col-lg-5">
                <div class="input-group"> <span class="input-group-addon">No</span>
                  <input type="text" class="form-control" placeholder="No" id="tt_bld_draw_no">
                </div>
              </div>
              <div class="col-lg-2a">
                <div class="input-group"> <span class="input-group-addon">Tanggal</span>
                  <input type="text" class="form-control" placeholder="Tanggal" id="tt_bld_draw_tgl">
                </div>
              </div>
            </div>


            <p>15.) SIUJK</p>
            <div class="row"> 
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="siujk" id="siujk_1">
                  </span>
                  <input type="text" class="form-control" placeholder="Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 -->
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="siujk" id="siujk_0">
                  </span>
                  <input type="text" class="form-control" placeholder="Tidak Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
              <div class="col-lg-5">
                <div class="input-group"> <span class="input-group-addon">No</span>
                  <input type="text" class="form-control" placeholder="No" id="siujk_no">
                </div>
              </div>
              <div class="col-lg-2a">
                <div class="input-group"> <span class="input-group-addon">Tanggal</span>
                  <input type="text" class="form-control" placeholder="Tanggal" id="siujk_tgl">
                </div>
              </div>
            </div>


            <p>16.) NPWP</p>
            <div class="row"> 
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="npwp" id="npwp_1">
                  </span>
                  <input type="text" class="form-control" placeholder="Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 -->
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="npwp" id="npwp_0">
                  </span>
                  <input type="text" class="form-control" placeholder="Tidak Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
              <div class="col-lg-5">
                <div class="input-group"> <span class="input-group-addon">No</span>
                  <input type="text" class="form-control" placeholder="No" id="npwp_no">
                </div>
              </div>
              <div class="col-lg-2a">
                <div class="input-group"> <span class="input-group-addon">Tanggal</span>
                  <input type="text" class="form-control" placeholder="Tanggal" id="npwp_tgl">
                </div>
              </div>
            </div>

            
            <p>17.) Form DGT-1</p>
            <div class="row"> 
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="dgt" id="dgt_1">
                  </span>
                  <input type="text" class="form-control" placeholder="Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 -->
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="dgt" id="dgt_0">
                  </span>
                  <input type="text" class="form-control" placeholder="Tidak Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
              <div class="col-lg-5">
                <div class="input-group"> <span class="input-group-addon">No</span>
                  <input type="text" class="form-control" placeholder="No" id="dgt_no">
                </div>
              </div>
              <div class="col-lg-2a">
                <div class="input-group"> <span class="input-group-addon">Tanggal</span>
                  <input type="text" class="form-control" placeholder="Tanggal" id="dgt_tgl">
                </div>
              </div>
            </div>


            <p>18.) SIDE LETTER</p>
            <div class="row"> 
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="side_ltr" id="side_ltr_1">
                  </span>
                  <input type="text" class="form-control" placeholder="Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 -->
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="side_ltr" id="side_ltr_0">
                  </span>
                  <input type="text" class="form-control" placeholder="Tidak Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
              <div class="col-lg-5">
                <div class="input-group"> <span class="input-group-addon">No</span>
                  <input type="text" class="form-control" placeholder="No" id="side_ltr_no">
                </div>
              </div>
              <div class="col-lg-2a">
                <div class="input-group"> <span class="input-group-addon">Tanggal</span>
                  <input type="text" class="form-control" placeholder="Tanggal" id="side_ltr_tgl">
                </div>
              </div>
            </div>


            <p>19.) REKON Waktu</p>
            <div class="row"> 
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="rekon_wkt" id="rekon_wkt_1">
                  </span>
                  <input type="text" class="form-control" placeholder="Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 -->
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="rekon_wkt" id="rekon_wkt_0">
                  </span>
                  <input type="text" class="form-control" placeholder="Tidak Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
            </div>


            <p>20.) PO MIGO</p>
            <div class="row"> 
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="po_migo" id="po_migo_1">
                  </span>
                  <input type="text" class="form-control" placeholder="Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 -->
              <div class="col-lg-2">
                <div class="input-group"> <span class="input-group-addon">
                  <input type="radio" name="po_migo" id="po_migo_0">
                  </span>
                  <input type="text" class="form-control" placeholder="Tidak Ada" disabled="" >
                </div>
                <!-- /input-group --> 
              </div>
              <div class="col-lg-8">
                <div class="input-group"> <span class="input-group-addon"></span>
                  <input type="text" class="form-control" placeholder="" id="po_migo_value">
                </div>
              </div>

            </div>

            <!--
			<div class="row">
            <br>
            </div>
			<div class="row">
			  <div class="col-lg-12" align="center">
			    <div class="input-group">
                  <input type="submit" name="submit_off" id="submit_off" value="Submit Document &raquo;" />
			    </div>
			  </div>
			</div> /.row -->
            
            <!--  Panel content --> 
          </div>
        </div>
        <!--anel panel-default-->
        
      </form>
      <!-- /.form --> 