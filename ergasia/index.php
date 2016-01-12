<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<style type="text/css">
	#contenair{
		height: 100%;
		width: 100%;
		
	}
	#r{
		margin-top: 5%;
		margin-bottom: 50px;
		margin-right: 20px;
		float: right;
		height:95%;
		width:35%;
		background-color: #b7bcbd;
		
	}
	#l
	{
		margin-top: 5%;
		margin-bottom: 50px;
		margin-left:20px;
		float: left;
		
		width: 60%;
		background-color: #b7bcbd;
	
	}
	</style>
</head>
<body>

</div>
	<div id="l" align="left">
	
	<?php 
	include('include/db_con.php');
	session_start();
		if (isset($_POST['username'],$_POST['password']))
			   {
                $username=$_POST['username'];
                $password=$_POST['password'];
  
                   if (empty($username) || empty($password))
                   {
                      $error = 'Hey All fields are required!!';
                    }
                     
					 else {  
					 $login="select * from ".'users'." where user_name='".$username."' and user_password='".$password."'";
					 $result=mysql_query($login);
					 //print_r($result);
					 //print_r($result);
           header('Location: registration.php');
				
					
					if(mysql_fetch_array($result)){
				 $_SESSION['logged_in']='true';
				 $_SESSION['username']=$username;
         header('Location: registration.php');
					 
					 exit;
					 } else {
					 $error='Incorrect details !!';
					 }
					       }
		}
  ?>
	<form action="index.php" method="POST">
	<h2 align="center" id="h"><u><i>Login Here</i></u></h2>
        <table align="center" id="t">
		<tr> <?php  if (isset($error)) {?>
           <small style="color:#aa0000;"><?php echo $error; ?>
            <br /> <br />
           <?php } ?> </tr>
          <tr>
            <td width="113">Username:</td>
            <td width="215">
              <input name="username" type="text"  size="40" /></td>
          </tr>
          <tr>
            <td>Password:</td>
            <td>
              <input name="password" type="password"  size="40" /></td>
          </tr>
          <tr>
            <td colspan="2" align="center">
			<input type="submit" name="sub" value="Login" /></td>
            </tr>
			
       </table>
		</form>
		
		
	</div>
</div>
</body>
</html>