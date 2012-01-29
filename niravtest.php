<?php

$con = mysql_connect("localhost","root","bitnami");

if (!$con){
	die('Could not connect: ' . mysql_error());
}else{
	echo 'woo hoo!';
}

?>