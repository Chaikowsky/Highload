<?php
$time1 = time();
require_once('log.php');

if(empty($_SERVER['DOCUMENT_ROOT'])){
	$_SERVER['DOCUMENT_ROOT'] = '/var/www/mysite.local';
}
class test{
	public $prop = 123;
}

$s = new test();
$time2 = time();
Logger::_log($time2 - $time1, 'var_s');