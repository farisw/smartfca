
<!DOCTYPE html>
<html>
	<head>
		<title>jQuery Number Format Plugin</title>
	</head>
	<body>
		
		<div id="container">
		
			<div class="wrap">
				<label for="number">How much would you like to pay?</label><br />
				<input type="text" id="price" name="number" />
				<button id="get_number">Get the Number</button>
			</div>
			
			<div id="number_container">
				<label for="the_number">The number is:</label>
				<pre id="the_number"></pre>
			</div>
		</div>
	</body>
		<script type="text/javascript" src="jquery191.min.js"></script>
		<script type="text/javascript" src="jquery.number.js"></script>
						
		<script type="text/javascript">
			
			$(function(){
				// Set up the number formatting.
				$('#price').number( true, 0 );
				
				
				// Get the value of the number for the demo.
				$('#get_number').on('click',function(){
					
					var val = $('#price').val();
					
//					$('#number_container').slideDown('fast');
					$('#the_number').text( val !== '' ? val : '(empty)' );
				});
			});
		</script> 
</html>