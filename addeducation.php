<?php include('dbcon.php'); ?>
<?php


if(isset($_POST['btn_sub'])){
$name = $_POST['name'];
$edutype  = $_POST['edutype'];
$location = $_POST['location'];
$details = $_POST['details'];
$price  = $_POST['price'];



$sql = "INSERT INTO `education` (`name`, `edutype`, `location`, `details`, `price`) VALUES ('$name', '$edutype', '$location', '$details', '$price')";
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
