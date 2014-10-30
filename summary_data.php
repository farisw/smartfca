<h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
                        </h1>



<?php include("misc/knob.php"); ?>    

<?php include("misc/chart.php"); ?> 
   
<?php 
if(isset($_SESSION['USERNAME']) and $_SESSION['USERNAME'] != '' and
   isset($_SESSION['LEVEL']) and $_SESSION['LEVEL'] != '' ){
	if($_SESSION['LEVEL'] != "VRKT" && $_SESSION['LEVEL'] != "MGRR") {
?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><span class="glyphicon glyphicon-th">&nbsp;</span>List Approval Kelengkapan Dokumen Pembayaran Kontrak</h3>
  </div>
  <div class="panel-body"> 
<?php	
//		switch($lv_level) {
//			case "SGM" :
//				$getquery = 'SELECT * FROM trx_detail
//							 	WHERE LEVEL IN ("SGM")
//	                              AND CHANGED_BY = "DPT"
//	     						ORDER BY DOC_NUMBER DESC, YEAR DESC, MONTH DESC';
//			break;
//			case "DPT" :
//				$getquery = 'SELECT * FROM trx_detail
//							 	WHERE LEVEL IN ("SGM", "DPT")
//	                              AND CHANGED_BY = "OSM"
//	     						ORDER BY DOC_NUMBER DESC, YEAR DESC, MONTH DESC';
//			break;
//			case "OSM" :
//				$getquery = 'SELECT * FROM trx_detail
//							 	WHERE LEVEL IN ("SGM", "DPT", "OSM")
//	                              AND CHANGED_BY = "MGR"
//	     						ORDER BY DOC_NUMBER DESC, YEAR DESC, MONTH DESC';
//			break;
//			case "MGR" :
//				$getquery = 'SELECT * FROM trx_detail
//							 	WHERE LEVEL IN ("SGM", "DPT", "OSM", "MGR")
//	                              AND CHANGED_BY = "OFFCS"
//	     						ORDER BY DOC_NUMBER DESC, YEAR DESC, MONTH DESC';
//			break;
//			case "OFFCS" :
//				$getquery = 'SELECT * FROM trx_detail
//							 	WHERE LEVEL IN ("SGM", "DPT", "OSM", "MGR", "OFFCS")
//	                              AND CHANGED_BY = "VRKT"
//	     						ORDER BY DOC_NUMBER DESC, YEAR DESC, MONTH DESC';								  
//			break;
//		}

		$lv_level = $_SESSION['LEVEL'];
		$lv_area  = str_replace(',','", "',$_SESSION['AREA']);		
		$getquery = 'SELECT * FROM trx_detail
					  WHERE AREA 			IN ( "'.$lv_area.'" )
					  	AND APPROVAL_LEVEL 	= "'.$lv_level.'"
						AND REJECT_FLAG		= ""
				   ORDER BY DOC_NUMBER DESC, YEAR DESC, MONTH DESC';
		//echo $getquery;
		$get_data_level = mysql_query($getquery);
		if(!$get_data_level){	
			/*echo "Data Not Found"; // Data Not Found
			echo $lv_level;
			echo $getquery;*/
				 $get_data_level_rw	= mysql_num_rows($get_data_level); // Get the number of rows
?>
            <div class="alert alert-warning alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <strong>No Data Found!</strong> Level <?=$lv_level?> <?=$getquery?> <?=$getquery?> <?=$get_data_level_rw?>
            </div>
<?php				
		} else {
			
			$get_data_level_rw	= mysql_num_rows($get_data_level); // Get the number of rows
			if($get_data_level_rw <= 0){ 
?>
            <div class="alert alert-warning alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <strong>No Data Found!</strong> No pending checklist to be reviewed
            </div>
<?php		
				//echo "Data Not Found"; // Data Not Found
				
			} else {
			
		
?>

<table id="zchecklist" class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead>
  <tr>
    <th scope="col">No.</th>
    <!--<th scope="col">Document Number</th>
    <th scope="col">Year</th>
    <th scope="col">Month</th>-->
    <th scope="col">Doc No SAP</th>
    <th scope="col">Nama Mitra</th>
    <th scope="col">Nilai stlh Pajak</th>
    <th scope="col">Currency</th>
    <th scope="col">Last Changed By</th>
    <th scope="col">Last Changed At</th>
    <th scope="col" >Approve</th>
    <th scope="col" >Reject</th>
  </tr>
 </thead>

<tbody>
<?php 
			$count = 0;
			while($data_level_found=mysql_fetch_array($get_data_level)){
			$count = $count + 1;	
?>
  <tr>
    <td><?=$count?></td>
    <!--<td><a href="" data-toggle="modal" data-target="#modaltimeline" class="history_modal"><?php //echo $data_level_found['DOC_NUMBER']; ?></a></td>
    <td><?php //echo $data_level_found['YEAR']; ?></td>
    <td><?php //echo $data_level_found['MONTH']; ?></td>-->
    <td><?php echo $data_level_found['NO_SAP']; ?></td>
    <td><?php echo $data_level_found['NAMA_MITRA']; ?></td>
    <td><?php echo number_format($data_level_found['TRUE_VALUE']); ?></td>
    <td><?php echo $data_level_found['TRUE_VALUE_CURRENCY']; ?></td>
    <td><?php echo $data_level_found['CHANGED_BY']; ?></td>
    <td><?php echo $data_level_found['CHANGED_AT']; ?></td>
    <td>
<?php
	if($data_level_found['FIATUR'] == $data_level_found['APPROVAL_LEVEL']){
		$approval_text = "Approve";
	} else {
		$approval_text = "Valid";
	}
?>
    <a href="admin/do_approve.php?docnum=<?=$data_level_found['DOC_NUMBER']?>&year=<?=$data_level_found['YEAR']?>&month=<?=$data_level_found['MONTH']?>&approval=APPROVE" id="submit_off"><span class="glyphicon glyphicon-ok">&nbsp;</span><?=$approval_text?></a></td>
    <td><a href="admin/do_approve.php?docnum=<?=$data_level_found['DOC_NUMBER']?>&year=<?=$data_level_found['YEAR']?>&month=<?=$data_level_found['MONTH']?>&approval=REJECT" id="submit_off"><span class="glyphicon glyphicon-remove">&nbsp;</span>Reject</a></td>
  </tr>
<?php 
			}
?>
</tbody>
<tfoot>
  <tr>
    <th scope="col">No.</th>
    <!--<th scope="col">Document Number</th>
    <th scope="col">Year</th>
    <th scope="col">Month</th>-->
    <th scope="col">Doc No SAP</th>
    <th scope="col">Nama Mitra</th>
    <th scope="col">PO Awal NON PPN</th>
    <th scope="col">Currency</th>
    <th scope="col">Last Changed By</th>
    <th scope="col">Last Changed At</th>
    <th scope="col" >Approve</th>
    <th scope="col" >Reject</th>
  </tr>
 </tfoot>
</table>
		
<?php
			}
		}

?>

  </div>
</div>  

<?php 
	}
} else {
	echo "<script> window.location = 'index.php'; </script>";
}
?>


<?php
/*
History List DOkumen
*/
?>

<?php 
if(isset($_SESSION['USERNAME']) and $_SESSION['USERNAME'] != '' and
   isset($_SESSION['LEVEL']) and $_SESSION['LEVEL'] != ''){
?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><span class="glyphicon glyphicon-th">&nbsp;</span>My Checklist History </h3>
  </div>
  <div class="panel-body"> 
<?php	
		$lv_level = $_SESSION['LEVEL'];
		$lv_user  = $_SESSION['USERNAME'];
//		$getquery = '
//					SELECT 	trx_history.LOG_NUMBER,
//							trx_detail.DOC_NUMBER,
//							trx_detail.YEAR,
//							trx_detail.MONTH,
//							trx_history.USER,
//							trx_history.LEVEL,
//							trx_detail.TRUE_VALUE,
//							trx_detail.TRUE_VALUE_CURRENCY,
//							trx_history.STATUS,
//							trx_history.START_AT,
//							trx_history.FINISH_AT
//					FROM	trx_history JOIN trx_detail
//					ON		trx_detail.DOC_NUMBER 	= trx_history.DOC_NUMBER
//					AND		trx_detail.YEAR			= trx_history.YEAR
//					AND		trx_detail.MONTH 		= trx_history.MONTH
//					WHERE	trx_history.USER	= "'.$lv_user.'"
//	     	   	  	ORDER BY DOC_NUMBER DESC, YEAR DESC, MONTH DESC';
		$getquery = '
					SELECT *
					FROM
					(
					SELECT	
							trx_detail.DOC_NUMBER,
							trx_detail.YEAR,
							trx_detail.MONTH,
							trx_detail.AREA,
							trx_detail.FIATUR,
							trx_detail.TRUE_VALUE_CURRENCY,
							trx_detail.TRUE_VALUE,
							trx_detail.NAMA_MITRA,
							trx_detail.NO_SAP,
							trx_history.USER,
							trx_history.LEVEL,
							trx_history.STATUS,
							trx_history.FINISH_AT
					FROM	trx_detail JOIN trx_history
					ON		trx_detail.DOC_NUMBER 	= trx_history.DOC_NUMBER
					AND		trx_detail.YEAR			= trx_history.YEAR
					AND		trx_detail.MONTH		= trx_history.MONTH
					WHERE	trx_history.USER	= "'.$lv_user.'"
					ORDER BY 	DOC_NUMBER DESC,
								YEAR ASC,
								MONTH ASC,
								FINISH_AT DESC
					) t
					GROUP BY DOC_NUMBER
					ORDER BY DOC_NUMBER DESC
		';
		$get_data_level = mysql_query($getquery);
		if(!$get_data_level){	
			/*echo "Data Not Found"; // Data Not Found
			echo $lv_level;
			echo $getquery;*/
				 $get_data_level_rw	= mysql_num_rows($get_data_level); // Get the number of rows
?>
            <div class="alert alert-warning alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <strong>No Data Found!</strong> Level <?=$lv_level?> <?=$getquery?> <?=$getquery?> <?=$get_data_level_rw?>
            </div>
<?php				
		} else {
			
			$get_data_level_rw	= mysql_num_rows($get_data_level); // Get the number of rows
			if($get_data_level_rw <= 0){ 
?>
            <div class="alert alert-warning alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <strong>No Data Found!</strong> You dont have any document history, please upload using <a href="dashboard.php?select=2" class="alert-link">Entry Data</a> Menu
            </div>
<?php		
				//echo "Data Not Found"; // Data Not Found
				
			} else {
			
		
?>

<table id="zhistorytab" class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead>
  <tr>
    <th scope="col">No.</th>
    <!--<th scope="col">Document Number</th>
    <th scope="col">Year</th>
    <th scope="col">Month</th>-->
    <th scope="col">No. SAP</th>
    <th scope="col">Nama Mitra</th>
    <th scope="col">Nilai stlh Pajak</th>
    <th scope="col">Currency</th>
    <th scope="col">Fiatur</th>
    <th scope="col">Level Approval</th>
    <th scope="col">Created By</th>
    <th scope="col">Status</th>
    <th scope="col">Last Changed at</th>
  </tr>
 </thead>
 
<tbody>
<?php 
			$count = 0;
			while($data_level_found=mysql_fetch_array($get_data_level)){
			$count = $count + 1;	
?>
  <tr>
    <td><?=$count?></td>
    <!--<td><a href="" data-toggle="modal" data-target="#modaltimeline" class="history_modal"><?php //echo $data_level_found['DOC_NUMBER']; ?></a></td>
    <td><?php //echo $data_level_found['YEAR']; ?></td>
    <td><?php //echo $data_level_found['MONTH']; ?></td>-->
    <td><?php echo $data_level_found['NO_SAP']; ?></td>
    <td><?php echo $data_level_found['NAMA_MITRA']; ?></td>
    <td><?php echo number_format($data_level_found['TRUE_VALUE']); ?></td>
    <td><?php echo $data_level_found['TRUE_VALUE_CURRENCY']; ?></td>
    <td><?php echo $data_level_found['FIATUR']; ?></td>
    <td><?php echo $data_level_found['LEVEL']; ?></td>
    <td><?php echo $data_level_found['USER']; ?></td>
    <td <?php if($data_level_found['STATUS']=="APPROVE") 
				echo 'style="color:#15A93F"'; 
			  elseif($data_level_found['STATUS']=="REJECT") 
			  	echo 'style="color:#15A93F"'; ?> >
		<?php if($data_level_found['LEVEL'] != 'VRKT') echo $data_level_found['STATUS']; ?></td>
    <td><?php echo $data_level_found['FINISH_AT']; ?></td>
  </tr>
<?php 
			}
?>
</tbody>
<tfoot>
  <tr>
    <th scope="col">No.</th>
    <!--<th scope="col">Document Number</th>
    <th scope="col">Year</th>
    <th scope="col">Month</th>-->
    <th scope="col">No. SAP</th>
    <th scope="col">Nama Mitra</th>
    <th scope="col">Nilai stlh Pajak</th>
    <th scope="col">Currency</th>
    <th scope="col">Fiatur</th>
    <th scope="col">Level Approval</th>
    <th scope="col">Created By</th>
    <th scope="col">Status</th>
    <th scope="col">Last Changed at</th>
  </tr>
 </tfoot>
</table>
		
<?php
			}
		}
?>

  </div>
</div>  

<script type="text/javascript">

$(document).ready(function(){
	//table
	$('#zhistorytab').dataTable();
	$('#zchecklist').dataTable();
});
</script>
<?php 
} else {
	echo "<script> window.location = 'index.php'; </script>";
}
?>