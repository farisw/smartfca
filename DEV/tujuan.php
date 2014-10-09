<?php
	session_start();

//function encrypt($string){
//	return base64_encode(base64_encode(base64_encode($string)));
//}
//
//function decrypt($string){
//	return base64_decode(base64_decode(base64_decode($string)));
//}
//echo $_POST['ra0'];
//echo "<br>";
//echo $_POST['ra1'];
//echo "<br>";
//echo $_POST['cek0'];
//echo "<br>";
//echo $_POST['cek1'];

if(isset($_POST['action']) && $_POST['action'] == 'login'){ // Check the action `login`
//	$username 		= htmlentities($_POST['username']); // Get the username
//	$password 		= htmlentities(encrypt($_POST['password'])); // Get the password and decrypt it
//	$query			= mysql_query('SELECT * FROM users WHERE username = "'.$username.'" AND password = "'.$password.'" '); // Check the table with posted credentials
//	$num_rows		= mysql_num_rows($query); // Get the number of rows
//	if($num_rows <= 0){ // If no users exist with posted credentials print 0 like below.
//		echo 0;
//	} else {
//		$fetch = mysql_fetch_array($query);
//		// NOTE : We have already started the session in the library.php
//		$_SESSION['userid'] 		= $fetch['id'];
//		$_SESSION['username'] 	= $fetch['username'];
//		echo 1;
//	}
	$_SESSION['username'] 		= $_POST['username'];
	$_SESSION['password'] 		= $_POST['password'];
	$_SESSION['radio'] 			= $_POST['radio'];
	$lv_md5 = md5(md5(md5($_POST['password'])));
	$_SESSION['md5'] 			= $lv_md5;
// singlebyte strings
	$lv_md5s1 = substr($lv_md5, 0, 5);
	$lv_md5s2 = substr($lv_md5, 11, 5);
	$lv_md5s3 = substr($lv_md5, 26, 5);
	$_SESSION['md5s'] 			= $lv_md5s1.$lv_md5s2.$lv_md5s3;
//	$lv_md5s1a = substr($lv_md5again, 3, 5);
//	$lv_md5s2a = substr($lv_md5again, 23, 5);
//	$lv_md5s3a = substr($lv_md5again, 16, 5);
//	$_SESSION['md5s'] 			= $lv_md5s1a.$lv_md5s2a.$lv_md5s3a;
	$_SESSION['md5s1'] 			= $lv_md5s1;
	$_SESSION['md5s2'] 			= $lv_md5s2;
	$_SESSION['md5s3'] 			= $lv_md5s3;
	$lv_encript = base64_encode($_POST['password']);
	$_SESSION['encript'] 		= $lv_encript;
	$lv_decript = base64_decode($_POST['password']);
	$_SESSION['decript'] 		= $lv_decript;
	$_SESSION['list']		    = $_POST['currency'];
	echo 1;
}
?>