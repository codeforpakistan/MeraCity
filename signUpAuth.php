 <?php
 include 'db.php';
    		if($_SERVER['request_method']='post')
    		{
    			$userEmail=$_POST['email'];
    			$firstName=$_POST['firstname'];
    			$pass=$_POST['passwd'];
    			$qry="insert into users (Name,Password,Email) values ('$firstName','$pass','$userEmail')";

    			$result=mysqli_query($conn,$qry);
    			if(!empty($result))
    			{
    				header("location: login.php");
    			}

    		}
?>