    
	<table id="zreport" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Doc number</th>
                <th>User</th>
                <th>Level</th>
                <th>Area</th>
                <th>Start date</th>
                <th>End Date</th>
                <th>Different (in Hours)</th>                
            </tr>
        </thead>
 
        <tbody>
<?php
session_start();
include('connect.php');

if(isset($_POST['action']) && $_POST['action'] == 'submit_report'){
	

	if( (isset($_POST['user']) && $_POST['user'] !='') || (isset($_POST['doc_no']) && $_POST['doc_no'] !='') ){
		$WHERE = '';
		$alert = '';

		if($_POST['user'] !=''){
			$WHERE = "trx_history.USER ="."'".$_POST['user']."'";
			$alert = "User : ".$_POST['user'];
		}

		if($_POST['doc_no'] !=''){
			if($WHERE=='')
				$WHERE = "trx_history.DOC_NUMBER ="."'".$_POST['doc_no']."'";
			else
				$WHERE = $WHERE."AND trx_history.DOC_NUMBER ="."'".$_POST['doc_no']."'";
			
			if($alert=='')
				$alert = "Doc Num : ".$_POST['doc_no'];
			else
				$alert = $alert.", Doc Num : " .$_POST['doc_no'];
		}
		$query = 'SELECT 	* 
						FROM	trx_history 
						WHERE	'. $WHERE;
						
		$result = mysql_query($query);

?>
		<div class="alert alert-info" role="alert">All transaction for <?php echo $alert; ?> displayed </div>
<?php				
	}else{
		$result = mysql_query('
				SELECT 	* 
				FROM	trx_history 
				WHERE   year = YEAR(CURDATE()) ');
				
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
		 $diff_in_hrs = round($diff/3600,0);
		 
		
?>
        <tr>
            <td><?php echo $data["DOC_NUMBER"]; ?></td>
            <td><?php echo $data["USER"]; ?></td>
            <td><?php echo $data["LEVEL"]; ?></td>
            <td><?php echo $data["AREA"]; ?></td>
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
                <th>Doc number</th>
                <th>User</th>
                <th>Level</th>
                <th>Area</th>
                <th>Start date</th>
                <th>End Date</th>
                <th>Different (in Hours)</th>   
            </tr>
        </tfoot>
 
    </table>
    
    
