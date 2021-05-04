<?php
	// https://www.youtube.com/watch?v=9p9siksrSoU&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=4

	/**
	* 3 types of arrays
	* 
	* indexed
	* associative
	* multi-dimensional
	*/

	// indexed (easier and probably the most common)

	$people = array("Kevin", "Jeremy", "Sara");
	$ids = array(23, 55, 12);

	// this third way of creating an array is the same; does the same thing as the other ones above
	$cars = ["Honda", "Toyota", "Ford"];

	// adding an item to the array
	$cars[3] = "Chevy";

	// adding an item without knowing what index it's going to be
	$cars[] = "BMW";

	echo $people[1];
	echo $ids[2];
	echo $cars[4];
	echo count($cars);

	/**
	 * print_r() is basically an "echo" for a whole array
	*/
	print_r($cars);

	/**
	 * Also useful for debugging
	*/
	var_dump($cars);

	// ASSOCIATIVE ARRAYS

	$people = array("Brad" => 35, "Jose" => 32, "William" => 37);

	echo $people["Brad"];

	// MULTIDIMENSIONAL ARRAYS (array within an array)

	$cars = array(
		array("Honda", 20, 10),
		array("Toyota", 20, 10),
		array("Ford", 20, 10)
	);

	echo $cars[1][0];
?>