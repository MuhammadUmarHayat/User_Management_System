<?php include 'config.php';?>
<?php 
if(isset($_POST['done']))
{
if(!empty($_POST)) 
{
    if(!empty($_POST['userid'])&& !empty($_POST['password']))
	{
          $userid = $_POST['userid'];
            $name = $_POST['name'];
			 $password = $_POST['password'];
			          $email = $_POST['email'];
           
			          $mobile = $_POST['mobile'];
            $address = $_POST['address'];
			$q1="INSERT INTO `users`(`userid`, `name`, `password`, `email`, `mobile`, `address`) VALUES ('$userid', '$name', '$password', '$email', '$mobile', '$address')";
			$query = mysqli_query($con,$q1);
  echo 'User is added successfully';
		
	}
	else
	{
		echo "Please enter user name and password";
		
	}
}
else{
	echo "Please fill the form first";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
   <link rel="stylesheet" href="styles.css">
    <title>PHP CRUD Operation</title>
</head>
<body>
<h1> Add Users </h1>
<a href="index.php">Back</a>
<br>
				<br>
<div >

                <form method="POST" action="Registration.php">
				<table border=1>
			
			<tr><td>Enter User ID: </td><td><input type="text" name="userid"></td></tr>	
				
				
		<tr><td>Enter  User Name:</td><td><input type="text" name="name" ></td></tr>			
  

	<tr><td>Enter  Password:</td><td><input type="password" name="password" ></td></tr>				
	 			
	<tr><td>Enter  Email:</td><td><input type="text" name="email" ></td></tr>			
 
				<tr><td>Enter  Mobile Number:</td><td><input type="text" name="mobile" ></td></tr>	
				 
 <tr><td>Enter  address:</td><td><input type="text" name="address" ></td></tr>	
				 
 
                    <tr><td></td><td><button type="submit" name="done">Submit</button></td></tr>
					
					</table>
            
				
				</form>
            </div>
        </div>
    </main>
</div>
</body>
</html>