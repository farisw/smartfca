    
	<table id="zreport" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>SAP Doc number</th>
                <th>Nama Mitra</th>
                <th>User</th>
                <th>Level</th>
                <th>Unit / Area</th>
                <th>Status</th>
                <th>Start date</th>
                <th>End Date</th>
                <th>Different (in Minutes)</th>                
            </tr>
        </thead>
 
        <tbody>
<?php
session_start();
include('connect.php');

if(isset($_POST['action']) && $_POST['action'] == 'submit_report'){
	

	if( (isset($_POST['user']) && $_POST['user'] !='') || 
		(isset($_POST['doc_no']) && $_POST['doc_no'] !='') || 
		(isset($_POST['area']) && $_POST['area'] !='') ){
		$WHERE = '';
		$alert = '';

		if($_POST['user'] !=''){
			$WHERE = "A.USER ="."'".$_POST['user']."'";
			$alert = "User : ".$_POST['user'];
		}

		if($_POST['doc_no'] !=''){
			if($WHERE=='')
				$WHERE = "A.DOC_NUMBER ="."'".$_POST['doc_no']."'";
			else
				$WHERE = $WHERE."AND A.DOC_NUMBER ="."'".$_POST['doc_no']."'";
			
			if($alert=='')
				$alert = "Doc Num : ".$_POST['doc_no'];
			else
				$alert = $alert.", Doc Num : " .$_POST['doc_no'];
		}
		
		if($_POST['area'] !=''){
			if($WHERE=='')
				$WHERE = "A.area ="."'".$_POST['area']."'";
			else
				$WHERE = $WHERE."AND A.area ="."'".$_POST['area']."'";
			
			if($alert=='')
				$alert = "Unit / Area : ".$_POST['area'];
			else
				$alert = $alert.", Unit / Area : " .$_POST['area'];
		}
		
		if($_POST['nama_mitra'] !=''){
			if($WHERE=='')
				$WHERE = "B.nama_mitra LIKE "."'%".$_POST['nama_mitra']."%'";
			else
				$WHERE = $WHERE."AND B.nama_mitra LIKE "."'%".$_POST['nama_mitra']."%'";
			
			if($alert=='')
				$alert = "Nama Mitra : ".$_POST['nama_mitra'];
			else
				$alert = $alert.", Nama Mitra : " .$_POST['nama_mitra'];
		}
		if($_POST['doc_sap'] !=''){
			if($WHERE=='')
				$WHERE = "B.no_sap = "."'".$_POST['doc_sap']."'";
			else
				$WHERE = $WHERE."AND B.no_sap = "."'".$_POST['doc_sap']."'";
			
			if($alert=='')
				$alert = "SAP Doc No : ".$_POST['doc_sap'];
			else
				$alert = $alert.", SAP Doc No : " .$_POST['doc_sap'];
		}
		
		$query = 'SELECT 	B.NAMA_MITRA, B.NO_SAP, B.REJECT_FLAG, B.NOT_COMPLETE, B.FLOW_MAIN,
							A.DOC_NUMBER, A.USER, A.LEVEL, A.AREA, A.START_AT, A.FINISH_AT
				    FROM	trx_history as A JOIN trx_detail as B
					  ON 	A.DOC_NUMBER = B.DOC_NUMBER
					 AND	A.YEAR = B.YEAR
					 AND	A.MONTH = B.MONTH
				   WHERE	'. $WHERE;
						
		$result = mysql_query($query);

?>
		<div class="alert alert-info" role="alert">All transaction for <?php echo $alert; ?> displayed </div>
<?php				
	}else{
		$result = mysql_query('
				SELECT 	B.NAMA_MITRA, B.NO_SAP, B.REJECT_FLAG, B.NOT_COMPLETE, B.FLOW_MAIN,
						A.DOC_NUMBER, A.USER, A.LEVEL, A.AREA, A.START_AT, A.FINISH_AT
				    FROM	trx_history as A JOIN trx_detail as B
					  ON 	A.DOC_NUMBER = B.DOC_NUMBER
					 AND	A.YEAR = B.YEAR
					 AND	A.MONTH = B.MONTH
				WHERE   A.year = YEAR(CURDATE()) ');
				
?>
		<div class="alert alert-info" role="alert">All transaction history for current year displayed </div>
<?php				

	}
	// Verify it worked
	if (!$result) echo mysql_error();		
	
	
	
	while($data=mysql_fetch_array($result)){
											
		 $date1 = $data["START_AT"];
		 $date2 = $data["FINISH_AT"]; 
		 $diff = strtotime($date2) - strtotime($date1);
		 $diff_in_hrs = round($diff/60,0);
		 
		
?>
        <tr>
            <td><?php echo $data["NO_SAP"]; ?></td>
            
            <td><?php echo $data["NAMA_MITRA"]; ?></td>
            <td><?php echo $data["USER"]; ?></td>
            <td><?php echo $data["LEVEL"]; ?></td>
            <td><?php echo $data["AREA"]; ?></td>
            
            <td>
            <?php
				if($data["REJECT_FLAG"]=="X"){
					echo "REJECT";
				}elseif($data["NOT_COMPLETE"]=="X"){
					echo "PARKED";
				}elseif($data["FLOW_MAIN"]=="" OR $data["FLOW_MAIN"]==NULL){
					echo "FINAL APPROVAL";
				}elseif($data["FLOW_MAIN"]!="" OR $data["FLOW_MAIN"]!=NULL){
					echo "IN PROGRESS";
				}
				
				
			?>
            </td>
            <td><?php echo $data["START_AT"]; ?></td>
            <td><?php echo $data["FINISH_AT"]; ?></td>
            <td><?php echo $diff_in_hrs; ?></td>
        </tr>
<?php		
		
	}     
}

?>

        </tbody>
        <tfoot>
            <tr>
                <th>SAP Doc number</th>
                <th>Nama Mitra</th>
                <th>User</th>
                <th>Level</th>
                <th>Unit / Area</th>
                <th>Status</th>
                <th>Start date</th>
                <th>End Date</th>
                <th>Different (in Minutes)</th>   
            </tr>
        </tfoot>
 
    </table>
    
    
