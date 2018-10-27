<?php 
?>
<!DOCTYPE html>
<html>
<head>	
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script type="text/javascript" src="http://services.iperfect.net/js/IP_generalLib.js"></script>

</head>
<body>
	<div class="table-responsive">
		<form method="post" action="excel.php" >

			 From: <input type="text" name="from" id="date1" alt="date" class="IP_calendar" title="d/m/Y">
			 To: <input type="text" name="to" id="date1" alt="date" class="IP_calendar" title="d/m/Y">

			 <br>
			<input type="submit" name="export_excel" class="btn btn-success" value="Generate minutes" style="margin-left: 80px;">

		</form>
	</div>
</body>
</html>