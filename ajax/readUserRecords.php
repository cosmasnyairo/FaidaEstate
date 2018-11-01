<?php
	// include Database connection file 
	include("db_connection.php");

	// Design initial table header 
	$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>No.</th>
							<th>Name</th>
							<th>Position</th>
							<th>House Number</th>
							<th>Email Address</th>
							<th>Phone Number</th>
							<th>Contact</th>
							<th>Update</th>
							<th>Delete</th>
						</tr>';

	$query = "SELECT * FROM users";

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
				<td>'.$row['Position'].'</td>
				<td>'.$row['houseNumber'].'</td>
				<td>'.$row['email'].'</td>
				<td>'.$row['phoneNo'].'</td>
				<td>
					<button onclick="GetUserDetail('.$row['user_id'].')" class="btn btn-info">Contact</button>
				</td>
				<td>
					<button onclick="GetUserDetails('.$row['user_id'].')" class="btn btn-warning">Update</button>
				</td>
				<td>
					<button onclick="DeleteUser('.$row['user_id'].')" class="btn btn-danger">Delete</button>
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