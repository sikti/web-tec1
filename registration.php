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
	echo "Recorded!!!";
}
else
{
	echo "Not Recorded !!!";
}
}

?>