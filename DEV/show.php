<?php
session_start();

	echo 'Username 		: '.$_SESSION['username'].'<br>';
	echo 'Password 		: '.$_SESSION['password'].'<br>';
	echo 'MD5	   		: '.$_SESSION['md5'].'<br>';
	echo 'MD5 single	: '.$_SESSION['md5s'].'<br>';
	echo 'MD5 single 1	: '.$_SESSION['md5s1'].'<br>';
	echo 'MD5 single 2	: '.$_SESSION['md5s2'].'<br>';
	echo 'MD5 single 3	: '.$_SESSION['md5s3'].'<br>';
	echo 'Encript  		: '.$_SESSION['encript'].'<br>';
	echo 'Decript  		: '.$_SESSION['decript'].'<br>';
	echo 'List  		: '.$_SESSION['list'].'<br>';
	echo 'radio  		: '.$_SESSION['radio'].'<br>';

session_destroy();
?>
<a href="http://localhost/SMART_FCA/dev/md5.php">Back</a>
