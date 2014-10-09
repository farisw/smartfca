<?php
session_start();
include('connect.php');

	$query			= mysql_query('
					 SELECT user_password.username, 
					 		user_detail.nama_depan, 
							user_detail.nama_belakang, 
							user_detail.departemen, 
							user_authorization.level 
					   FROM user_password join user_detail join user_authorization 
					     ON user_detail.username = user_password.username 
						AND user_authorization.username = user_password.username 
					  WHERE user_password.username = "asdf1" and user_password.password = "7d84b9c26a8f829"'
					  ); // Check the table with posted credentials
	$num_rows		= mysql_num_rows($query); // Get the number of rows
	if($num_rows <= 0){ // If no users exist with posted credentials print 0 like below.
		echo 0;
	} else {
		$fetch = mysql_fetch_array($query);
		// NOTE : We have already started the session in the library.php
		echo '<br>'.$_SESSION['username'] 		= $fetch['username'];
		echo '<br>'.$_SESSION['nama_depan'] 	= $fetch['nama_depan'];
		echo '<br>'.$_SESSION['nama_belakang'] 	= $fetch['nama_belakang'];
		echo '<br>'.$_SESSION['departemen'] 	= $fetch['departemen'];
		echo '<br>'.$_SESSION['level'] 			= $fetch['level'];		
		echo 1;
	} 


?>