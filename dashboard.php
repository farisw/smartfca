<!--Faris Wijaya & Guntarto Budi Rohmadi (Sept 17, 2014)-->
<!--Faris Wijaya & Guntarto Budi Rohmadi (Sept 17, 2014)-->
<?php 
session_start(); 
if ( !(isset($_SESSION['USERNAME'])) or empty($_SESSION['USERNAME']) ){
	echo "<script> window.location = 'index.php'; </script>";
} else {
include("admin/connect.php");
?> 
<!--faris-->
<!--Guntarto-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SMART FCA</title>
<link rel="shortcut icon" href="image/logo.png">
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">
<link href="css/bootstrap-datepicker.css" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> --> 
   

<script src="js/jquery.min.js"></script> 
<script src="js/highcharts.js"></script> 
<script src="js/jquery.dataTables.min.js"></script>    
<script src="js/dataTables.bootstrap.js"></script>   



</head>
<body>

<!--Start--> 
<!--Start--> 
<!--Start--> 
<!--Start--> 
<!--Start--> 

<!--  sgtartnavbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="zcontainer">
    <div class="navbar-header"> <span class="navbar-brand" ><span class="glyphicon glyphicon-book">&nbsp</span>SMART FCA</span> </div>
    <div class="navbar-collapse collapse">
    <?php if($_REQUEST['select'] == 2) { ?>
      <ul class="nav navbar-nav ">
        <li ><a href="#" id="submit_off"><span class="glyphicon glyphicon-saved ">&nbsp;</span>Submit Document</a></li>
        <li ><a href="#"><span class="">&nbsp;</span>|</a></li>
		<li ><a href="#" id="save_doc"><span class="glyphicon glyphicon-floppy-disk">&nbsp</span>Park Document</a></li>
<!--        <li ><a href="#"><span class="glyphicon glyphicon-remove">&nbsp</span>Delete</a></li>-->
      </ul>
    <?php } ?>
      <ul class="nav navbar-nav navbar-right">
        <li id="ztoggle"><a href="#menu-toggle" id="menu-toggle"><span class="glyphicon glyphicon-th-list">&nbsp</span>Show/Hide Menu</a></li>
        <li><a href="" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user">&nbsp</span>Welcome <?php echo $_SESSION['NAMA_DEPAN']; ?> </a></li>
        <li><a  href="#" id='logout' ><span class="glyphicon glyphicon-log-out">&nbsp</span>
          <?php IF ($_SESSION['USERNAME']) { echo 'Logout'; } ?>
          </a></li>
      </ul>
    </div>
  </div>
</div>

<!--  endnavbar -->
<div id="wrapper"> 
  
  <!-- Sidebar -->
  <div id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <!-- <li class="sidebar-brand">
	            <a href="#">
	                Start Bootstrap
	            </a>
	        </li>--> 
      <br>
	        <li <?php if($_REQUEST['select'] == 1) { echo 'class="active"';} ?> >
	            <a href="dashboard.php?select=1"><span class="glyphicon glyphicon-tasks">&nbsp;</span>Dashboard </a>
<!--                <span class="badge">14</span>-->
	        </li>
<?php if ($_SESSION['LEVEL'] == "VRKT" or $_SESSION['LEVEL'] == "ADMIN") { ?>
      		<li <?php if($_REQUEST['select'] == 2) { echo 'class="active"';} ?> > 
      			<a href="dashboard.php?select=2"><span class="glyphicon glyphicon-open">&nbsp;</span>Entry Data</a> 
      		</li>
<?php } ?>
      <!--	        <li <?php if($_REQUEST['select'] == 3) { echo 'class="active"';} ?> >
	            <a href="dashboard.php?select=3"><span class="glyphicon glyphicon-eye-open">&nbsp</span>Overview Checklist </a>
	        </li>-->
<?php //if ($_SESSION['LEVEL'] != "VRKT") { ?>
           	<li <?php if($_REQUEST['select'] == 3) { echo 'class="active"';} ?> >
	            <a href="dashboard.php?select=3"><span class="glyphicon glyphicon-list-alt">&nbsp;</span>Report </a>
<!--                <span class="badge">14</span>-->
	        </li>
<?php //} ?>
<?php if ($_SESSION['LEVEL'] == "ADMIN") { ?>
           	<li <?php if($_REQUEST['select'] == 4) { echo 'class="active"';} ?> >
	            <a href="dashboard.php?select=4"><span class="glyphicon glyphicon-list-alt">&nbsp;</span>Input User </a>
<!--                <span class="badge">14</span>-->
	        </li>
<?php } ?>

    </ul>
  </div>
  <!-- /#sidebar-wrapper --> 
  
  <!-- Page Content -->
  <div id="page-content-wrapper">
    <div class="container-fluid"> 
            
<?php 	
	if(isset($_REQUEST['select']) && $_REQUEST['select'] == '1' ){
		include("summary_data.php"); 		
		$_SESSION['TIME_NON'] = date("Y-m-d H:i:s");;
	}else
	if(isset($_REQUEST['select']) && $_REQUEST['select'] == '2' ){
		include("entry_data.php"); 		
	}else
	if(isset($_REQUEST['select']) && $_REQUEST['select'] == '3' ){
		include("report.php");
	}else
	if(isset($_REQUEST['select']) && $_REQUEST['select'] == '4' ){
		include("entry_user.php"); 		
	}
	

?>
            
    </div>
    <!-- container-fluid  --> 
  </div>
  <!-- /#page-content-wrapper --> 
</div>

<!--End--> 
<!--End--> 
<!--End--> 
<!--End--> 
<!--End--> 

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Account Detail</h4>
      </div>
      <div class="modal-body">
        <form>
        <!--  Panel content -->
            <div class="row"> 
              <!--  nama_mitra -->
              <div class="col-lg-12">
                <div class="input-group"> <span class="input-group-addon">User Id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                  <input type="text" class="form-control" placeholder="User Id" id="uid" disabled value="<?php echo $_SESSION['USERNAME'];?>">
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 --> 
            </div>
            <!-- /.row -->
            
         <!--  Panel content -->
            <div class="row"> 
              <!--  nama_mitra -->
              <div class="col-lg-12">
                <div class="input-group"> <span class="input-group-addon">Front Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                  <input type="text" class="form-control" placeholder="Front Name" id="fname" disabled value="<?php echo $_SESSION['NAMA_DEPAN']; ?> ">
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 --> 
            </div>
            <!-- /.row -->
         
         <!--  Panel content -->
            <div class="row"> 
              <!--  nama_mitra -->
              <div class="col-lg-12">
                <div class="input-group"> <span class="input-group-addon">Last Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                  <input type="text" class="form-control" placeholder="Last Name" id="lname" disabled value="<?php echo $_SESSION['NAMA_BELAKANG']; ?> ">
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 --> 
            </div>
            <!-- /.row -->
            <h4>Change Password</h4>
         <!--  Panel content -->
            <div class="row"> 
              <!--  nama_mitra -->
              <div class="col-lg-12">
                <div class="input-group"> <span class="input-group-addon">New Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                  <input type="password" class="form-control" placeholder="New Password" id="npass"  >
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 --> 
            </div>
            <!-- /.row -->
            
          <!--  Panel content -->
            <div class="row"> 
              <!--  nama_mitra -->
              <div class="col-lg-12">
                <div class="input-group"> <span class="input-group-addon">Repeat Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                  <input type="password" class="form-control" placeholder="Repeat Password" id="rpass"  >
                </div>
                <!-- /input-group --> 
              </div>
              <!-- /.col-lg-6 --> 
            </div>
            <!-- /.row -->
            
        </form>
        
        <center><div id="savenewpass_msg"></div></center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="savenewpass">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->


<!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="modaltimeline" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Update History</h4>
      </div>
      <div class="modal-body">
		<?php include("misc/timeline.php"); ?> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> --> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 

<script src="js/bootstrap.min.js"></script> 
<script src="js/bootstrap-datepicker.js"></script> 

<script src="js/jquery.number.js"></script>                 
<script src="js/knob.js"></script> 

<script src="js/main.js"></script> 
</body>
</html>
<?php
}
?>