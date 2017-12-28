<?php include('dbcon.php'); ?>
<?php


if(isset($_POST['btn_sub'])){
$sname = $_POST['sname'];
$stype  = $_POST['stype'];
$location = $_POST['location'];
$details = $_POST['details'];
$price  = $_POST['price'];
$date  = $_POST['date'];




$sql = "INSERT INTO `sports` (`sname`, `stype`, `location`, `details`, `price`, `date`) VALUES ('$sname', '$stype', '$location', '$details', '$price', '$date')";
if ($con->query($sql)=== true)
{
	header("location: index.php");
}
else
{
	echo "Not Recorded !!!";
}
}

?>
