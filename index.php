<?php include 'config.php';?>
<?php
//session_start();

 $userid = "";
$password = "";
if(isset($_POST['done']))
{
if(!empty($_POST)) 
{
    if(!empty($_POST['userid']))
	{
        if(!empty($_POST['password']))
	    {
			//"userType"
            $userid = $_POST['userid'];
            $password = $_POST['password'];
   
   
   
				
         $qry = "Select * from users where  userid= '$userid' and password='$password'";

            $results = mysqli_query($con, $qry);
            if ($results->num_rows> 0) //username and password is corract
			{
				$usertype="";
				$row = $results->fetch_assoc();//getting the single row only
				
								
					$_SESSION['userid'] = $userid;//session
					
					session_start();
					header('Location:http://localhost/ums/UserConsole.php');
					
					
            }
   
   			
			else 
			{
                echo "Invalid username or password.";
            }
   
        }
		else 
		{
           echo "Password field is empty.";
        }
    } 
	else 
	{
        echo "username field is empty";
    }
	
	
}
}

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
<link rel="stylesheet" href="s1.css">
    <title>User Managemnt System</title>
</head>
<body>
<h1> User Managemnt System</h1>
   <form method="POST" action="index.php">
<table>

<tr><td><a href="Registration.php"> Register Now !</a></td>
<td></a></td></tr>

<tr><td>Enter User Name :</td><td><input type="text" name="userid"  id="username"></td></tr>
<tr><td>Enter User password : </td><td><input type="password" name="password"  id="password"></td></tr>
<tr><td></td><td><button type="submit" name="done">Submit</button></td></tr>

</table>
<br>
<hr>
</form>
</div>
        </div>
    </main>
</div>
</body>
</html>