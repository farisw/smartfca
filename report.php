<h1 class="page-header">
    Report <small>General Overview</small>
</h1>
<style>
div.dataTables_length label {
	font-weight: normal;
	float: left;
	text-align: left;
}

div.dataTables_length select {
	width: 75px;
}

div.dataTables_filter label {
	font-weight: normal;
	float: right;
}

div.dataTables_filter input {
	width: 16em;
	margin-left: 0.5em;
}

div.dataTables_info {
	padding-top: 8px;
}

div.dataTables_paginate {
	float: right;
	margin: 0;
}

div.dataTables_paginate ul.pagination {
	margin: 2px 0;
	white-space: nowrap;
}

table.dataTable td,
table.dataTable th {
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
}


table.dataTable {
	clear: both;
	margin-top: 6px !important;
	margin-bottom: 6px !important;
	max-width: none !important;
}

table.dataTable thead .sorting,
table.dataTable thead .sorting_asc,
table.dataTable thead .sorting_desc,
table.dataTable thead .sorting_asc_disabled,
table.dataTable thead .sorting_desc_disabled {
	cursor: pointer;
}

table.dataTable thead .sorting { background: url('../images/sort_both.png') no-repeat center right; }
table.dataTable thead .sorting_asc { background: url('../images/sort_asc.png') no-repeat center right; }
table.dataTable thead .sorting_desc { background: url('../images/sort_desc.png') no-repeat center right; }

table.dataTable thead .sorting_asc_disabled { background: url('../images/sort_asc_disabled.png') no-repeat center right; }
table.dataTable thead .sorting_desc_disabled { background: url('../images/sort_desc_disabled.png') no-repeat center right; }

table.dataTable thead > tr > th {
	padding-left: 18px;
	padding-right: 18px;
}

table.dataTable th:active {
	outline: none;
}

/* Scrolling */
div.dataTables_scrollHead table {
	margin-bottom: 0 !important;
	border-bottom-left-radius: 0;
	border-bottom-right-radius: 0;
}

div.dataTables_scrollHead table thead tr:last-child th:first-child,
div.dataTables_scrollHead table thead tr:last-child td:first-child {
	border-bottom-left-radius: 0 !important;
	border-bottom-right-radius: 0 !important;
}

div.dataTables_scrollBody table {
	border-top: none;
	margin-top: 0 !important;
	margin-bottom: 0 !important;
}

div.dataTables_scrollBody tbody tr:first-child th,
div.dataTables_scrollBody tbody tr:first-child td {
	border-top: none;
}

div.dataTables_scrollFoot table {
	margin-top: 0 !important;
	border-top: none;
}

/* Frustratingly the border-collapse:collapse used by Bootstrap makes the column
   width calculations when using scrolling impossible to align columns. We have
   to use separate
 */
table.table-bordered.dataTable {
	border-collapse: separate !important;
}
table.table-bordered thead th,
table.table-bordered thead td {
	border-left-width: 0;
	border-top-width: 0;
}
table.table-bordered tbody th,
table.table-bordered tbody td {
	border-left-width: 0;
	border-bottom-width: 0;
}
table.table-bordered th:last-child,
table.table-bordered td:last-child {
	border-right-width: 0;
}
div.dataTables_scrollHead table.table-bordered {
	border-bottom-width: 0;
}




/*
 * TableTools styles
 */
.table.dataTable tbody tr.active td,
.table.dataTable tbody tr.active th {
	background-color: #08C;
	color: white;
}

.table.dataTable tbody tr.active:hover td,
.table.dataTable tbody tr.active:hover th {
	background-color: #0075b0 !important;
}

.table.dataTable tbody tr.active th > a,
.table.dataTable tbody tr.active td > a {
	color: white;
}

.table-striped.dataTable tbody tr.active:nth-child(odd) td,
.table-striped.dataTable tbody tr.active:nth-child(odd) th {
	background-color: #017ebc;
}

table.DTTT_selectable tbody tr {
	cursor: pointer;
}

div.DTTT .btn {
	color: #333 !important;
	font-size: 12px;
}

div.DTTT .btn:hover {
	text-decoration: none !important;
}

ul.DTTT_dropdown.dropdown-menu {
  z-index: 2003;
}

ul.DTTT_dropdown.dropdown-menu a {
	color: #333 !important; /* needed only when demo_page.css is included */
}

ul.DTTT_dropdown.dropdown-menu li {
	position: relative;
}

ul.DTTT_dropdown.dropdown-menu li:hover a {
	background-color: #0088cc;
	color: white !important;
}

div.DTTT_collection_background {
	z-index: 2002;	
}

/* TableTools information display */
div.DTTT_print_info {
	position: fixed;
	top: 50%;
	left: 50%;
	width: 400px;
	height: 150px;
	margin-left: -200px;
	margin-top: -75px;
	text-align: center;
	color: #333;
	padding: 10px 30px;
	opacity: 0.95;

	background-color: white;
	border: 1px solid rgba(0, 0, 0, 0.2);
	border-radius: 6px;
	
	-webkit-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.5);
	        box-shadow: 0 3px 7px rgba(0, 0, 0, 0.5);
}

div.DTTT_print_info h6 {
	font-weight: normal;
	font-size: 28px;
	line-height: 28px;
	margin: 1em;
}

div.DTTT_print_info p {
	font-size: 14px;
	line-height: 20px;
}

div.dataTables_processing {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 100%;
    height: 40px;
    margin-left: -50%;
    margin-top: -25px;
    padding-top: 20px;
    text-align: center;
    font-size: 1.2em;
    background-color: white;
    background: -webkit-gradient(linear, left top, right top, color-stop(0%, rgba(255,255,255,0)), color-stop(25%, rgba(255,255,255,0.9)), color-stop(75%, rgba(255,255,255,0.9)), color-stop(100%, rgba(255,255,255,0)));
    background: -webkit-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,0.9) 25%, rgba(255,255,255,0.9) 75%, rgba(255,255,255,0) 100%);
    background: -moz-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,0.9) 25%, rgba(255,255,255,0.9) 75%, rgba(255,255,255,0) 100%);
    background: -ms-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,0.9) 25%, rgba(255,255,255,0.9) 75%, rgba(255,255,255,0) 100%);
    background: -o-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,0.9) 25%, rgba(255,255,255,0.9) 75%, rgba(255,255,255,0) 100%);
    background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,0.9) 25%, rgba(255,255,255,0.9) 75%, rgba(255,255,255,0) 100%);
}



/*
 * FixedColumns styles
 */
div.DTFC_LeftHeadWrapper table,
div.DTFC_LeftFootWrapper table,
div.DTFC_RightHeadWrapper table,
div.DTFC_RightFootWrapper table,
table.DTFC_Cloned tr.even {
    background-color: white;
    margin-bottom: 0;
}
 
div.DTFC_RightHeadWrapper table ,
div.DTFC_LeftHeadWrapper table {
    margin-bottom: 0 !important;
    border-top-right-radius: 0 !important;
    border-bottom-left-radius: 0 !important;
    border-bottom-right-radius: 0 !important;
}
 
div.DTFC_RightHeadWrapper table thead tr:last-child th:first-child,
div.DTFC_RightHeadWrapper table thead tr:last-child td:first-child,
div.DTFC_LeftHeadWrapper table thead tr:last-child th:first-child,
div.DTFC_LeftHeadWrapper table thead tr:last-child td:first-child {
    border-bottom-left-radius: 0 !important;
    border-bottom-right-radius: 0 !important;
}
 
div.DTFC_RightBodyWrapper table,
div.DTFC_LeftBodyWrapper table {
    border-top: none;
    margin: 0 !important;
}
 
div.DTFC_RightBodyWrapper tbody tr:first-child th,
div.DTFC_RightBodyWrapper tbody tr:first-child td,
div.DTFC_LeftBodyWrapper tbody tr:first-child th,
div.DTFC_LeftBodyWrapper tbody tr:first-child td {
    border-top: none;
}
 
div.DTFC_RightFootWrapper table,
div.DTFC_LeftFootWrapper table {
    border-top: none;
}


/*
 * FixedHeader styles
 */
div.FixedHeader_Cloned table {
	margin: 0 !important
}

</style>
<?php 
if(isset($_SESSION['USERNAME']) and $_SESSION['USERNAME'] != '' and isset($_SESSION['LEVEL']) and $_SESSION['LEVEL'] != ''){
	
	include("misc/chart.php"); 
	
	
?>


  <script>
	function setdatatable(){
		$('#zreport').dataTable();	
	}
	$(document).ready(function(){
		$('#submit_report').click(function(){ // Create `click` event function for login
			// Get All data property
		var user = $('#user');	
		var year = $('#year');	
		var doc_no = $('#doc_no');	
		var UrlToSubmit = 'action=submit_report&user='+user.val()+'&doc_no='+doc_no.val();
	
		
			$.ajax({ // Send the credential values to another checker.php using Ajax in POST menthod 
				type : 'POST',
				data : UrlToSubmit,
				url  : 'admin/submit_report.php',
				success: function(responseText){ // Get the result and asign to each cases
						
					$("#result_report").html(responseText);	
					setdatatable();
				}
			});
			
		});
			
	});  
	
  </script>
  
<div class="panel panel-default" style="">
  <div class="panel-heading">
    <h3 class="panel-title"><span class="glyphicon glyphicon-th">&nbsp;</span>General Report </h3>
  </div>
  <div class="panel-body"> 
  <form>
 
        <div class="row"> 
          <!--  nama_projek -->
          <div class="col-lg-5">
            <div class="input-group"> <span class="input-group-addon">User &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
              <input type="text" class="form-control" placeholder="User" id="user">
            </div>
            <!-- /input-group --> 
          </div>
          <!-- /.col-lg-6 --> 
        </div>
        <!-- /.row -->
        <div class="row"> 
          <!--  nama_projek -->
          <div class="col-lg-5">
            <div class="input-group"> <span class="input-group-addon">Doc Number &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
              <input type="text" class="form-control" placeholder="Doc Number" id="doc_no">
            </div>
            <!-- /input-group --> 
          </div>
          <!-- /.col-lg-6 --> 
        </div>
        <!-- /.row -->
        <button type="button" class="btn btn-default" id="submit_report" style="margin-left:50%;">Submit</button>
  </form>
  <br>
  <br>

<div id="result_report"></div>
  </div>
</div>  

    
<?php   
}
?>