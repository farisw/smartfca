<?php
session_start();
include('connect.php');
if(isset($_POST['action']) && $_POST['action'] == 'login'){
 	$username 		= htmlentities($_POST['username']); // Get the username
	$lv_md5 		= htmlentities(md5(md5(md5($_POST['password'])))); // Get the password and decrypt it
	$lv_md5s1 		= substr($lv_md5, 0, 5);
	$lv_md5s2 		= substr($lv_md5, 11, 5);
	$lv_md5s3 		= substr($lv_md5, 26, 5);
	$password		= $lv_md5s1.$lv_md5s2.$lv_md5s3;
	$query			= mysql_query('
					 SELECT user_password.username, 
					 		user_detail.nama_depan, 
							user_detail.nama_belakang, 
							user_detail.departemen, 
							user_authorization.level 
					   FROM user_password join user_detail join user_authorization 
					     ON user_detail.username = user_password.username 
						AND user_authorization.username = user_password.username 
					  WHERE user_password.username = "'.$username.'" and user_password.password = "'.$password.'"'
					  ); // Check the table with posted credentials
	$num_rows		= mysql_num_rows($query); // Get the number of rows
	if($num_rows <= 0){ // If no users exist with posted credentials print 0 like below.
		echo 0;
	} else {
		$fetch = mysql_fetch_array($query);
		// NOTE : We have already started the session in the library.php
		$_SESSION['username'] 		= $fetch['username'];
		$_SESSION['nama_depan'] 	= $fetch['nama_depan'];
		$_SESSION['nama_belakang'] 	= $fetch['nama_belakang'];
		$_SESSION['departemen'] 	= $fetch['departemen'];
		$_SESSION['level'] 			= $fetch['level'];		
		echo 1;
	} 
}

?>