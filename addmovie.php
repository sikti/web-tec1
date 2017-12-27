<?php include('dbcon.php'); ?>
<?php


if(isset($_POST['btn_sub'])){
$moviename = $_POST['moviename'];
$movietype  = $_POST['movietype'];
$location = $_POST['location'];
$details = $_POST['details'];
$ticketprice  = $_POST['ticketprice'];



//$conn = new mysqli("localhost","root","","webtech");
$sql = "INSERT INTO `movie` (`moviename`, `movietype`, `location`, `details`, `ticketprice`) VALUES ('$moviename', '$	movietype', '$location', '$details', '$	ticketprice')";
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