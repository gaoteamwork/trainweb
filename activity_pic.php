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
 	include 'conn.php';

	?>
	
	
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				    </button>
      				<a class="navbar-brand" href="index.php"><img alt="Brand" src="Social_Icons/CompanyLogo.jpg" width="80" height="25"></a>
				</div>
				<div class="navbar-collapse collapse" id="navbar-collapse-main">						
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php"  	class="btn btn-lg">Home</a></li>
						<li><a href="profile.php"  	class="btn btn-lg">Profile</a></li>
						<li><a href="product.php"  	class="btn btn-lg">Product</a></li>
						<li><a href="activity.php"  class="btn btn-lg">Activity</a></li>
						<li><a href="service.php"  	class="btn btn-lg">Services</a></li>
						<li><a href="contact.php"  	class="btn btn-lg">Contact us</a></li>
					</ul>
				</div>
			</div>
		</nav>
	<div class="panel panel-primary" >...</div>
	<div class="panel panel"></div>
	<h1 class="text-center text-primary">Activity</h1>
	<br>
	<br>
	<br>
	
	
	
		  <?php
 	
 		$sql = "SELECT * FROM activity ";
		$Query = mysql_query($sql);
		
		
 	
 	while ($result = mysql_fetch_array($Query)) {  ?>
 		
 	<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="<?php echo $result[""];?>" width="360" height="280">
      <div class="caption">
        <h3><?php echo $result["ID_AC"];?></h3>
        <p>รายละเอียด:<?php echo $result["NAME_MANI_AC"];?></p>
        <p>ราคา: <?php echo $result["AC_DETIAL"];?>บาท/คืน</p>
                <!-- Large modal -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $result["rtype_id"];?>">จองห้องพัก >></button>
<!-- Modal -->
<div class="modal fade" id="<?php echo $result["rtype_id"];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    	
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">จองห้องพัก</h4>
      </div>
      
      <div class="container">
 				<h3><?php echo $result["rtype_name"];?></h3>
			<div class="row">
				
				<div class=" col-lg-6 col-md-offset- col-md-8">
									
						<div class="row">							
							<form id="form<?php echo $result["rtype_id"];?>" role="form" method="post" action="searchroom.php">
							<div class="col-md-12">
								<img src="<?php echo $result["rtype_pic"];?>" class="img-responsive">
								<input type="hidden" value="<?php echo $result["rtype_pic"];?>" name="pic_path"/>
								<input type="hidden" value="<?php echo $result["rtype_id"];?>" name="rtype_id"/>
								<input type="hidden" value="<?php echo $result["rtype_price"];?>" name="rtype_price"/>
								<?php echo $result["rtype_price"];?>
								<p> <?php echo $result["rtype_detail"];?></p>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<span class="form-control" id="fromDisplay<?php echo $result["rtype_id"];?>" name="from">Check in</span>
									<input type="hidden" name="from" value="" id="fromInput<?php echo $result["rtype_id"];?>" required>
									<div class="vf-datepicker" id="startDP<?php echo $result["rtype_id"];?>"></div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<span class="form-control" id="toDisplay<?php echo $result["rtype_id"];?>">Check out</span>
									<input type="hidden" name="to" value="" id="toInput<?php echo $result["rtype_id"];?>"required>
									<div class="vf-datepicker" id="endDP<?php echo $result["rtype_id"];?>"></div>
								</div>
							</div>
							<br>
							<button type="submit" class="btn btn-info">เช็คห้อง</button>
							</form>
						</div>
					
				</div>
			</div>
			<div class="col-md-2">
			</div>
		
		</div>
		<br>
      <div class="modal-footer">
      	
        <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
      </div>
    </div>
  </div>
</div> 
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