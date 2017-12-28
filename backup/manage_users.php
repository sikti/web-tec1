<?php
include("session.php");
include("connection.php");
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$user_id=$_GET['user_id'];

/*this is delet quer*/
mysqli_query($connection,"delete from login where user_id='$user_id'")or die("query is incorrect...");
}
?>
<!DOCTYPE html>
<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="bootstrap.min.css" rel="stylesheet">
<link href="k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
</head>
<body background="1.jpg">
<form>
    <table width="1300" border=1 cellspacing=0 cellpadding=0 align="center">
        <tr>
            <td height="100" colspan="3">
					<a href="index.html"><big><h1>LETS GO</h1></big></a>                   
					<p align="right">
					<input type ="text" name= "text" class="search" placeholder="search here" width="130px"/>
					<input type="submit" name= "submit" class="submit" value="Search"/>
                </p>
            </td>
        </tr>
        <br/>       
        <tr >                               
            <td height="50"colspan="3">
                 <big><a href="ahomepage.html"> Home </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</big>
                 <big><a href=" movie.html "> Movie </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</big>
                 <big><a href="education.html"> Education</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</big>
                 <big><a href="food.html"> Food </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</big>
                 <big><a href="sports.html"> Sports </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</big>
				 <big><a href="logout.php"> Logout </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</big>
			</td>
        </tr>
        <tr height="400">
            <td>
                <a href="ahomepage.php"> <h4>Dashboard</h4></a><br/>
                <a href="add_event.php"> <h4>Add Event</h4></a><br/>
                <a href="orders.php"> <h4>Orders</h4></a><br/>
                <a href="manage_user.php"> <h4>Manage User</h4></a><br/>
                <a href="movie_list.php"> <h4>Movie list</h4></a><br/>
                <a href="food_eventlist.php"> <h4>Food Event List</h4></a><br/>
                <a href="education_eventlist.php"> <h4>Education Event List</h4></a><br/>
                <a href="sports_event.php"> <h4>Sports Event List</h4></a><br/>				
			</td>
			<td >
				<h1>Manage User </h1></div><br>

<div style="overflow-x:scroll;">
<table class="table table-bordered table-hover table-striped" style="font-size:18px">
	<tr>
			    <th>User Name</th>
                <th>User Password</th>
	<th><a href="add_user.php">Add New</a></th></tr>	
<?php 
$result=mysqli_query($connection,"select user_id, user_name, user_password from login")or die ("query 2 incorrect.......");

while(list($user_id,$user_name,$user_password)=
mysqli_fetch_array($result))
{
echo "<tr><td>$user_name</td><td>$user_password</td>";

echo"<td>
<a href='manage_users.php?user_id=$user_id&action=delete'>Delete</a>
</td></tr>";
}
mysqli_close($connection);
?>
</table>
				
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
<script type="text/javascript">
$(function () {
  	$('.navbar-toggle-sidebar').click(function () {
  		$('.navbar-nav').toggleClass('slide-in');
  		$('.side-body').toggleClass('body-slide-in');
  		$('#search').removeClass('in').addClass('collapse').slideUp(200);
  	});

  	$('#search-trigger').click(function () {
  		$('.navbar-nav').removeClass('slide-in');
  		$('.side-body').removeClass('body-slide-in');
  		$('.search-input').focus();
  	});
  });
</script>
</body>
</html>