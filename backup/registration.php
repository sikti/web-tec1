<?php include('dbcon.php'); ?>
<?php
$name ='';
$email  = '';
$address ='';
$username = '';
$password  ='';
$cpassword = '';
$gender ='';
$dob='';
$emailErr='';
$nameErr='';
$rcdMsg='Recorded!!!';
$invaliMsg='Invalid';



//Validation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $nameErr = "username is required";
  } else {
    $username = test_input($_POST["username"]);
    // check if username only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
} 

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if(isset($_POST['btn_sub'])){
$name = $_POST['name'];
$email  = $_POST['email'];
$address = $_POST['address'];
$username = $_POST['username'];
$password  = $_POST['password'];
$cpassword = $_POST['cpassword'];
$gender = $_POST['gender'];
$dob=$_POST['year']."/".$_POST['month']."/".$_POST['day'];

//$conn = new mysqli("localhost","root","","webtech");
$sql = "INSERT INTO `registration` (`name`, `email`, `address`,`username`,`password`, `gender`, `dob`) VALUES ('$name', '$email','$address', '$username', '$password','$gender', '$dob')";
if ($con->query($sql)=== true)
{
	

	 header("location: index.php");
}
else
{
	echo $invaliMsg;
}
}

?>



<!DOCTYPE html>
<html>
<body>
	<head>
		<script>
		function CheckLength(password) {

				var password = document.getElementById(password).value;

				if (password.length < 4)

					alert('should have miniumum 4 chars');

			}
		</script>
	</head>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<p><span class="error">* required field.</span></p>
    <table width="1300" border=1 cellspacing=0 cellpadding=0 align="center">
        <tr>
            
            <td height="100" colspan="3">
					<a href="index.html"><big><h1>LETS GO</h1></big></a>                   
                

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
						 <fieldset>
							<legend> REGISTRATION </legend>
							<strong>Name:</strong>
								<input type="text" name="name">
							<br/>
							<br/>
							<strong>Email:</strong>
								<input type="text" name="email" required>
								<span class="error">* <?php echo $emailErr;?></span>
							<strong>Address:</strong>
								<input type="text" name="address">	
							<br/>
							<br/>
							<strong>User Name:</strong>
								<input type="text" name="username">	
								<span class="error">* <?php echo $nameErr;?></span>
							<br/>
							<br/>
							<strong>Password:</strong>
								<input type="password" name="password" id="password"  >	
							<br/>
							<br/>
							<strong>Confirm Password:</strong>
								<input type="text" name="cpassword">	
							<br/>
							<br/>
							<fieldset>
							<legend> Gender </legend>
										<input type="radio" name="gender" value="male" required> Male
										<input type="radio" name="gender" value="female"> Female
										<input type="radio" name="gender" value="other"> Other
							</fieldset>
							<br/>
							<br/>
							<fieldset>
							<legend> Date of Birth </legend>
										<input type="text" name="day">/ 
										<input type="text" name="month">/
										<input type="text" name="year">(dd/mm/yy)
							</fieldset>
							<br/>
							<input type="submit"name="btn_sub" onclick="CheckLength('password') ">
							<input type="reset" name="Reset">
						</fieldset>
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
