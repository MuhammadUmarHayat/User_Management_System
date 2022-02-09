<?php include 'config.php'; 
 $userid= $_GET['id'];
$statusMsg ="";

$insert = $con->query("Delete from `users` where `userid`='$userid'"); 
             if($insert){ 
               
                 $statusMsg = "User is deleted successfully."; 
            }else{ 
                $statusMsg = "Failed, please try again."; 
            }  
	?>

<html>
<head></head>
<title> Delete User</title>
<body>
<h1>Delete User</h1>
<a href="index.php">Back</a>
<h3>
<?php echo $statusMsg ?>

</h3>
<br>
</body>
</html>
   