<?php include 'config.php'; 

$q1="SELECT * FROM `users`ORDER BY userid ";//assending order

$q2="SELECT * FROM `users`ORDER BY userid DESC";//desending order
$result ="";

if(isset($_POST['ByID']))
{
	 $result = $con->query("SELECT * FROM `users`ORDER BY userid ");
}
else if(isset($_POST['ByName']))
{
	 $result = $con->query("SELECT * FROM `users`ORDER BY name DESC");
}
else
{
 $result = $con->query("SELECT * FROM users");	
}






 
?>
<html>
<head></head>
<title> User Management System</title>
<body>
    <div >
<h1> User Management System</h1>
<br>
<a href="UserConsole.php">Home</a>
<form method="POST" action="UserConsole.php">
	<br>
	<br>
	
	<button type="submit" name="ByID">Sort By user ID</button>
	
	<button type="submit" name="ByName">Sort By user Name</button>
	</form>
	<br>
	<?php if($result->num_rows > 0){ 
         while($row = $result->fetch_assoc())
		 { ?> 
		<br>
		<table border=1>
		<tr>
		<td>User ID</td><td> <?php echo $row['userid']?></td>
		</tr>			
		<tr>
		<td>Name</td><td> <?php echo $row['name']?> </td>		
		</tr>
		<tr>
		<td>Password</td><td><?php echo $row['password']?> </td>
		</tr>
		<tr>
		<td>Email</td><td><?php echo $row['email']?> </td>
		</tr>
		<tr>
		<td>Mobile</td><td><?php echo $row['mobile']?> </td>
		</tr>
		<tr>
		<td>Address</td><td> <?php echo $row['address']?> </td>
		</tr>
		<tr>
		<td> <?php echo '<a href="editUsers.php?id=' . $row['userid'] . '">Edit Details</a>';?></td>
		<td> <?php echo '<a href="deleteUsers.php?id=' . $row['userid'] . '">Delete Details</a>';?> </td>
		</tr>
	  </table>
	   </div>

	   <?php
	   } ?> 
    
<?php }else{ ?> 
    <p class="status error">User not found...</p> 
<?php } ?>
</body>
</html>
   