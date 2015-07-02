<!DOCTYPE html>
<html>
<head>
		<script src="js/jquery.js"></script>
		<link rel="stylesheet" href="fotorama/fotorama.css">
		<script src="fotorama/fotorama.js"></script>
		<link rel="stylesheet" href="styles.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap-theme.css">
		<link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
		<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
		<meta name="viewport" content="width=divice-width, initial-scale=1" charset="UTF-8">
</head>
<body>
		
		<?php
 	include 'Nav.php';
		?> 
		
		
	<div class="panel panel-primary" >...</div>
	<div class="panel panel"></div>
	<h1 class="text-center text-primary">Activity</h1>
	<br>
	<br>
	<br>
	
	<?php
 	include 'conn.php';
	
?>
	<div class="container">
	<div>
		<h1 class="feature">กิจกรรม</h1>
	</div>
<div class="row">
			 
			 	<?php
			 	
			 		$sql = "SELECT * FROM activity";
					$Query = mysql_query($sql);?>
		<div class="col-sm-12 col-md-12 col-xs-12">
  	   	<nav class="thumbnail  ">
			<table class="table table-hover  table-bordered" >
				
			<tr>
				<caption><h3>ตารางกิจกรรม</h3></caption>
			
					<Th>No.ID</Th>
					<Th>Name</Th>
					<Th>detail</Th>
				<?php	while ($result = mysql_fetch_array($Query)) {  ?>
				
			<tr>
					
					<td>
						<?php echo $result["ID_AC"];?>
					</td>
						
			
			
			
					<td>
					<?php echo $result["NAME_MANI_AC"];?>	
					</td>
					
			
		
			
			
					<td>
					<?php echo $result["AC_DETIAL"];?>  <?php	 } ?>
					</td>
					
			</tr>
			
			  	   	  	 
								
			
	        </table>
	       		
  	   	</nav>
  	   	</div>
  	   	</div>

	
  	   	</div>
  	   		
	   		
    		 </div>
			
			<footer class="container-fluid">
				<div class="alert alert-info">
				<div class="row">
					<div class="col-sm-6 col-xs-6">
						<nav class="nav navbar-nav navbar-left">&copy;Copyright SMART ICT Co.,Ltd.</nav>
					</div>
					<div class="col-sm-6 col-xs-6">
					<nav class="nav navbar-nav navbar-right">
						<a href="#">About Us</a> | <a href="#">Help</a> |
						<a href="#">SiteMap</a>
					</nav>
					</div>
				</div>
				</div>
			</footer>
			
	<script src="js/jquery-1.10.2.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="//maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/main.js"></script>	
			
	</body>
</html>