<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Room Panel</title></head>

<body>
 
	  <h1>Room's Panel</h1>
	  Choose option from Below to take action!!!! 
	  Create new Booking click <a href="../bookit.php"> Here</a>
	  <p>Logout click <a href="../logout.php">Here</a></p>
	  <p>To Go Back Click <a href="" onclick="window.history.go(-1);return false;">Here</a></p>
	  
	  	  <?php
	  include('../include/db_con.php');
	  $sql="select * from roomtype ";
	  $row=mysql_query($sql) or die (mysql_error($con));
	 
	  ?><table border="1">
	  <?php
	  
	  while($data=mysql_fetch_array($row))
	  {
	  ?>
	  <tr>
	  <td><?php echo $data[room_id]; ?></td>
	  <td><?php echo $data[room_type];?></td>
	  <td><?php echo $data[room_seson]; ?></td>
	  <td><?php echo $data[room_price]; ?></td>
	  <td><?php echo $data[room_av]; ?></td>
	  <td><a href="update.php?id=<?php echo $data[id]; ?>">update</a></td>
	  <td><a href="delete.php?id=<?php echo $data[id]; ?>">delete</a></td>
	  </tr>
	  <?php
	  }
	  
	  
	  ?>
	  </table>
	  
	  </div>
</body>
</html>