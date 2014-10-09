
<?php session_start(); ?>
<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/custom.css" rel="stylesheet">
<link href="datepicker/css/datepicker.css" rel="stylesheet">
<?php
	setlocale(LC_TIME, "IND");
	$get_year 		= date("Y");
	$get_month		= date("m");
	$get_date		= date("d");
	$get_time		= date("Y-m-d H:i:s");
	echo $get_year."<br>".$get_month."<br>".$get_date."<br>".$get_time;
	
setlocale(LC_TIME, "INA");
echo strftime(" in German %T.\n");
?>
<form>
<table class="mytable" border="1">
<tr>
	<td colspan="2"><h3 class="as_login_heading">Login</h3></td>
</tr>

<tr>
	<td colspan="2"><div class="login_result" id="login_result"></div></td>
</tr>
<tr>
	<td>Username</td>
    <td><input type="text" name="username" id="username" value="asdf1"/></td>
</tr>
<tr>
	<td>Password</td>
    <td><input type="password" name="password" id="password" value="asdf1"/></td>
</tr>
<tr>
	<td>Date Picker</td>
    <td><input type="text" placeholder="Tgl" class="kontrak_tgl" data-date-format="mm/dd/yyyy"></td>
</tr>
<tr>
	<td>
                  <select class="form-control" id="kontrak_currency" >
                    <!--<option value="#" disabled>Currency</option>-->
                    <option>IDR</option>
                    <option>USD</option>
                  </select>
    </td>
</tr>
<td>
	  <label>
	    <input type="radio" name="radio1" id="RadioGroup1_0" />
	    Radio0</label>
	  <br />
	  <label>
	    <input type="radio" name="radio1" id="RadioGroup1_1" />
	    Radio1</label>
	  <br />

</td>
<tr>
	<td colspan="2"><input type="submit" name="login" id="login" value="Login &raquo;" /></td>
</tr>
</table>
</form>

<!--<form action="tujuan.php" method="post">

<input name="ra0" type="radio" value="X" />QWER<br />

<input name="ra0" type="radio" value="" />ASDF<br />

<label><input name="cek0" type="checkbox" value="X" />cek 0 </label><br />

<label><input name="cek1" type="checkbox" value="X" />cek 1 </label><br />
      
<input name="" type="submit" /><br />
</form>-->

<script src="../js/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="../js/bootstrap.min.js"></script>
<script src="datepicker/js/bootstrap-datepicker.js"></script>
<!-- Menu Toggle Script --> 
<script type="text/javascript">
$('.datepicker').datepicker({
    format: 'mm/dd/yyyy',
    startDate: '-3d'
})
</script> 


<script type="text/javascript">

$(document).ready(function(){
	$('#username').focus(); // Focus to the username field on body loads
	$('#login').click(function(){ // Create `click` event function for login
		var username = $('#username'); // Get the username field
		var password = $('#password'); // Get the password field
		var currency = $('#kontrak_currency'); // Get the list field
		var login_result = $('.login_result'); // Get the login result div
		login_result.html("<img src='loading.gif'/>"); // Set the pre-loader can be an animation
		var radio;
		if (document.getElementById('RadioGroup1_1').checked){
			radio = 'X';
			login_result.html(radio);
			} else {
			radio = '';
			login_result.html(radio);
			}
		if(username.val() == ''){ // Check the username values is empty or not
			username.focus(); // focus to the filed
			login_result.html('<span class="error">Enter the username</span>');
			return false;
		}
		if(password.val() == ''){ // Check the password values is empty or not
			password.focus();
			login_result.html('<span class="error">Enter the password</span>');
			return false;
		}
		if(username.val() != '' && password.val() != ''){ // Check the username and password values is not empty and make the ajax request
			var UrlToPass = 'action=login&username='+username.val()
							+'&password='+password.val()
							+'&currency='+currency.val()
							+'&radio='+radio;
			$.ajax({ // Send the credential values to another checker.php using Ajax in POST menthod
			type : 'POST',
			data : UrlToPass,
			url  : 'tujuan.php',//'../admin/submit_off.php',
			success: function(responseText){ // Get the result and asign to each cases
				if(responseText == 0){
					login_result.html('<span class="error">Username or Password Incorrect!</span>');
				}
				else if(responseText == 1){
					window.location = 'show.php';
//					alert('Masuk');
				}
				else{
					alert('Problem with sql query');
				}
			}
			});
		}
		return false;
	});
});
</script>