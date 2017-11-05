<?php
	require_once "/stack.class.php";
	$stack = new Stack();
	$stack->create(3);
	$stack->push(1);
	$stack->push(2);
	$stack->push(3);
	$stack->pop();
	$stack->pop();
	$stack->push(6);
	$stack->push(2);
	$stack->push(3);
	$stack->push(1);
	$stack->len();
	$stack->pop();

	$stack->traverse();