<!DOCTYPE html>
<html>
<head>
<title>MeraCity| Local Services Search Engine</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	 

<!--//fonts-->

<!--script-->
</head>
<body> 
	<!--header-->
	<div class="header">
		<div class="top-header" >
			<div class="container">
				<div class="top-header-left">
					<ul class="support">
						<li><a href="#"><label> </label></a></li>
						<li style="color:green;"><a href="#">24x7 live<span class="live"> support</span></a></li>
					</ul>
					<!--<ul class="support">
						<li class="van"><a href="#"><label> </label></a></li>
						<li><a href="#">Free shipping <span class="live">on order over 500</span></a></li>
					</ul>-->
					<div class="clearfix"> </div>
				</div>
				
				<div class="clearfix"> </div>		
			</div>
		</div>

		<div class="container-fluid">
		<div class="row" style="border: 1px solid #ddd; padding-top:1%; ">
			<div class="col-lg-1"></div>

			<div class="col-lg-2">
				
						<a href="index.php" > <img class="LogoClass" src="img/LOGO.png" alt=" " class="center-block"  /></a>
			</div>	

				<div class="col-lg-4" style="margin-bottom:1%; ">
					
							  <div class="input-group" >
								      <input type="text" class="form-control" aria-label="..." placeholder="Search......." style="height:45px;">
								      <div class="input-group-btn" >
								        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="width:100%; height:45px;">IN <span class="caret"></span></button>
								        <ul class="dropdown-menu dropdown-menu-right" role="menu">
								          <li><a href="#"><i class="glyphicon glyphicon-map-marker"></i>Islamabad</a></li>
								          <li><a href="#"><i class="glyphicon glyphicon-map-marker"></i>Rawalpindi</a></li>
								          <li><a href="#"><i class="glyphicon glyphicon-map-marker"></i>Faisalabad</a></li>
								          <li><a href="#"><i class="glyphicon glyphicon-map-marker"></i>Karachi</a></li>
								          <li><a href="#"><i class="glyphicon glyphicon-map-marker"></i>Lahore</a></li>
								       
								        </ul>
								      </div><!-- /btn-group -->
						    </div><!-- /input-group -->
						
						
						
					</div>
				
				
			
				<br class="hidden-lg hidden-md" />
				<div class="col-lg-3  LoginLinks" style=" margin-top:0.5%;" >
					<div class="row text-center ">
						<div class="col-lg-11 center-block">
							
								<a href="login.php"><i class="glyphicon glyphicon-lock" style="color:#009bdb"></i>&nbsp;LOGIN</a>|
								<a href="signUp.php">SIGNUP</a>
						</div>		
							
								
						
					</div>
				</div>
				<br class="hidden-lg hidden-md" />
				<div class="col-lg-1 text-center"><a class="btn btn-lg AdPost" href="" >Add Your Service</a>	</div>
				<br class="hidden-lg hidden-md" />
			</div>
			</div>
		</div>

		</div>
	</div>
	<!-- start content -->
	<div class="container">
		
	<div class="women-product">
		<div class=" w_content">
			<div class="women">
				<a href="#"><h4>Hospitals in Islamabad</h4></a>
				
			     <div class="clearfix"> </div>	
			</div>
		</div>
		<div class="grid-product">
		
			<!-- grids_of_4 -->
			<?php 
				include ('db.php');
				$query=mysqli_query($conn,"select * from services where catID=1");
				while($row=mysqli_fetch_array($query)){
			?>

		<a href="">
		<div class="row">	
		  <div class="  product-grid">
			<div class="content_box">
			<div class="row ListingContent">

			<div class="col-md-3">	
			   	<div class="left-grid-view grid-view-left">
			   	   	 <img src="" class="img-responsive" alt="Featured Image" height="" />
				   	   	<div class="mask">
	                        <div class="info">Quick View</div>
			            </div>
				   	  
				</div>
			</div>
			<div class="col-md-9 Listing">
				    <h4><a href="SingleService.php?SID=<?php echo $row['SID'] ;?>"><?php echo $row['Name'];?></a> <span class="pull-right" style="padding-right:10px;"><i class="fa fa-clock-o"></i>&nbsp; 133 Reviews</span></h4>
				  	<div id="stars" class="starrr" style="font-size:2em;" >
						<?php 
									include ('db.php');
								$ratings=mysqli_query($conn, "select * from Rating where SID=".$row['SID']);
								$rows=mysqli_fetch_array($ratings);
								$RatingsStars=$rows['Rate'];
								for($i=1; $i<=$RatingsStars; $i++){
									echo '<i class="glyphicon glyphicon-star icon" ></i>';	
								}
								if($RatingsStars<5){
								$remaining=5-$RatingsStars;
								for($j=1; $j<=$remaining; $j++){
									echo '<i class="glyphicon glyphicon-star-empty icon" ></i>';
								}
							}
								?>
					</div>
				     <p><?php echo $row['Description'];?></p><span class="on-get pull-right" style="background-color:#009bdb; font-size:1.5em;" >View</span>
				     
				     <br/>
				     <p class="ProductDetails">In <span><i class="glyphicon glyphicon-map-marker"></i><?php echo $row['Address'];?></span></p>
			 
			   	</div>
			 </div>
			</div>
			
          </div>
          </div></a>

          <?php } 
          ?>



			<div class="clearfix"> </div>
		</div>
	</div>

	<?php 
          	   	include ('Categories.php');
          	   ?>

		<div class="row text-center" >
		<div class="col-lg-12">
			<ul class="pagination">
    			<li>
      				<a href="#" aria-label="Previous">
        			<span aria-hidden="true">&laquo;</span>
 			     </a>
    			</li>
    			<li class="active"><a href="#">1</a></li>
    			<li><a href="#">2</a></li>
    			<li><a href="#">3</a></li>
    			<li><a href="#">4</a></li>
    			<li><a href="#">5</a></li>
    			<li><a href="#">6</a></li>
    			<li><a href="#">7</a></li>
    			<li><a href="#">8</a></li>
    			<li>
      				<a href="#" aria-label="Next">
        			<span aria-hidden="true">&raquo;</span>
      				</a>
    			</li>
  			</ul>
  		</div>
	</div>	
	<div class="footer">
		<div class="footer-top">
			<div class="container">
				<div class="latter">
					<h6>Sign Up</h6>
					<div class="sub-left-right">
						<form>
							<input type="text" value="Enter email here"onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter email here';}" />
							<input type="submit" value="Sign Up" style="background-color:#009bdb;" />
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="latter-right">
					<p>FOLLOW US</p>
					<ul class="face-in-to">
						<li><a href="#"><span> </span></a></li>
						<li><a href="#"><span class="facebook-in"> </span></a></li>
						<div class="clearfix"> </div>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="footer-bottom-cate">
					<h6>CATEGORIES</h6>
					<ul>
						<li><a href="#">Curabitur sapien</a></li>
						<li><a href="#">Dignissim purus</a></li>
						<li><a href="#">Tempus pretium</a></li>
						<li ><a href="#">Dignissim neque</a></li>
						<li ><a href="#">Ornared id aliquet</a></li>
						<li><a href="#">Ultrices id du</a></li>
						<li><a href="#">Commodo sit</a></li>
						<li ><a href="#">Urna ac tortor sc</a></li>
						<li><a href="#">Ornared id aliquet</a></li>
						<li><a href="#">Urna ac tortor sc</a></li>
						<li ><a href="#">Eget nisi laoreet</a></li>
						<li ><a href="#">Faciisis ornare</a></li>
					</ul>
				</div>
				<div class="footer-bottom-cate bottom-grid-cat">
					<h6>FEATURED Services</h6>
					<ul>
						<li><a href="#">Curabitur sapien</a></li>
						<li><a href="#">Dignissim purus</a></li>
						<li><a href="#">Tempus pretium</a></li>
						<li ><a href="#">Dignissim neque</a></li>
						<li ><a href="#">Ornared id aliquet</a></li>
						<li><a href="#">Ultrices id du</a></li>
						<li><a href="#">Commodo sit</a></li>
					</ul>
				</div>
				<div class="footer-bottom-cate">
					<h6>Top Bussiness Services</h6>
					<ul>
						<li><a href="#">Curabitur sapien</a></li>
						<li><a href="#">Dignissim purus</a></li>
						<li><a href="#">Tempus pretium</a></li>
						<li ><a href="#">Dignissim neque</a></li>
						<li ><a href="#">Ornared id aliquet</a></li>
						<li><a href="#">Ultrices id du</a></li>
						<li><a href="#">Commodo sit</a></li>
						<li ><a href="#">Urna ac tortor sc</a></li>
						<li><a href="#">Ornared id aliquet</a></li>
						<li><a href="#">Urna ac tortor sc</a></li>
						<li ><a href="#">Eget nisi laoreet</a></li>
						<li ><a href="#">Faciisis ornare</a></li>
					</ul>
				</div>
				<div class="footer-bottom-cate cate-bottom">
					<h6>OUR ADDERSS</h6>
					<ul>
						<li>Aliquam metus  dui. </li>
						<li>orci, ornareidquet</li>
						<li> ut,DUI.</li>
						<li >nisi, dignissim</li>
						<li >gravida at.</li>
						<li class="phone">PH : 6985792466</li>
						<li class="temp"> <p class="footer-class">Design by <a href="#" target="_blank">MeraCity.Com</a> </p></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
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