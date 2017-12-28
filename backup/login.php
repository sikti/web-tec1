
<?php
session_start();
//session_regenerate_id(true);
session_start();
include("connection.php");
$check=0;



if(isset($_POST['login']))
{
$username = $_POST['user_name'];
$password = $_POST['password'];

$query=mysqli_query($connection,"select user_id from admin_login where user_name='$username' and user_password='$password'")or die ("query 1 incorrect.......");

list($user_id)=mysqli_fetch_array($query);

$_SESSION['user_id']=$user_id;
header("location: ahomepage.php");

$check=1;

if($check==0)
{
$check=2;
}

mysqli_close($connection);
}
?>
  
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../layout/css/bootstrap.min.css">
<title>Untitled Document</title>
</head>
<body background="color.jpg" >
<form method="post" ">
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
                    <big><a href="home.php">user Login /</a></big>
                    <big><a href="login.php"> Admin Login /</a></big>
                    <big><a href="registration.html"> Registration </a></big> 
					<formaction="login.php" method="post" >
						<fieldset>
							<legend> LOGIN </legend>
							<strong>User Name:</strong>
								<input type="text" name="username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>">
							<br/>
							<br/>
							<strong>Password:</strong>
								<input type="password" name="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
							<br/>
							<br/>
								<input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["username"])) { ?> checked <?php } ?> > Remember me
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
