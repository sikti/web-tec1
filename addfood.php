<?php include('dbcon.php'); ?>
<?php


if(isset($_POST['btn_sub'])){
$fname = $_POST['fname'];
$ftype  = $_POST['ftype'];
$location = $_POST['location'];
$details = $_POST['details'];
$price  = $_POST['price'];



//$conn = new mysqli("localhost","root","","webtech");
$sql = "INSERT INTO `food` (`fname`, `ftype`, `location`, `details`, `price`) VALUES ('$fname', '$	ftype', '$location', '$details', '$price')";
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