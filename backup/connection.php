<?php 
$connection=mysqli_connect("localhost","root","","finalproject");
/*check connection*/
if(mysqli_connect_errno())
{
echo"Connection Fail". mysqli_connect_error();
}
?>
