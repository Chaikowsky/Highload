<?php
//ini_set('display_errors', 'On');
//error_reporting(E_ALL);

function deep_end(){
	$t = 123;
	echo "R";
	deep_end();
}

deep_end();