<h1 class="page-header">
    Input User <small> </small>
</h1>
     
      <form>
		<input type="hidden" id="start_time" value="<?php echo date("Y-m-d H:i:s");?>">
		<input type="hidden" id="area" value="<?php echo $_SESSION['AREA'];?>">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><span class="glyphicon glyphicon-th">&nbsp</span>Input User</h3>
          </div>
          <div class="panel-body"> 
            
            <!--  Panel content -->
            <div class="row"> 
              <!--  nama_mitra -->
              <div class="col-lg-5">
                <div class="input-group"> <span class="input-group-addon">Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                  <input type="text" class="form-control" placeholder="Username" id="username">
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 --> 
            </div>
            <!-- /.row -->
            
            <div class="row"> 
              <!--  nama_projek -->
              <div class="col-lg-5">
                <div class="input-group"> <span class="input-group-addon">Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                  <input type="text" class="form-control" placeholder="Password" id="password1">
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 --> 
            </div>
            <!-- /.row -->
            
            <div class="row"> 
              <!--  No_Kontrak + PPN-->
              <div class="col-lg-5">
                <div class="input-group"> <span class="input-group-addon">Re  Password&nbsp;&nbsp;&nbsp;&nbsp;</span>
                  <input type="text" class="form-control" placeholder="Re  Password" id="password2">
                </div>
                <!-- /input-group --> 
              </div>
            <!-- /.col-lg-4 --> 
            </div>
            <!-- /.row -->
            
            <div class="row">
              <!--  No_PO/SP-->
              <div class="col-lg-5">
                <div class="input-group"> <span class="input-group-addon">Nama Depan&nbsp;&nbsp;&nbsp;&nbsp;</span>
                  <input type="text" class="form-control" placeholder="Nama Depan" id="nama_depan">
                </div>
                <!-- /input-group --> 
              </div>
            </div>
            <div class="row"> 
              <!--  No_Amandemen-->
              <div class="col-lg-5">
                <div class="input-group"> <span class="input-group-addon">Nama Belakang</span>
                  <input type="text" class="form-control" placeholder="Nama Belakang" id="nama_belakang">
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-4 --> 
            </div>
            <!-- /.row -->

            <div class="row"> 
              <!--  No_Amandemen-->
              <div class="col-lg-1">
                <div class="input-group"> <span class="input-group-addon">Area / Unit</span>
                  <input type="text" class="form-control" placeholder="" id="" disabled="disabled">
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-4 --> 
              <!--  No Kontrak + PPN Tgl-->
              <div class="col-lg-1">
                <div class="input-group"> 
<?php
$area_text	= "SELECT DISTINCT `AREA` FROM `user_mapping`";
$query_area	= mysql_query($area_text);
$numrw_area	= mysql_num_rows($query_area);
if(!$query_area){
	echo "Please maintain table USER_MAPPING";
}
?>
                  <select class="form-control" id="area">
                    <option value="" >&nbsp;</option>
<?php
if($numrw_area <= 0){
	echo "Please maintain table USER_MAPPING";
} else {
	while($area_fetch=mysql_fetch_array($query_area)){
?>
                    <option><?php echo $area_fetch['AREA']; ?></option>
<?php
	}
}
?>
                  </select>
                </div>
              </div>

              <div class="col-lg-1">
                <div class="input-group"> <span class="input-group-addon">Level</span>
                  <input type="text" class="form-control" placeholder="" id="" disabled="disabled">
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-4 --> 
              <!--  No Kontrak + PPN Tgl-->
              <div class="col-lg-1">
                <div class="input-group"> 
                  <select class="form-control" id="level">
                    <!--<option value="#" disabled>Currency</option>-->
                    <option>IDR</option>
                    <option>USD</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="input-group"> <span class="input-group-addon">Posisi Text</span>
                  <input type="text" class="form-control" placeholder="" id="departemen">
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-4 --> 
            </div>
                        
            <!--  Panel content --> 
          </div>
        </div>
        <!--anel panel-default-->
        </div>
        <!--anel panel-default-->
        
      </form>
      
<script type="text/javascript">
// Select data
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
      
      <!-- /.form --> 