<?php
include "db.php";
if($_SERVER['request_method']='post')
	{
		$userEmail=$_POST['userName'];
		$pass=$_POST['password'];
		$qry="select * from users where Email='$userEmail'";
		$result=mysqli_query($conn,$qry);
		if(!empty($result))
		{

			while ($row=mysqli_fetch_array($result)) 
			{
				$tblEmail=$row {'Email'};
				$tblPass=$row {'Password'};

			}
				if($userEmail==$tblEmail && $pass==$tblPass)
				{
					header("location: index.html");
				}
				else {

					header("location: login.php?error=Wrong User Name Or Password");
				}
		}
	}
?>