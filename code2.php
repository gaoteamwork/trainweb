<!DOCTYPE html>
<html>
<head>
  <title>Thehotel Beutiesrooms</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/BS3.css"/>
  <link href="css/jqu.date.css" rel="stylesheet">
 
</head>
<body>
<?php
 	include 'conn.php';
	include 'nav.php';
?>
	<div class="container">
	<div>
		<h1 class="feature">ห้องพัก</h1>
	</div>
<div class="row">
 
 	<?php
 	
 		$sql = "SELECT * FROM roomtype ";
		$Query = mysql_query($sql);
		
 	
 	while ($result = mysql_fetch_array($Query)) {  ?> 
   <!------------------------------------------------ 1 product -------------------------------------------->
   <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="<?php echo $result["rtype_pic"];?>" width="360" height="280">
      <div class="caption">
        <h3><?php echo $result["rtype_name"];?></h3>
        <p>รายละเอียด:<?php echo $result["rtype_desc"];?></p>
        <p>ราคา: <?php echo $result["rtype_price"];?>บาท/คืน</p>
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
	
	<!---------------------------------------------- 1 product --------------------------------------------->
	
<?php
	}
?>
	
  </div>
  
  
  
  <hr class="border"/>
  <h3>สิ่งอำนวยความสะดวก</h3>
  <i class="glyphicon glyphicon-signal col-md-2 border2"> WIFI</i><div class="border1 col-md-1"></div><i class="glyphicon glyphicon-phone-alt col-md-2 border2"> Telephone</i><div class="border1 col-md-1"></div>
  <i class="glyphicon glyphicon-blackboard border2 col-md-offset-1"> Tv</i>
  </div>
  
  	
	
	<footer class="footer">
      <div class="container">
        <p class="text-muted">Thehotel BeautiesRooms Copyright © 2015 <a href="#">www.thbrooms.com</a> All Rights Reserved.</p>
      </div>
    </footer>
    
    
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/datepicker.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/script1.js"></script>
</body>
</html>


