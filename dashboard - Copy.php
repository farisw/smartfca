
<!--Faris Wijaya & Guntarto Budi Rohmadi (Sept 17, 2014)-->
<!--Faris Wijaya & Guntarto Budi Rohmadi (Sept 17, 2014)-->
<?php 
session_start(); 
if ( !(isset($_SESSION['USERNAME'])) or empty($_SESSION['USERNAME']) ){
	echo "<script> window.location = 'index.php'; </script>";
} else {
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMART FCA</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
<!--Start-->
<!--Start-->
<!--Start-->
<!--Start-->
<!--Start-->

    <!--  sgtartnavbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="zcontainer">
        <div class="navbar-header">          
          <span class="navbar-brand" ><span class="glyphicon glyphicon-book">&nbsp</span>SMART FCA</span>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li ><a href="#"><span class="glyphicon glyphicon-save">&nbsp</span>Save</a></li>  
            <li ><a href="#"><span class="glyphicon glyphicon-edit">&nbsp</span>Edit</a></li>   
            <li ><a href="#"><span class="glyphicon glyphicon-remove">&nbsp</span>Delete</a></li>  
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li id="ztoggle"><a href="#menu-toggle" id="menu-toggle"><span class="glyphicon glyphicon-th-list">&nbsp</span>Show/Hide Menu</a></li>  
            <li><a href=""><span class="glyphicon glyphicon-user">&nbsp</span>Welcome 
			<?php echo $_SESSION['NAMA_DEPAN']; echo $_SESSION['NAMA_BELAKANG']; ?>
            </a></li>
            <li><a  href="#" id='logout' ><span class="glyphicon glyphicon-log-out">&nbsp</span> 
            <?php IF ($_SESSION['USERNAME']) { echo 'Logout'; } ?>
            </a></li>
          </ul>
        </div>
      </div>
    </div>

    <!--  endnavbar -->
	<div id="wrapper">
	
	<!-- Sidebar -->
	<div id="sidebar-wrapper">
	    <ul class="sidebar-nav">
	       <!-- <li class="sidebar-brand">
	            <a href="#">
	                Start Bootstrap
	            </a>
	        </li>-->
	        <li>
	            <a href="#"><span class="glyphicon glyphicon-tasks">&nbsp</span>Dashboard</a>
	        </li>
	        <li  class="active">
	            <a href="#"><span class="glyphicon glyphicon-open">&nbsp</span>Upload Checklist</a>
	        </li>
	        <li>
	            <a href="#"><span class="glyphicon glyphicon-eye-open">&nbsp</span>Overview Checklist <span class="badge">14</span> </a>
	        </li>
	   </ul>
	</div>
	<!-- /#sidebar-wrapper -->
	
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
            

<!-- Upload Checklist Content -->			
<!-- Upload Checklist Content -->			
			            
            
            <form action="">

			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title"><span class="glyphicon glyphicon-th">&nbsp</span>Check list-Kelengkapan Dokumen Pembayaran Kontrak</h3>
			  </div>
			  <div class="panel-body">
			    
					    <!--  Panel content -->
					    <div class="row">		
						<!--  nama mitra -->		  
						  <div class="col-lg-12">
						    <div class="input-group">
						      <span class="input-group-addon">Nama Mitra</span>
							  <input type="text" class="form-control" placeholder="Nama Mitra">
						    </div><!-- /input-group -->
						  </div><!-- /.col-lg-6 -->		  	  		  	  
						</div><!-- /.row -->
						
						<div class="row">		
						<!--  nama Projek -->		  
						  <div class="col-lg-12">
						    <div class="input-group">
						      <span class="input-group-addon">Nama Projek</span>
							  <input type="text" class="form-control" placeholder="Nama Projek">
						    </div><!-- /input-group -->
						  </div><!-- /.col-lg-6 -->		  	  		  	  
						</div><!-- /.row -->
						
						
						<div class="row">		
						<!--  No Kontrak + PPN -->		  
						  <div class="col-lg-4">
						    <div class="input-group">
						      <span class="input-group-addon">No. Kontrak</span>
							  <input type="text" class="form-control" placeholder="No. Kontrak">
						    </div><!-- /input-group -->
						  </div><!-- /.col-lg-4 -->	
						<!--  No Kontrak + PPN Tgl-->		  
						  <div class="col-lg-2">
						    <div class="input-group">
						      <span class="input-group-addon">Tgl</span>
							  <input type="text" class="form-control" placeholder="Tgl">
						    </div><!-- /input-group -->
						  </div><!-- /.col-lg-4 -->	
						<!--  No Kontrak + PPN IDR-->		  
						  <div class="col-lg-3">
						    <div class="input-group">
						      <span class="input-group-addon">IDR</span>
							  <input type="text" class="form-control" placeholder="PPN in IDR">
						    </div><!-- /input-group -->
						  </div><!-- /.col-lg-4 -->		 
						<!--  No Kontrak + PPN USD-->		  
						  <div class="col-lg-3">
						    <div class="input-group">
						      <span class="input-group-addon">USD</span>
							  <input type="text" class="form-control" placeholder="PPN in USD">
						    </div><!-- /input-group -->
						  </div><!-- /.col-lg-4 -->		  	   	  		  	  
						</div><!-- /.row -->
						
						
						<div class="row">		
						<!--  No PO/SP-->		  
						  <div class="col-lg-4">
						    <div class="input-group">
						      <span class="input-group-addon">No. PO/SP</span>
							  <input type="text" class="form-control" placeholder="No. PO/SP">
						    </div><!-- /input-group -->
						  </div><!-- /.col-lg-4 -->	
						<!--  No Kontrak + PPN Tgl-->		  
						  <div class="col-lg-2">
						    <div class="input-group">
						      <span class="input-group-addon">Tgl</span>
							  <input type="text" class="form-control" placeholder="Tgl">
						    </div><!-- /input-group -->
						  </div><!-- /.col-lg-4 -->	
						<!--  No Kontrak + PPN IDR-->		  
						  <div class="col-lg-3">
						    <div class="input-group">
						      <span class="input-group-addon">IDR</span>
							  <input type="text" class="form-control" placeholder="PPN in IDR">
						    </div><!-- /input-group -->
						  </div><!-- /.col-lg-4 -->		 
						<!--  No Kontrak + PPN USD-->		  
						  <div class="col-lg-3">
						    <div class="input-group">
						      <span class="input-group-addon">USD</span>
							  <input type="text" class="form-control" placeholder="PPN in USD">
						    </div><!-- /input-group -->
						  </div><!-- /.col-lg-4 -->		  	   	  		  	  
						</div><!-- /.row -->
						
						
						
						<div class="row">		
						<!--  No Amandemen-->		  
						  <div class="col-lg-4">
						    <div class="input-group">
						      <span class="input-group-addon">No. Amandemen</span>
							  <input type="text" class="form-control" placeholder="No. Amandemen">
						    </div><!-- /input-group -->
						  </div><!-- /.col-lg-4 -->	
						<!--  No Kontrak + PPN Tgl-->		  
						  <div class="col-lg-2">
						    <div class="input-group">
						      <span class="input-group-addon">Tgl</span>
							  <input type="text" class="form-control" placeholder="Tgl">
						    </div><!-- /input-group -->
						  </div><!-- /.col-lg-4 -->	
						<!--  No Kontrak + PPN IDR-->		  
						  <div class="col-lg-3">
						    <div class="input-group">
						      <span class="input-group-addon">IDR</span>
							  <input type="text" class="form-control" placeholder="PPN in IDR">
						    </div><!-- /input-group -->
						  </div><!-- /.col-lg-4 -->		 
						<!--  No Kontrak + PPN USD-->		  
						  <div class="col-lg-3">
						    <div class="input-group">
						      <span class="input-group-addon">USD</span>
							  <input type="text" class="form-control" placeholder="PPN in USD">
						    </div><!-- /input-group -->
						  </div><!-- /.col-lg-4 -->		  	   	  		  	  
						</div><!-- /.row -->
				
				
						
						<div class="row">		
						<!--  Keterangan -->		  
						  <div class="col-lg-12">
						    <div class="input-group">
						      <span class="input-group-addon">Keterangan</span>
							  <input type="text" class="form-control" placeholder="Keterangan">
						    </div><!-- /input-group -->
						  </div><!-- /.col-lg-6 -->		  	  		  	  
						</div><!-- /.row -->
			    <!--  Panel content -->	
			  </div>
			</div><!--anel panel-default-->
			
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title"><span class="glyphicon glyphicon-th">&nbsp</span>Detail Document</h3>
			  </div>
			  <div class="panel-body">
			    <!--  Panel content -->	
			    <p>1.) No. Surat Tagihan</p>
                        
                        <div class="row">		
                        
						<div class="col-lg-2">
					    <div class="input-group">
					      <span class="input-group-addon">
					        <input type="radio" name="tagihan">
					      </span>
					      <input type="text" class="form-control" placeholder="Ada" disabled="">
					    </div><!-- /input-group -->
					  </div><!-- /.col-lg-6 -->	 						 	  
						<div class="col-lg-2">
					    <div class="input-group">
					      <span class="input-group-addon">
					        <input type="radio" name="tagihan">
					      </span>
					      <input type="text" class="form-control" placeholder="Tidak Ada" disabled="">
					    </div><!-- /input-group -->
					  </div><!-- /.col-lg-6 -->	 
					  						 	  
						<!--  Surat Tagihan -->		  
						  <div class="col-lg-4">
						    <div class="input-group">
						      <span class="input-group-addon">No. Surat Tagihan</span>
							  <input type="text" class="form-control" placeholder="No Surat Tagihan">
						    </div><!-- /input-group -->
						  </div><!-- /.col-lg-6 -->		  	  
						
						<!--  Tgl-->		  
						  <div class="col-lg-2">
						    <div class="input-group">
						      <span class="input-group-addon">Tgl</span>
							  <input type="text" class="form-control" placeholder="Tgl">
						    </div><!-- /input-group -->
						  </div><!-- /.col-lg-4 -->			  	  
						<!--  Tgl-->		  
						  <div class="col-lg-2">
						    <div class="input-group">
						      <span class="input-group-addon">Tgl</span>
							  <input type="text" class="form-control" placeholder="Tgl Masuk">
						    </div><!-- /input-group -->
						  </div><!-- /.col-lg-4 -->			  	  
						</div><!-- /.row -->
						
						
						<p>2.) Invoice</p>
                        
                        <div class="row">		
                        
						<div class="col-lg-2">
					    <div class="input-group">
					      <span class="input-group-addon">
					        <input type="radio" name="invoice">
					      </span>
					      <input type="text" class="form-control" placeholder="Ada" disabled="" >
					    </div><!-- /input-group -->
					  </div><!-- /.col-lg-6 -->	 						 	  
						<div class="col-lg-2">
					    <div class="input-group">
					      <span class="input-group-addon">
					        <input type="radio" name="invoice">
					      </span>
					      <input type="text" class="form-control" placeholder="Tidak Ada" disabled="" >
					    </div><!-- /input-group -->
					  </div><!-- /.col-lg-6 -->	 
					  						 	  
						<!--  Invoice -->		  
						  <div class="col-lg-4">
						    <div class="input-group">
						      <span class="input-group-addon">No. Invoice</span>
							  <input type="text" class="form-control" placeholder="No Invoice">
						    </div><!-- /input-group -->
						  </div><!-- /.col-lg-6 -->		  	  
						
						<!--  Tgl-->		  
						  <div class="col-lg-2">
						    <div class="input-group">
						      <span class="input-group-addon">Tgl</span>
							  <input type="text" class="form-control" placeholder="Tgl">
						    </div><!-- /input-group -->
						  </div><!-- /.col-lg-4 -->			  	  
						<!--  Tgl-->		  
						  <div class="col-lg-2">
						    <div class="input-group">
						      <span class="input-group-addon">Tgl</span>
							  <input type="text" class="form-control" placeholder="Tgl Masuk" class="datepicker" data-date-format="mm/dd/yyyy" >
						    </div><!-- /input-group -->
						  </div><!-- /.col-lg-4 -->		
						  	  	  
						</div><!-- /.row -->						
											
			    <!--  Panel content -->	
			  </div>
			</div><!--anel panel-default-->
			
			</form><!-- /.form -->

<!-- Upload Checklist Content -->			
<!-- Upload Checklist Content -->			
			
			
			
			
<!-- List Overview Content -->
<!-- List Overview Content -->
			<div class="list-group">
			  <a href="#" class="list-group-item ">
			    <h4 class="list-group-item-heading">Projek : Projek ABC Telkom <small><i>Mitra Projek : Metrasys</i></small> <span class="badge">14 sept 2014</span></h4>
			    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
			  </a>
			  <a href="#" class="list-group-item ">
			    <h4 class="list-group-item-heading">Projek : Projek ABC Telkom <small><i>Mitra Projek : Metrasys</i></small> <span class="badge">14 sept 2014</span></h4>
			    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
			  </a>

			  <a href="#" class="list-group-item ">
			    <h4 class="list-group-item-heading">Projek : Projek ABC Telkom <small><i>Mitra Projek : Metrasys</i></small> <span class="badge">14 sept 2014</span></h4>
			    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
			  </a>

			  <a href="#" class="list-group-item ">
			    <h4 class="list-group-item-heading">Projek : Projek ABC Telkom <small><i>Mitra Projek : Metrasys</i></small> <span class="badge">14 sept 2014</span></h4>
			    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
			  </a>

			  <a href="#" class="list-group-item ">
			    <h4 class="list-group-item-heading">Projek : Projek ABC Telkom <small><i>Mitra Projek : Metrasys</i></small> <span class="badge">14 sept 2014</span></h4>
			    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
			  </a>
			  <a href="#" class="list-group-item ">
			    <h4 class="list-group-item-heading">Projek : Projek ABC Telkom <small><i>Mitra Projek : Metrasys</i></small> <span class="badge">14 sept 2014</span></h4>
			    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
			  </a>

			  <a href="#" class="list-group-item ">
			    <h4 class="list-group-item-heading">Projek : Projek ABC Telkom <small><i>Mitra Projek : Metrasys</i></small> <span class="badge">14 sept 2014</span></h4>
			    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
			  </a>

			</div>			
			<center>
			<ul class="pagination">
			  <li><a href="#">&laquo;</a></li>
			  <li><a href="#">1</a></li>
			  <li><a href="#">2</a></li>
			  <li><a href="#">3</a></li>
			  <li><a href="#">4</a></li>
			  <li><a href="#">5</a></li>
			  <li><a href="#">&raquo;</a></li>
			</ul>
			</center>
<!-- List Overview Content -->
<!-- List Overview Content -->
			

               
			</div><!-- container-fluid  -->       
		</div><!-- /#page-content-wrapper -->
	</div>
	
	
	
<!--End-->
<!--End-->
<!--End-->
<!--End-->
<!--End-->



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
     <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        $('.datepicker').datepicker({
		    format: 'mm/dd/yyyy',
		    startDate: '-3d'
		})
     });
    </script>
<script type="text/javascript">
$(document).ready(function(){
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
</script>
  </body>
</html>
<?php
}
?>