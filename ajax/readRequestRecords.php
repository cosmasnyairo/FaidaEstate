<?php
	// include Database connection file 
	include("db_connection.php");
	// Design initial table header 
	$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>No.</th>
							<th>Name</th>
							<th>Email Address</th>
							<th>Message</th>
							<th>Contact</th>
							<th>Delete</th>
						</tr>';
	$query = "SELECT * FROM admin_requests";
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
				<td>'.$row['name'].'</td>
				<td>'.$row['email'].'</td>
				<td>'.$row['message'].'</td>
				
				<td>
					<button onclick="GetUserDetails('.$row['requestID'].')" class="btn btn-success">Contact</button>
				</td>
				<td>
					<button onclick="deleteRequest('.$row['requestID'].')" class="btn btn-danger">Delete</button>
				</td>
    		</tr>';
    		$number++;
    	}
    }
    else
    {
    	// records now found 
    	$data .= '<tr><td colspan="6">Records not found!</td></tr>';
    }
    $data .= '</table>';
    echo $data;
?>