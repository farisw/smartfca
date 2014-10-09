
<?php 
if(isset($_SESSION['USERNAME']) and $_SESSION['USERNAME'] != '' and
   isset($_SESSION['LEVEL']) and $_SESSION['LEVEL'] != ''){

		$result = mysql_query('
					SELECT 	COUNT(*) as total
					FROM	trx_detail 
					WHERE	trx_detail.CREATED_BY = "'.$_SESSION['USERNAME'].'"');
		// Verify it worked
		if (!$result) echo mysql_error();		
		$total = mysql_fetch_assoc($result);
		
		unset($result);
		$result = mysql_query('
					SELECT 	COUNT(*) as reject
					FROM	trx_detail 
					WHERE	trx_detail.CREATED_BY = "'.$_SESSION['USERNAME'].'"
					  AND   REJECT_FLAG = "X" ');
		// Verify it worked
		if (!$result) echo mysql_error();		
		$reject = mysql_fetch_assoc($result);
		
		unset($result);
		$result = mysql_query('
					SELECT 	COUNT(*) as inprogress
					FROM	trx_detail 
					WHERE	trx_detail.CREATED_BY = "'.$_SESSION['USERNAME'].'"
					  AND   ( FLOW_MAIN != "" OR FLOW_MAIN != NULL )
					  AND 	REJECT_FLAG != "X" ');
		// Verify it worked
		if (!$result) echo mysql_error();		
		$inprogress = mysql_fetch_assoc($result);
		
		unset($result);
		$result = mysql_query('
					SELECT 	COUNT(*) as final
					FROM	trx_detail 
					WHERE	trx_detail.CREATED_BY = "'.$_SESSION['USERNAME'].'"
					  AND   ( FLOW_MAIN = "" OR FLOW_MAIN = NULL )
					  AND 	REJECT_FLAG = "" ');
		// Verify it worked
		if (!$result) echo mysql_error();		
		$final = mysql_fetch_assoc($result);
		
   }
?>
<div class="zclear"></div>                         
<div class="zknob">    <center>                    
<input type="text" value="<?php echo $total['total']; ?>" class="dial" ><br>
<em>My Submitted Checklist</em></small>
</div>

<div class="zknob">    <center>                    
<input type="text" value="<?php echo $final['final']; ?>" class="dial2" ><br>
<em>Final Approval</em></small>
</div>

<div class="zknob">    <center>                    
<input type="text" value="<?php echo $inprogress['inprogress']; ?>" class="dial3" ><br>
<em>In Progress</em></small>
</div>


<div class="zknob">    <center>                    
<input type="text" value="<?php echo $reject['reject']; ?>" class="dial4" ><br>
<em>Rejected</em></small>
</div>

<div class="zclear"></div>   
