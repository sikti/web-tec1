<?php
include("check_session.php");
include("connection.php");
error_reporting(0);
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$type=$_POST['type'};
$details=$_POST['details'];
$location = $_POST['location'];
$price=$_POST['price'];
$tags=$_POST['tags'];
//picture coding
$picture_name=$_FILES['picture']['name'];
$picture_type=$_FILES['picture']['type'];
$picture_tmp_name=$_FILES['picture']['tmp_name'];
$picture_size=$_FILES['picture']['size'];

if($picture_type=="image/jpeg" || $picture_type=="image/jpg" || $picture_type=="image/png" || $picture_type=="image/gif")
{
	if($picture_size<=50000000)
	{
		$pic_name=time()."_".$picture_name;
		move_uploaded_file($picture_tmp_name,"../img".$pic_name);
		
mysqli_query($connection,"insert into event (name, type, details,location,image,  price, tags) values ('$name','$type','$details','$location','$pic_name','$price','$tags')") or die ("query incorrect");

 header("location: sumit_form.php?success=1");
}else
{}
}else
{}
mysqli_close($connection);
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
                <a href="edit_user.php"> <h4>Edit users</h4></a><br/>
                <a href="manage_user.php"> <h4>Manage User</h4></a><br/>
                <a href="movie_list.php"> <h4>Movie list</h4></a><br/>
                <a href="food_eventlist.php"> <h4>Food Event List</h4></a><br/>
                <a href="education_eventlist.php"> <h4>Education Event List</h4></a><br/>
                <a href="sports_event.php"> <h4>Sports Event List</h4></a><br/>				
			</td>
			<td >

			<h1><span class="glyphicon glyphicon-tag"></span> Product / Add Product  </h1></div><br>
				<div class="panel-body" style="background-color:#E6EEEE;">
				<div class="col-lg-7">
				<div class="well">
				<form action="add_product.php" method="post" name="form" enctype="multipart/form-data">
				<p>Name</p>
				<input class="input-lg thumbnail form-control" type="text" name="name" id="name" autofocus style="width:100%" placeholder="Name" required>
				<p>Type</p>
					<textarea class="thumbnail form-control" name="Type" id="Type" style="width:100%; height:100px" placeholder="Type" required></textarea>
				<p>details</p>
					<textarea class="thumbnail form-control" name="details" id="details" style="width:100%; height:100px" placeholder="details" required></textarea>
				
				<p>Add Image</p>
					<div style="background-color:#CCC">
				<input type="file" style="width:100%" name="picture" class="btn thumbnail" id="picture" >
				</div>
				</div>
				<p>Price</p>
				<div class="input-group">
				<div class="input-group-addon">Tk</div>
				<input type="text" class="form-control" name="price" id="price"  placeholder="0.00" required>
				</div><br>
				</div>  
				<p>location</p>
				<input type="text" name="location" id="location" class="form-control" placeholder="location">
				<br>
				<p>tags</p>
				<input type="text" name="tags" id="tags" class="form-control" placeholder="event tags">
				</>          


				<div align="center">
				<button type="submit" name="submit" id="submit" class="btn btn-default" style="width:100px; height:60px"> Cancel</button>
				<button type="submit" name="submit" id="submit" class="btn btn-success" style="width:150px; height:60px""> Add Product</button>
				</div>
			</form
		
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