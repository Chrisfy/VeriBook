<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>

<style type="text/css">
	 contenair{
		height: 100%;
		width: 100%;
		
	}
	r{
		margin-top: 5%;
		margin-bottom: 50px;
		margin-right: 20px;
		float: right;
		height:95%;
		width:35%;
		background-color: #b7bcbd;
		
	}
	l
	{
		margin-top: 5%;
		margin-bottom: 50px;
		margin-left:20px;
		float: left;
		
		width: 60%;
		background-color: #b7bcbd;
	
	}
	.creds{
		
		font-size:2em;
		font-family:sans-serif;
		
	}
	</style> 
</head>
<body>


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
					 else if($username=="admin" && $password=="admin")
							{
								header('Location: admin/adminpanel.php');
							}
					
                     
					 else {  
					 $login="select * from ".'users'." where user_name='".$username."' and user_password='".$password."'";
					 $result=mysql_query($login);
					 print_r($result);
					 //print_r($result);
           header('Location: userpanel.php');
				
					
					if(mysql_fetch_array($result)){
				 $_SESSION['logged_in']='true';
				 $_SESSION['username']=$username;
         header('Location: userpanel.php');
					 
					 exit;
					 } else {
					 $error='Incorrect details !!';
					 }
						
						
					       }
		}
  ?>
	<form action="index.php" method="POST">
	<h2 align="center" class="creds" id="h"><u><i>Login Here</i></u></h2>
        <table align="center" id="t">
		<tr> <?php  if (isset($error)) {?>
           <small style="color:#aa0000;"><?php echo $error; ?>
            <br /> <br />
           <?php } ?> </tr>
          <tr>
            <td class="creds" width="113">Username:</td>
            <td width="215">
              <input name="username" type="text"  size="10" /></td>
          </tr>
          <tr>
            <td class="creds">Password:</td>
            <td>
              <input name="password" type="password"  size="10" /></td>
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