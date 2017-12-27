<?php session_start(); ?>
<?php include('dbcon.php'); ?>



<?php
	if (isset($_POST['login']))
		{
			$username = mysqli_real_escape_string($con, $_POST['username']);
			$password = mysqli_real_escape_string($con, $_POST['password']);
			
			$query 		= mysqli_query($con, "SELECT * FROM registration WHERE  password='$password' and username='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{			
					$_SESSION['userID']=$row['userID'];
					header('location:ahomepage.html'); 
					
				}
			else
				{
					echo 'Invalid username and Password Combination';
				}
		}
  ?>
  
  <!DOCTYPE html>
<html>
<body>
<form method="post" action="index.php">
    <table width="1300" border=1 cellspacing=0 cellpadding=0 align="center">
        <tr>
            
            <td height="100" colspan="3">
                <big><h1>LETS GO</h1></big>
                

            </td>
        </tr>
        <br/>
        <tr height="400">
			
                                            
            <td>
                <big>Welcome to Event information center</big><br/>

			</td>
			<td>
				<p align="left">
                    <big><a href="index.html"> Login /</a></big>
                    <big><a href="registration.html"> Registration </a></big> 
					<form>
						<fieldset>
							<legend> LOGIN </legend>
							<strong>User Name:</strong>
								<input type="text" name="username">
							<br/>
							<br/>
							<strong>Password:</strong>
								<input type="password" name="password">
							<br/>
							<br/>
								<input type="checkbox" name="remember"> Remember me
							<br/>
							<br/>
								<input type="submit" name="login"> &nbsp<big><a href="forgotpassword.html">Forgot Password?</a></big>      
						</fieldset>
					</form>
                </p> 
			</td>
			
        </tr>        
        <tr>
            <td  height="50" align=center colspan="3">
				<big><a href="policy.html"> Privace Policy </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</big>
				<big><a href="aboutus.html"> About Us </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</big>
				<big><a href="terms.html"> Terms and Condition </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</big>
				<big><a href="paymentmethod.html"> Payment Method </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</big>
			</td>
        </tr>
    </table>
</form>
</body>
</html>
