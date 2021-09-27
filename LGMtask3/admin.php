<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
<center>
    <h1>Please Enter your Username and Password</h1>
       <form action="" method="post">
         <div class="con">
            Username: <input type="text"  name="username" placeholder="Enter username  here"><br><br>
            Password: <input type="password"  name="password" placeholder="Enter password  here"><br><br>
         </div>
           <input class="btn" type="submit" name="sub" value="Submit">
</center>

<?php
session_start();
$connection = mysqli_connect('localhost', 'root',"" );
$db = mysqli_select_db($connection, 'stdman');
if(isset($_POST['sub'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = " select * from  admin where username='$username' and password='$password' ";
	$query = mysqli_query($connection,$sql);
	$row = mysqli_num_rows($query);
		if($row == 1)
    {
			header('location:content.php');
		}else
    {
			header('location:admin.php');
		}

}

?>
</body>
</html>