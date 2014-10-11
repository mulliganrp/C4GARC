<?php
	include 'connect.php';

	function getCat($dbc)
	{
		$query = "SELECT * FROM Category";
		$result = mysqli_query($dbc, $query);

		return $result;
	}

	function getSubCat($dbc)
	{
		$query = "SELECT * FROM SubCategory";
		$result = mysqli_query($dbc, $query);

		return $result;
	}
	function getSubSubCat($dbc)
	{
		$query = "SELECT * FROM SubSubCategory";
		$result = mysqli_query($dbc, $query);
		return $result;
	}

	function getItem($dbc)
	{
		$query = "SELECT * FROM Item";
		$result = mysqli_query($dbc, $query);
		return $result;
	}

	function getImage($dbc)
	{
		$query = "SELECT * FROM Image";
		$result = mysqli_query($dbc, $query);
		return $result;
	}
?>