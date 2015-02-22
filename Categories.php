	<?php include 'db.php';?>
	<?php
			$CatResult=mysqli_query($conn,'SELECT * FROM category');
		?>
	<div class="sub-cate">
				<div class=" top-nav rsidebar span_1_of_left">
					<h3 class="cate" style="background-color:#009bdb;">CATEGORIES</h3>
		 
		<ul class="nav nav-list-main CatTree" >
		     
		      <?php while($row=mysqli_fetch_array($CatResult)){

		      		echo '<li class="CatParent"><label class="nav-toggle nav-header"><span class="nav-toggle-icon glyphicon glyphicon-chevron-right"></span>&nbsp; <a href="Services.php?catid='.$row['catID'].'">'.$row['Name'].'</a></label>';
				          
				      echo '</li>';
				      echo '<li class="nav-divider"></li>';
									      	
		      	}?>
		      


		        
		          

		        



    	</ul>	











		 			</div>
				<!--initiate accordion-->

		
	   		     	
			</div>




	

</div>

</div>
	

		
	<script type="text/javascript">
		$(function () {
				   $('ul.nav-left-ml').toggle();
							$('label.nav-toggle span').click(function () {
							  $(this).parent().parent().children('ul.nav-left-ml').toggle(300);
							  var cs = $(this).attr("class");
							  if(cs == 'nav-toggle-icon glyphicon glyphicon-chevron-right') {
							    $(this).removeClass('glyphicon-chevron-right').addClass('glyphicon-chevron-down');
							  }
							  if(cs == 'nav-toggle-icon glyphicon glyphicon-chevron-down') {
							    $(this).removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-right');
							  }
							});



				$( "#slider-3" ).slider({
		               range:true,
		               min: 0,
		               max: 500,
		               values: [ 35, 200 ],
		               slide: function( event, ui ) {
		                  $( "#price" ).html( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		               }
		           });
		         $( "#price" ).html( "$" + $( "#slider-3" ).slider( "values", 0 ) +
		            " - $" + $( "#slider-3" ).slider( "values", 1 ) );


		});

		</script>				  
	<!---->

		