<?php
	include 'connect.php';

	function getCat()
	{
		$query = "SELECT * FROM Category";
		$result = mysqli_query($dbc, $query);
		return $result;
	}

	function getSubCat()
	{
		$query = "SELECT * FROM SubCategory";
		$result = mysqli_query($dbc, $query);
		return $result;
	}

	function getSubSubCat()
	{
		$query = "SELECT * FROM SubSubCategory";
		$result = mysqli_query($dbc, $query);
		return $result;
	}

	function getItem()
	{
		$query = "SELECT * FROM Item";
		$result = mysqli_query($dbc, $query);
		return $result;
	}

	function getImage()
	{
		$query = "SELECT * FROM Image";
		$result = mysqli_query($dbc, $query);
		return $result;
	}
?>