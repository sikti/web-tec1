<?php

include("session.php");
include("connection.php");  
$user_id=$_SESSION['user_id'];
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
                <a href="edit_user.php"> <h4>Edit users</h4></a><br/>
                <a href="manage_user.php"> <h4>Manage User</h4></a><br/>
                <a href="movie_list.php"> <h4>Movie list</h4></a><br/>
                <a href="food_eventlist.php"> <h4>Food Event List</h4></a><br/>
                <a href="education_eventlist.php"> <h4>Education Event List</h4></a><br/>
                <a href="sports_event.php"> <h4>Sports Event List</h4></a><br/>				
			</td>
			<td >
				<h1>Welcome Admin Panal
				</h1>
				<?php  //success message
					if(isset($_POST['success'])) {
					$success = $_POST["success"];
					echo "<h1 style='color:#0C0'>Your Product was added successfully &nbsp;&nbsp;  <span class='glyphicon glyphicon-ok'></h1></span>";
					}
				?>
				<?php
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
				?>
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