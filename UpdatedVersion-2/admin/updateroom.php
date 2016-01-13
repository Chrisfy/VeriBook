<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<style type="text/css">
	#contenar{
		height: 100%;
		width: 100%;
		
	}
	#r{
		margin-top: 5%;
		margin-bottom: 5%;
		margin-right: 5%;
		margin-left: 5%;
		float: center;
		
		
	}

	</style>
	

     
</head>

<body>



<?php
include('../include/db_con.php');
$roomid=$_POST['roomid'];
?>


<form action="updateroom.php" method="POST">
<h2 align="center" id="h"><u><i>Update Room</i></u></h2>

<table>
	
	<tr>
		<td>RoomID:<input name="roomid" type="text"</td>
	</tr>
	




</table>












</body>
</html>