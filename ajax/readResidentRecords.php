<?php
	// include Database connection file 
	include("db_connection.php");

	// Design initial table header 
	$data = '<table class="table table-bordered table-striped">
						<tr> 
						<th> All Residents </th> 
						</tr>
						<tr>
							<th>No.</th>
							<th>Name</th>
							<th>House Number</th>
							<th>Email Address</th>
							<th>Phone Number</th>
							
						</tr>';

	$query = "SELECT * FROM users WHERE position != 'Not Verified'";

	if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }

    // if query results contains rows then featch those rows 
    if(mysqli_num_rows($result) > 0)
    {
    	$number = 1;
    	while($row = mysqli_fetch_assoc($result))
    	{
    		$data .= '<tr>
				<td>'.$number.'</td>
				<td>'.$row['username'].'</td>
				<td>'.$row['houseNumber'].'</td>
				<td>'.$row['email'].'</td>
				<td>'.$row['phoneNo'].'</td>
    		</tr>';
    		$number++;
    	}
    }
    else
    {
    	// records now found 
    	$data .= '<tr><td colspan="6">No new records found!</td></tr>';
    }

    $data .= '</table>';

    echo $data;
?>