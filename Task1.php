<?php 

	$term = $_REQUEST['name'];
	$con = mysqli_connect('localhost', 'root', '', 'webtech');
	$sql = "select * from users where username like '%{$term}%'";
	$result = mysqli_query($con, $sql);
	

	echo $sql;

	if($result != null){
		$data = "<table border=1>
		<tr>
			<td>ID</td>
			<td>Username</td>
			<td>Email</td>
			<td>Name</td>
			<td>Company Name</td>
			<td>Contact Number</td>
		</tr>";

		while($row = mysqli_fetch_assoc($result)){
			$data .= "<tr>
						<td>{$row['id']}</td>
						<td>{$row['username']}</td>
						<td>{$row['email']}</td>
						<td>{$row['name']}</td>
						<td>{$row['company name']}</td>
						<td>{$row['contact number']}</td>
					 <tr/>";
		}

		$data .= "</table>";
		echo $data;
	}else{
		echo $sql;
	}
