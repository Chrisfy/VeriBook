<?php
$con=mysql_connect("localhost","root","root");
mysql_select_db("3649",$con) or die(mysql_error($con));
error_reporting(E_ALL ^ E_NOTICE);
?>