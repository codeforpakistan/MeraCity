<!DOCTYPE html>
<html>
<head>
<title>ZillionHub| Find what you're looking for on ZillionHub, the safe and reliable free classifieds social network</title>
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
							
								<a href="login.html"><i class="glyphicon glyphicon-lock" style="color:#009bdb"></i>&nbsp;LOGIN</a>|
								<a href="register.html">SIGNUP</a>
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
	    <div class="container login-bg-img">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color:#009bdb; color:white">
                        <div class="panel-title">Sign Up</div>
                        
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            <div class="error">
                            <?php $error=(isset($_GET['error']) && $_GET['error']!="")? $_GET['error']:"";echo $error; ?> 
                            </div>
                         
                        <form id="loginform" action="signUpAuth.php" class="form-horizontal" role="form" method="POST">
                                    
                            <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="firstname" placeholder="First Name" required="required">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="passwd" placeholder="Password" required="required">
                                    </div>
                                </div>
                                

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                    	<input type="submit" style="background-color:#009bdb" id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right">
                                        
                                        <span style="margin-left:8px;">or</span>  
                                    </div>
                                </div>
                                
                                
                                  <div class="row text-center" >
	                                  <div class=" col-lg-4 col-md-4">
	                                  	<a href="#" class="btn btn-primary facebook"><span class="fa fa-facebook"></span>&nbsp;Sign Up Facebook</a>
	                                  
	                                  </div>
	                                  <br class="hidden-lg hidden-md" />

	                                  <div class="col-lg-4 col-md-4">
	                                  	<a href="#" class="btn btn-primary twitter"><span class="fa fa-twitter"></span>&nbsp;Sign Up Twitter&nbsp;</a>
	                                  </div>
	                                  <br class="hidden-lg hidden-md" />
	                                  <div class="col-lg-4 col-md-4">
	                                  	<a href="#" class="btn btn-primary gplus"><span class="fa fa-google"></span>&nbsp;Sign Up With Google&nbsp;</a>
	                                  </div>
	                                  <br>
                                  </div>
                            </form> 

</div>  
					

                        </div>                     
                    </div>  
        </div>

    </div>
   
      	
	<!---->
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
	
</body>
</html>