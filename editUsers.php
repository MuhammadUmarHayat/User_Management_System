<?php include 'config.php'; 
 
if(isset($_POST["submit"]))
{
//`userid`, `name`, `password`, `email`, `mobile`, `address`
	 $userid= $_GET['id'];
	
	$name= $_POST['name'];
		$password= $_POST['password'];
		 $email=$_POST['email'];
		 $mobile= $_POST['mobile'];
		 $address=$_POST['address'];
	
	$insert = $con->query("UPDATE `users` SET `name`='$name',`password`='$password',`email`='$email',`mobile`='$mobile',`address`='$address' where `userid`='$userid'"); 
             if($insert){ 
                $status = 'success'; 
                echo $statusMsg = "User is updates successfully."; 
            }else{ 
               echo $statusMsg = "Failed, please try again."; 
            }  

}
$userid= $_GET['id'];
//`userid`, `name`, `password`, `email`, `mobile`, `address`
$result = $con->query("SELECT * FROM users where userid='$userid'"); 
if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
	$userid=	$row['userid'];
$name= $row['name'];
		$password= $row['password'];
		 $email=$row['email'];
		 $mobile= $row['mobile'];
		 $address=$row['address'];
}
}
?>
<html>
<head></head>
<title> Edit User</title>
<body>
<h1>
Edit User
</h1>
<br>
<form action="editUsers.php?id=<?php echo $userid ?>" method="post">
<table>
<tr><td>
<a href="index.php">Home</a></td><td> </td></tr>
<tr><td>User ID</td><td><?php echo $userid ?></td></tr>
<tr><td>Name</td><td><input type="Text" name="name" value="<?php echo $name ?>"></td></tr>
<tr><td>password</td><td><input type="password" name="password" value="<?php echo $password ?>"></td></tr>
<tr><td>Email</td><td><input type="Text" name="email" value="<?php echo $email ?>"></td></tr>
<tr><td>Mobile Number</td><td><input type="Number" name="mobile" value="<?php echo $mobile ?>"></td></tr>
<tr><td>Address</td><td><input type="Text" name="address" value="<?php echo $address ?>"></td></tr>
<tr><td></td><td><input type="submit" name="submit" value="Save Changes"></td>
</tr>
</table>
</form>
</body>
</html>
   