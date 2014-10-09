/*
░░░░░░░▄▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▄░░░░░░
░░░░░░█░░▄▀▀▀▀▀▀▀▀▀▀▀▀▀▄░░█░░░░░
░░░░░░█░█░▀░░░░░▀░░▀░░░░█░█░░░░░
░░░░░░█░█░░░░░░░░▄▀▀▄░▀░█░█▄▀▀▄░
█▀▀█▄░█░█░░▀░░░░░█░░░▀▄▄█▄▀░░░█░
▀▄▄░▀██░█▄░▀░░░▄▄▀░░░░░░░░░░░░▀▄
░░▀█▄▄█░█░░░░▄░░█░░░▄█░░░▄░▄█░░█
░░░░░▀█░▀▄▀░░░░░█░██░▄░░▄░░▄░███
░░░░░▄█▄░░▀▀▀▀▀▀▀▀▄░░▀▀▀▀▀▀▀░▄▀░
░░░░█░░▄█▀█▀▀█▀▀▀▀▀▀█▀▀█▀█▀▀█░░░
░░░░▀▀▀▀░░▀▀▀░░░░░░░░▀▀▀░░▀▀░░░░*/



$("#menu-toggle").click(function(e) {
	e.preventDefault();
	$("#wrapper").toggleClass("toggled");
 });
$('#kontrak_tgl').datepicker({
	format: 'dd/mm/yyyy',
	startDate: '-3d'
});
$('#po_sp_tgl').datepicker({
	format: 'dd/mm/yyyy',
	startDate: '-3d'
});
$('#amandemen_tgl').datepicker({
	format: 'dd/mm/yyyy',
	startDate: '-3d'
});
$('#tagihan_tgl').datepicker({
	format: 'dd/mm/yyyy',
	startDate: '-3d'
});
$('#invoice_tgl').datepicker({
	format: 'dd/mm/yyyy',
	startDate: '-3d'
});
$('#tagihan_tgl_masuk').datepicker({
	format: 'dd/mm/yyyy',
	startDate: '-3d'
});
$('#invoice_tgl_masuk').datepicker({
	format: 'dd/mm/yyyy',
	startDate: '-3d'
});
$('#bast_non_ppn_tgl_baut').datepicker({
	format: 'dd/mm/yyyy',
	startDate: '-3d'
});
$('#bast_non_ppn_tgl_bast').datepicker({
	format: 'dd/mm/yyyy',
	startDate: '-3d'
});
$('#pajak_tgl').datepicker({
	format: 'dd/mm/yyyy',
	startDate: '-3d'
});
$('#jamn_uang_muka_expired').datepicker({
	format: 'dd/mm/yyyy',
	startDate: '-3d'
});
$('#jamn_plksa_expired').datepicker({
	format: 'dd/mm/yyyy',
	startDate: '-3d'
});
$('#jamn_pmhr_expired').datepicker({
	format: 'dd/mm/yyyy',
	startDate: '-3d'
});
$('#pls_asu_expired').datepicker({
	format: 'dd/mm/yyyy',
	startDate: '-3d'
});
$('#tt_bld_draw_tgl').datepicker({
	format: 'dd/mm/yyyy',
	startDate: '-3d'
});
$('#siujk_tgl').datepicker({
	format: 'dd/mm/yyyy',
	startDate: '-3d'
});
$('#npwp_tgl').datepicker({
	format: 'dd/mm/yyyy',
	startDate: '-3d'
});
$('#dgt_tgl').datepicker({
	format: 'dd/mm/yyyy',
	startDate: '-3d'
});
$('#side_ltr_tgl').datepicker({
	format: 'dd/mm/yyyy',
	startDate: '-3d'
});

//knob
$(function() {
	$(".dial").knob({
		"fgColor":"#8dc63f",
		"lineCap":"round",
		"width":150,
		"height":150,
		
		"skin":"tron",
		"readOnly":true
				});
	$(".dial2").knob({
		"fgColor":"#00aeef",
		"lineCap":"round",
		"width":150,
		"height":150,
		
		"skin":"tron",
		"readOnly":true
				});
	$(".dial3").knob({
		"fgColor":"#f7941d",
		"lineCap":"round",
		"width":150,
		"height":150,
		
		"skin":"tron",
		"readOnly":true
				});
	$(".dial4").knob({
		"fgColor":"#7d7d7d",
		"lineCap":"round",
		"width":150,
		"height":150,
		
		"skin":"tron",
		"readOnly":true
				});		
				
});

//	format Number
			
$(function(){
	// Set up the number formatting.
	$('#kontrak_amount').number( true, 0 );
	$('#po_sp_amount').number( true, 0 );
	$('#amandemen_amount').number( true, 0 );
	$('#true_amount').number( true, 0 );
	$('#po_non_ppn_amount').number( true, 0 );
	$('#po_non_ppn_amd_amount').number( true, 0 );
	$('#bast_non_ppn_amount').number( true, 0 );
	$('#ptgn_uang_muka_amount').number( true, 0 );
	$('#kuitansi_amount').number( true, 0 );
	$('#rekening_amount').number( true, 0 );
	$('#pajak_amount').number( true, 0 );
	$('#jamn_uang_muka_amount').number( true, 0 );
	$('#jamn_pmhr_amount').number( true, 0 );
	$('#jamn_plksa_amount').number( true, 0 );
	// Get the value of the number for the demo.
	//$('#get_number').on('click',function(){
		
	//	var val = $('#price').val();
		
	//	$('#number_container').slideDown('fast');
	//	$('#the_number').text( val !== '' ? val : '(empty)' );
	//});
});
//submit


$(document).ready(function(){
			
	$('#submit_off').click(function(){ // Create `click` event function for login
		// Get All data property
		var nama_mitra 				= $('#nama_mitra');
		var nama_proyek 			= $('#nama_proyek');
		var kontrak_no 				= $('#kontrak_no');
		var po_sp_no 				= $('#po_sp_no');
		var amandemen_no 			= $('#amandemen_no');
		var keterangan_value 		= $('#keterangan_value');
		var kontrak_tgl				= $('#kontrak_tgl');
		var po_sp_tgl				= $('#po_sp_tgl');
		var amandemen_tgl			= $('#amandemen_tgl');
		var kontrak_currency		= $('#kontrak_currency');
		var po_sp_currency			= $('#po_sp_currency');
		var amandemen_currency		= $('#amandemen_currency');
		var kontrak_amount			= $('#kontrak_amount');
		var po_sp_amount			= $('#po_sp_amount');
		var amandemen_amount		= $('#amandemen_amount');
		
		var tagihan_1;				//= $('#tagihan_1');
		if (document.getElementById('tagihan_1').checked){ tagihan_1 = 'X'; } else { tagihan_1 = ''; }
		var invoice_1;				//= $('#invoice_1');
		if (document.getElementById('invoice_1').checked){ invoice_1 = 'X'; } else { invoice_1 = ''; }
		var po_non_ppn_1;			//= $('#po_non_ppn_1');
		if (document.getElementById('po_non_ppn_1').checked){ po_non_ppn_1 = 'X'; } else { po_non_ppn_1 = ''; }
		var bts_akhir_kerja_1;		//= $('#bts_akhir_kerja_1');
		if (document.getElementById('bts_akhir_kerja_1').checked){ bts_akhir_kerja_1 = 'X'; } else { bts_akhir_kerja_1 = ''; }
		var bast_non_ppn_1;			//= $('#bast_non_ppn_1');
		if (document.getElementById('bast_non_ppn_1').checked){ bast_non_ppn_1 = 'X'; } else { bast_non_ppn_1 = ''; }
		var ptgn_uang_muka_1;		//= $('#ptgn_uang_muka_1');
		if (document.getElementById('ptgn_uang_muka_1').checked){ ptgn_uang_muka_1 = 'X'; } else { ptgn_uang_muka_1 = ''; }
		var kuitansi_1;				//= $('#kuitansi_1');
		if (document.getElementById('kuitansi_1').checked){ kuitansi_1 = 'X'; } else { kuitansi_1 = ''; }
		var rekening_1;				//= $('#rekening_1');
		if (document.getElementById('rekening_1').checked){ rekening_1 = 'X'; } else { rekening_1 = ''; }
		var pajak_1;					//= $('#pajak_1');
		if (document.getElementById('pajak_1').checked){ pajak_1 = 'X'; } else { pajak_1 = ''; }
		var jamn_uang_muka_1;		//= $('#jamn_uang_muka_1');
		if (document.getElementById('jamn_uang_muka_1').checked){ jamn_uang_muka_1 = 'X'; } else { jamn_uang_muka_1 = ''; }
		var jamn_plksa_1;			//= $('#jamn_plksa_1');
		if (document.getElementById('jamn_plksa_1').checked){ jamn_plksa_1 = 'X'; } else { jamn_plksa_1 = ''; }
		var jamn_pmhr_1;				//= $('#jamn_pmhr_1');
		if (document.getElementById('jamn_pmhr_1').checked){ jamn_pmhr_1 = 'X'; } else { jamn_pmhr_1 = ''; }
		var pls_asu_1;				//= $('#pls_asu_1');
		if (document.getElementById('pls_asu_1').checked){ pls_asu_1 = 'X'; } else { pls_asu_1 = ''; }
		var tt_bld_draw_1;			//= $('#tt_bld_draw_1');
		if (document.getElementById('tt_bld_draw_1').checked){ tt_bld_draw_1 = 'X'; } else { tt_bld_draw_1 = ''; }
		var siujk_1;					//= $('#siujk_1');
		if (document.getElementById('siujk_1').checked){ siujk_1 = 'X'; } else { siujk_1 = ''; }
		var npwp_1;					//= $('#npwp_1');
		if (document.getElementById('npwp_1').checked){ npwp_1 = 'X'; } else { npwp_1 = ''; }
		var dgt_1;					//= $('#dgt_1');
		if (document.getElementById('dgt_1').checked){ dgt_1 = 'X'; } else { dgt_1 = ''; }
		var side_ltr_1;				//= $('#side_ltr_1');
		if (document.getElementById('side_ltr_1').checked){ side_ltr_1 = 'X'; } else { side_ltr_1 = ''; }
		var rekon_wkt_1;				//= $('#rekon_wkt_1');
		if (document.getElementById('rekon_wkt_1').checked){ rekon_wkt_1 = 'X'; } else { rekon_wkt_1 = ''; }
		var po_migo_1;				//= $('#po_migo_1');
		if (document.getElementById('po_migo_1').checked){ po_migo_1 = 'X'; } else { po_migo_1 = ''; }
		
		var tagihan_no				= $('#tagihan_no');		
		var invoice_no				= $('#invoice_no');		
		var tagihan_tgl				= $('#tagihan_tgl');
		var invoice_tgl				= $('#invoice_tgl');
		var tagihan_tgl_masuk		= $('#tagihan_tgl_masuk');
		var invoice_tgl_masuk		= $('#invoice_tgl_masuk');
		var po_non_ppn_currency		= $('#po_non_ppn_currency');
		var po_non_ppn_amount		= $('#po_non_ppn_amount');
		var po_non_ppn_amd_currency	= $('#po_non_ppn_amd_currency');
		var po_non_ppn_amd_amount	= $('#po_non_ppn_amd_amount');
		var po_non_ppn_thp_rekon	= $('#po_non_ppn_thp_rekon');
		var bts_akhir_kerja_no		= $('#bts_akhir_kerja_no');
		var bast_non_ppn_tgl_baut	= $('#bast_non_ppn_tgl_baut');
		var bast_non_ppn_tgl_bast	= $('#bast_non_ppn_tgl_bast');
		var bast_non_ppn_barang		= $('#bast_non_ppn_barang');
		var bast_non_ppn_jasa		= $('#bast_non_ppn_jasa');
		var bast_non_ppn_currency	= $('#bast_non_ppn_currency');
		var bast_non_ppn_amount		= $('#bast_non_ppn_amount');
		var ptgn_uang_muka_currency	= $('#ptgn_uang_muka_currency');
		var ptgn_uang_muka_amount	= $('#ptgn_uang_muka_amount');
		var kuitansi_currency		= $('#kuitansi_currency');
		var kuitansi_amount			= $('#kuitansi_amount');
		var rekening_ats_nm			= $('#rekening_ats_nm');
		var pajak_currency			= $('#pajak_currency');
		var pajak_amount			= $('#pajak_amount');
		var jamn_uang_muka_currency	= $('#jamn_uang_muka_currency');
		var jamn_uang_muka_amount	= $('#jamn_uang_muka_amount');
		var jamn_plksa_currency		= $('#jamn_plksa_currency');
		var jamn_plksa_amount		= $('#jamn_plksa_amount');

		var jamn_pmhr_currency		= $('#jamn_pmhr_currency');
		var jamn_pmhr_amount		= $('#jamn_pmhr_amount');
		var kuitansi_atau			= $('#kuitansi_atau');
		var rekening_currency		= $('#rekening_currency');
		var rekening_amount			= $('#rekening_amount');
		var kuitansi_no				= $('#kuitansi_no');		
		var rekening_bank			= $('#rekening_bank');
		var rekening_switch			= $('#rekening_switch');
		var pajak_no				= $('#pajak_no');		
		var jamn_uang_muka_assr		= $('#jamn_uang_muka_assr');		
		var jamn_plksa_assr			= $('#jamn_plksa_assr');				
		var jamn_pmhr_assr			= $('#jamn_pmhr_assr');		
		var pajak_tgl				= $('#pajak_tgl');
		var jamn_uang_muka_expired	= $('#jamn_uang_muka_expired');
		var jamn_plksa_expired		= $('#jamn_plksa_expired');
		var jamn_pmhr_expired		= $('#jamn_pmhr_expired');
		var pls_asu_expired			= $('#pls_asu_expired');
		var tt_bld_draw_tgl			= $('#tt_bld_draw_tgl');
		var siujk_tgl				= $('#siujk_tgl');
		var npwp_tgl				= $('#npwp_tgl');
		var dgt_tgl					= $('#dgt_tgl');
		var side_ltr_tgl			= $('#side_ltr_tgl');
		var pls_asu_no				= $('#pls_asu_no');				
		var pls_asu_assr			= $('#pls_asu_assr');				
		var tt_bld_draw_no			= $('#tt_bld_draw_no');				
		var siujk_no				= $('#siujk_no');				
		var npwp_no					= $('#npwp_no');				
		var dgt_no					= $('#dgt_no');				
		var side_ltr_no				= $('#side_ltr_no');				
		var po_migo_value			= $('#po_migo_value');
		
		var true_amount				= $('#true_amount');
		var true_currency			= $('#true_currency');
		var start_time				= $('#start_time');
		var area					= $('#area');
		var no_sap					= $('#no_sap');
		
// cek ga boleh kosong untuk entry nya
/*		var kosong = '0';

		if(kontrak_amount.val() == ''){ 
			kontrak_amount.focus(); // focus to the filed 
			//$('#kontrak_amount').val("Enter No Kontrak");
			var div = $("#kontrak_amount").parents("div.input-group");
			div.addClass("has-error");
			kosong = '1';
		} else {
			var div = $("#kontrak_amount").parents("div.input-group");
			div.removeClass("has-error");	
		}
		
		if(amandemen_tgl.val() == ''){ 
			//amandemen_tgl.focus(); // focus to the filed 
			//$('#amandemen_tgl').val("Enter No Kontrak");
			var div = $("#amandemen_tgl").parents("div.input-group");
			div.addClass("has-error");
			kosong = '1';
		} else {
			var div = $("#amandemen_tgl").parents("div.input-group");
			div.removeClass("has-error");	
		}
		
		if(po_sp_tgl.val() == ''){ 
			//po_sp_tgl.focus(); // focus to the filed 
			//$('#po_sp_tgl').val("Enter No Kontrak");
			var div = $("#po_sp_tgl").parents("div.input-group");
			div.addClass("has-error");
			kosong = '1';
		} else {
			var div = $("#po_sp_tgl").parents("div.input-group");
			div.removeClass("has-error");	
		}
		
		if(kontrak_tgl.val() == ''){ 
			//kontrak_tgl.focus(); // focus to the filed 
			//$('#kontrak_tgl').val("Enter No Kontrak");
			var div = $("#kontrak_tgl").parents("div.input-group");
			div.addClass("has-error");
			kosong = '1';
		} else {
			var div = $("#kontrak_tgl").parents("div.input-group");
			div.removeClass("has-error");	
		}
		
		if(keterangan_value.val() == ''){ 
			keterangan_value.focus(); // focus to the filed 
			//$('#keterangan_value').val("Enter No Kontrak");
			var div = $("#keterangan_value").parents("div.input-group");
			div.addClass("has-error");
			kosong = '1';
		} else {
			var div = $("#keterangan_value").parents("div.input-group");
			div.removeClass("has-error");	
		}
		
		if(amandemen_no.val() == ''){ 
			amandemen_no.focus(); // focus to the filed 
			//$('#amandemen_no').val("Enter No Kontrak");
			var div = $("#amandemen_no").parents("div.input-group");
			div.addClass("has-error");
			kosong = '1';
		} else {
			var div = $("#amandemen_no").parents("div.input-group");
			div.removeClass("has-error");	
		}
		
		if(po_sp_no.val() == ''){ 
			po_sp_no.focus(); // focus to the filed 
			//$('#po_sp_no').val("Enter No Kontrak");
			var div = $("#po_sp_no").parents("div.input-group");
			div.addClass("has-error");
			kosong = '1';
		} else {
			var div = $("#po_sp_no").parents("div.input-group");
			div.removeClass("has-error");	
		}
		
		if(kontrak_no.val() == ''){ 
			kontrak_no.focus(); // focus to the filed 
			//$('#kontrak_no').val("Enter No Kontrak");
			var div = $("#kontrak_no").parents("div.input-group");
			div.addClass("has-error");
			kosong = '1';
		} else {
			var div = $("#kontrak_no").parents("div.input-group");
			div.removeClass("has-error");	
		}
		
		if(nama_proyek.val() == ''){
			nama_proyek.focus(); // focus to the filed 
			//$('#nama_proyek').val("Enter Nama Proyek");
			var div = $("#nama_proyek").parents("div.input-group");
			div.addClass("has-error");
			kosong = '1';
		} else {
			var div = $("#nama_proyek").parents("div.input-group");
			div.removeClass("has-error");	
		}
		
		if(nama_mitra.val() == ''){ 
			nama_mitra.focus(); // focus to the filed 
			//$('#nama_mitra').val("Enter Nama Mitra");
			var div = $("#nama_mitra").parents("div.input-group");
			div.addClass("has-error");
			kosong = '1';
		} else {
			var div = $("#nama_mitra").parents("div.input-group");
			div.removeClass("has-error");	
		}		

		if(kosong == '1'){
			return false;	
		}
		*/
// end of entry cek
				alert('masuk ahhh');
		//if(username.val() != '' && password.val() != ''){ // Check the username and password values is not empty and make the ajax request
			var UrlToSubmit = 'action=submit_off&nama_mitra='+nama_mitra.val()+'&nama_proyek='+nama_proyek.val()+'&kontrak_no='+kontrak_no.val()+'&po_sp_no='+po_sp_no.val()+'&amandemen_no='+amandemen_no.val()+'&keterangan_value='+keterangan_value.val()+'&kontrak_tgl='+kontrak_tgl.val()+'&po_sp_tgl='+po_sp_tgl.val()+'&amandemen_tgl='+amandemen_tgl.val()+'&kontrak_currency='+kontrak_currency.val()+'&po_sp_currency='+po_sp_currency.val()+'&amandemen_currency='+amandemen_currency.val()+'&kontrak_amount='+kontrak_amount.val()+'&po_sp_amount='+po_sp_amount.val()+'&amandemen_amount='+amandemen_amount.val()+'&tagihan_1='+tagihan_1+'&invoice_1='+invoice_1+'&po_non_ppn_1='+po_non_ppn_1+'&bts_akhir_kerja_1='+bts_akhir_kerja_1+'&bast_non_ppn_1='+bast_non_ppn_1+'&ptgn_uang_muka_1='+ptgn_uang_muka_1+'&kuitansi_1='+kuitansi_1+'&rekening_1='+rekening_1+'&pajak_1='+pajak_1+'&jamn_uang_muka_1='+jamn_uang_muka_1+'&jamn_plksa_1='+jamn_plksa_1+'&jamn_pmhr_1='+jamn_pmhr_1+'&pls_asu_1='+pls_asu_1+'&tt_bld_draw_1='+tt_bld_draw_1+'&siujk_1='+siujk_1+'&npwp_1='+npwp_1+'&dgt_1='+dgt_1+'&side_ltr_1='+side_ltr_1+'&rekon_wkt_1='+rekon_wkt_1+'&po_migo_1='+po_migo_1+'&tagihan_no='+tagihan_no.val()+'&invoice_no='+invoice_no.val()+'&tagihan_tgl='+tagihan_tgl.val()+'&invoice_tgl='+invoice_tgl.val()+'&tagihan_tgl_masuk='+tagihan_tgl_masuk.val()+'&invoice_tgl_masuk='+invoice_tgl_masuk.val()+'&po_non_ppn_currency='+po_non_ppn_currency.val()+'&po_non_ppn_amount='+po_non_ppn_amount.val()+'&po_non_ppn_amd_currency='+po_non_ppn_amd_currency.val()+'&po_non_ppn_amd_amount='+po_non_ppn_amd_amount.val()+'&po_non_ppn_thp_rekon='+po_non_ppn_thp_rekon.val()+'&bts_akhir_kerja_no='+bts_akhir_kerja_no.val()+'&bast_non_ppn_tgl_baut='+bast_non_ppn_tgl_baut.val()+'&bast_non_ppn_tgl_bast='+bast_non_ppn_tgl_bast.val()+'&bast_non_ppn_barang='+bast_non_ppn_barang.val()+'&bast_non_ppn_jasa='+bast_non_ppn_jasa.val()+'&bast_non_ppn_currency='+bast_non_ppn_currency.val()+'&bast_non_ppn_amount='+bast_non_ppn_amount.val()+'&ptgn_uang_muka_currency='+ptgn_uang_muka_currency.val()+'&ptgn_uang_muka_amount='+ptgn_uang_muka_amount.val()+'&kuitansi_currency='+kuitansi_currency.val()+'&kuitansi_amount='+kuitansi_amount.val()+'&rekening_ats_nm='+rekening_ats_nm.val()+'&pajak_currency='+pajak_currency.val()+'&pajak_amount='+pajak_amount.val()+'&jamn_uang_muka_currency='+jamn_uang_muka_currency.val()+'&jamn_uang_muka_amount='+jamn_uang_muka_amount.val()+'&jamn_plksa_currency='+jamn_plksa_currency.val()+'&jamn_plksa_amount='+jamn_plksa_amount.val()+'&jamn_pmhr_currency='+jamn_pmhr_currency.val()+'&jamn_pmhr_amount='+jamn_pmhr_amount.val()+'&kuitansi_atau='+kuitansi_atau.val()+'&rekening_currency='+rekening_currency.val()+'&rekening_amount='+rekening_amount.val()+'&kuitansi_no='+kuitansi_no.val()+'&rekening_bank='+rekening_bank.val()+'&rekening_switch='+rekening_switch.val()+'&pajak_no='+pajak_no.val()+'&jamn_uang_muka_assr='+jamn_uang_muka_assr.val()+'&jamn_plksa_assr='+jamn_plksa_assr.val()+'&jamn_pmhr_assr='+jamn_pmhr_assr.val()+'&pajak_tgl='+pajak_tgl.val()+'&jamn_uang_muka_expired='+jamn_uang_muka_expired.val()+'&jamn_plksa_expired='+jamn_plksa_expired.val()+'&jamn_pmhr_expired='+jamn_pmhr_expired.val()+'&pls_asu_expired='+pls_asu_expired.val()+'&tt_bld_draw_tgl='+tt_bld_draw_tgl.val()+'&siujk_tgl='+siujk_tgl.val()+'&npwp_tgl='+npwp_tgl.val()+'&dgt_tgl='+dgt_tgl.val()+'&side_ltr_tgl='+side_ltr_tgl.val()+'&pls_asu_no='+pls_asu_no.val()+'&pls_asu_assr='+pls_asu_assr.val()+'&tt_bld_draw_no='+tt_bld_draw_no.val()+'&siujk_no='+siujk_no.val()+'&npwp_no='+npwp_no.val()+'&dgt_no='+dgt_no.val()+'&side_ltr_no='+side_ltr_no.val()+'&po_migo_value='+po_migo_value.val()+'&true_amount='+true_amount.val()+'&true_currency='+true_currency.val()+'&start_time='+start_time.val()+'&area='+area.val()+'&no_sap='+no_sap.val();
			$.ajax({ // Send the credential values to another checker.php using Ajax in POST menthod 
			type : 'POST',
			data : UrlToSubmit,
			url  : 'admin/submit_off.php',
			success: function(responseText){ // Get the result and asign to each cases
				if(responseText == 0){
					alert('Data Saved');
					 window.location = 'dashboard.php?select=1'; 
				}
				else if(responseText == 1){
					//window.location = 'dashboard.php';
					alert('Please Maintain Running Number in table TRX_NUMBER');
				}
				else if(responseText == 2){
					//window.location = 'dashboard.php';
					alert("Data Couldn't Saved");
				}
				else if(responseText == 3){
					alert('Maintain level authorization in table TRX_LIMITATION');
				}
				else{
//					alert('Error Entry Data');
					alert(responseText);
					//write(responseText); 
				}
			}
			});
		
		return false;
	});
	
//LOGOUT FUCK	
	$('#logout').click(function(){ // Create `click` event function for login
		//if(username.val() != '' && password.val() != ''){ // Check the username and password values is not empty and make the ajax request
			var UrlToPass = 'action=logout';
			$.ajax({ // Send the credential values to another checker.php using Ajax in POST menthod
			type : 'POST',
			data : UrlToPass,
			url  : 'admin/logout.php',
			success: function(responseText){ // Get the result and asign to each cases
				if(responseText == 0){
					login_result.html('<span class="error">Error Contact Administrator!</span>');
				}
				else if(responseText == 1){
					window.location = 'index.php';
				}
				else{
					alert('');
				}
			}
			});
		
		return false;
	});
		
});
