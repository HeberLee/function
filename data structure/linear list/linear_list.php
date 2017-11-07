<?php
	require_once "linear_list.class.php";

	$linear_list = new Linear_list();
	$linear_list->create(6);
	$linear_list->add(0,1);
	$linear_list->add(1,7);
	$linear_list->add(2,6);
	$linear_list->traverse();
		$linear_list->traverse();
	$linear_list->len();
	$linear_list->get();

	$linear_list->traverse();
	$linear_list->add(0,5);
	$linear_list->add(1,6);
	$linear_list->add(2,7);
	$linear_list->traverse();