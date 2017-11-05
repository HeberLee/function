<?php
	require_once "/binary_tree.class.php";
	$binary_tree = new Binary_tree();
	$data = array(1,2,3,4,5,6,7);

	$binary_tree->create(6);
	$binary_tree->add($data);

	$binary_tree->pre_traverse();
	echo "<br>";
	$binary_tree->mid_traverse();
	echo "<br>";
	$binary_tree->las_traverse();
	echo "<br>";