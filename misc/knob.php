
<?php 
if(isset($_SESSION['USERNAME']) and $_SESSION['USERNAME'] != '' and
   isset($_SESSION['LEVEL']) and $_SESSION['LEVEL'] != ''){
		
		if( $_SESSION['LEVEL']=="VRKT" ){
		$result = mysql_query('
					SELECT 	COUNT(*) as total
					FROM	trx_detail 
					WHERE	trx_detail.CREATED_BY = "'.$_SESSION['USERNAME'].'"
					  AND 	NOT_COMPLETE != "X"');
		// Verify it worked
		if (!$result) echo mysql_error();		
		$total = mysql_fetch_assoc($result);
		
		unset($result);
		$result = mysql_query('
					SELECT 	COUNT(*) as reject
					FROM	trx_detail 
					WHERE	trx_detail.CREATED_BY = "'.$_SESSION['USERNAME'].'"
					  AND   REJECT_FLAG = "X" 
					  AND 	NOT_COMPLETE != "X" ');
		// Verify it worked
		if (!$result) echo mysql_error();		
		$reject = mysql_fetch_assoc($result);
		
		unset($result);
		$result = mysql_query('
					SELECT 	COUNT(*) as inprogress
					FROM	trx_detail 
					WHERE	trx_detail.CREATED_BY = "'.$_SESSION['USERNAME'].'"
					  AND   ( FLOW_MAIN != "" OR FLOW_MAIN != NULL )
					  AND 	REJECT_FLAG != "X"
					  AND 	NOT_COMPLETE != "X" ');
		// Verify it worked
		if (!$result) echo mysql_error();		
		$inprogress = mysql_fetch_assoc($result);
		
		unset($result);
		$result = mysql_query('
					SELECT 	COUNT(*) as final
					FROM	trx_detail 
					WHERE	trx_detail.CREATED_BY = "'.$_SESSION['USERNAME'].'"
					  AND   ( FLOW_MAIN = "" OR FLOW_MAIN = NULL )
					  AND 	REJECT_FLAG = "" 
					  AND 	NOT_COMPLETE != "X"');
		// Verify it worked
		if (!$result) echo mysql_error();		
		$final = mysql_fetch_assoc($result);
		}else{
			$result = mysql_query('
						SELECT 	COUNT(*) as total
						FROM	trx_detail 
						WHERE	trx_detail.CREATED_BY = "'.$_SESSION['USERNAME'].'"
						  AND 	NOT_COMPLETE != "X"');
			// Verify it worked
			if (!$result) echo mysql_error();		
			$total = mysql_fetch_assoc($result);
			
			
			$lv_level = $_SESSION['LEVEL'];
			$lv_area  = str_replace(',','", "',$_SESSION['AREA']);	
			
			unset($result);
			$result = mysql_query('
						SELECT 	COUNT(*) as reject
						FROM	trx_detail
					  WHERE AREA 			IN ( "'.$lv_area.'" )
						  AND   REJECT_FLAG = "X" 
						  AND 	NOT_COMPLETE != "X" ');
			// Verify it worked
			if (!$result) echo mysql_error();		
			$reject = mysql_fetch_assoc($result);
			
			unset($result);
			
			$result = mysql_query('
						SELECT 	COUNT(*) as inprogress
						FROM	trx_detail as trx_detail JOIN trx_history as trx_history
						ON		trx_detail.DOC_NUMBER 	= trx_history.DOC_NUMBER
						AND		trx_detail.YEAR			= trx_history.YEAR
						AND		trx_detail.MONTH		= trx_history.MONTH
						WHERE	( ( trx_history.USER	= "'.$_SESSION['USERNAME'].'" AND trx_history.STATUS != "PARKED" AND trx_detail.not_complete = "" AND REJECT_FLAG		= "" AND (FLOW_MAIN != "" OR FLOW_MAIN = NULL) )
								 OR
							    ( trx_detail.AREA IN ( "'.$lv_area.'" ) AND trx_detail.APPROVAL_LEVEL 	= "'.$lv_level.'" AND trx_detail.REJECT_FLAG		= "" AND trx_detail.not_complete = "" AND trx_history.next_approval = "'.$lv_level.'" ) ) 
						');
			// Verify it worked
			if (!$result) echo mysql_error();		
			$inprogress = mysql_fetch_assoc($result);
			
			unset($result);
			
			$result = mysql_query('
						SELECT 	COUNT(*) as final
						FROM	trx_detail 
					  WHERE AREA 			IN ( "'.$lv_area.'" )
						  AND   ( FLOW_MAIN = "" OR FLOW_MAIN = NULL )
						  AND 	REJECT_FLAG = "" 
						  AND 	NOT_COMPLETE != "X"');
			// Verify it worked
			if (!$result) echo mysql_error();		
			$final = mysql_fetch_assoc($result);
		}
		
   
?>
<div class="zclear"></div>

<?php
if( $_SESSION['LEVEL']=="VRKT" ){
?>                         
<div class="zknob">      <center>                  
<input type="text" value="<?php echo $total['total']; ?>" class="dial" ><br>
<em>My Submitted Checklist</em></center>
</div>
<?php
}
?>
<div class="zknob">      <center>                  
<input type="text" value="<?php echo $final['final']; ?>" class="dial2" ><br>
<em>Final Approval</em></center>
</div>

<div class="zknob">        <center>             
<input type="text" value="<?php echo $inprogress['inprogress']; ?>" class="dial3" ><br>
<em>Waiting for Approval</em> </center>
</div>


<div class="zknob">   <center>                 
<input type="text" value="<?php echo $reject['reject']; ?>" class="dial4" ><br>
<em>Rejected</em></center>
</div>

<div class="zclear"></div>   

<?php }
?>