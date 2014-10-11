<?php
	$dbc = mysqli_connect(localhost, "root", "cfg2014!", "test");

	if (mysqli_connect_errno($dbc))
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>