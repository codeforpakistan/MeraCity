<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mera City</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<?php 

include('db.php');
$qry="Select * from city";
$result=mysqli_query($conn,$qry);

?>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" style="color:white;">

   

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse" style="">
                <ul class="nav navbar-nav" >
                 
                    <li style="margin-left:5px;">
                       <button class="btn btn-info" style="background-color:#009BDB; color:white; margin-bottom:-20px; margin-right:20px;" > <a class="page-scroll"  href="#"><font color="white">Login</font></a></button>
                    </li>
                
                    <li>
                        <button class="btn btn-info" style="background-color:#009BDB; color:white; margin-bottom:-20px; margin-right:40px;"  ><a class="page-scroll"  href="#"><font color="white">Signup</font></a></button>
                    </li>
                </ul>
            </div>
   


    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
        <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                    	<center><img class="text-responsive" height=300px; width=500px; src="img/mainlogo.png"/></center>
                    </div>
                    <div class="col-md-2"></div>
        </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-2">
                         <div class="input-group" style=" width:100%;" >
                         <form name="mainForm" action="Services.php" method="POST">
                                      <input type="text" class="form-control" aria-label="..." placeholder="Services in your City..." name="inpSer" style="height:60px;">
                                      
                            </div><!-- /input-group -->
                    </div>

                    <div class="col-md-3">
                        <div class="input-group-btn" >
                            <select name="inpList" class="form-control" style="width:100%; height:60px; background-color:white; color:black;">
    						<?php if(!empty($result))
		{

			while ($row=mysqli_fetch_array($result)) 
			{
				
				$cityName=$row['name'];
				$cityID=$row['CID'];
                 ?>
                 <option value="<?php echo $cityID; ?>"><?php echo $cityName; ?></option>
                
                 <?php
			}
				
		} ?>	
    					
    				
							</select>
                                      </div><!-- /btn-group -->
                    </div
               
                <br/><br/>
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                       <a href="Search.php">
                        <button class="btn btn-lg btn-primary" style="width:100%; background-color:#009BDB; padding-top:20px; padding-bottom:20px; margin-top:5px;">Search</button>
                       </a>
                    </div>
                 <div class="col-md-4">   
                 </div>
                </div>
            </div>
            </form>
        </div>
    </header>

   
   

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>
