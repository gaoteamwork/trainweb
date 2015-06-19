<!DOCTYPE html>
<html >
  <head>
   		
   		 <title>ADMIN SMART ICT</title>
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
	include 'NavAdmin.php';
	
?>
  
 			<div class="container ">
	  			<div class="row ">
				
					 <div class="col-sm-12 col-xs-12 ">
						<nav class=" thumbnail ">
							<div class="" align = "center" ><h1 class="text-warning">Activity</h1></div>
					 	</nav>
		 			 </div> 
	 			 </div>
 			 </div>
 			
 			 
  	 	<div class="container">
  	   	<div class="row" >
  	   	<div class="col-sm-12 col-md-12 col-xs-12">
  	   	<nav class="thumbnail  ">
			<table class="table table-hover  table-bordered" >
			<tr>
				
				<?php
			 	
			 		$sql = "SELECT
								activity.a_id,
								activity.a_title,
								activity.a_detail,
								activity.a_mainpic_path,
								activity_pic.a_pic_path
							FROM
								activity
								INNER JOIN activity_pic ON activity_pic.a_id = activity.a_id ";
					$Query = mysql_query($sql);?>
		<div class="col-sm-12 col-md-12 col-xs-12">
  	   			<table class="table table-hover  table-bordered" >
				
			<tr>
				<caption><h3>ตารางกิจกรรม</h3></caption>
			
					<Th>ID</Th>
					<Th>ชื่อโครงการ</Th>
					<Th>รายละเอียด</Th>
					<Th>พาร์ทรูปหลัก</Th>
					<Th>พาร์ทรูป</Th>
				<?php	while ($result = mysql_fetch_array($Query)) {  ?>
				
			<tr>
					
					<td>
					 	<?php echo $result["a_id"];?>
					</td>
						
					<td>
					<?php echo $result["a_title"];?>	
					</td>
					
			
					<td>
					<?php echo $result["a_detail"];?>  <?php?>
					</td>
					
					<td>
					<?php echo $result["a_mainpic_path"];?>  <?php?>
					</td>
					
					<td>
					<?php echo $result["a_pic_path"];?>  <?php } ?>
					</td>
					
			</tr>
			
			  	   	  	 
								
			
	        </table>
	       		
  	   	</nav>
  	   	</div>
  	   	</div>
  	   		
  	   	</div>
  	  	 	<div class="container" >
  	  			<div class="row" >
		  	   	<div class="col-xs-3 col-sm-4  col-md-3">
		       	  <a href="#" class="btn  btn-lg btn-warning">Edit</a>
		        </div>
		     
		     	<div class="col-xs-3 col-sm-4  col-md-3">
		           <a href="#" class="btn  btn-lg btn-success">Save</a>
		        </div>
		     	
		        <div class="col-xs-3 col-sm-4  col-md-3">
		       	   <a href="#" class="btn  btn-lg btn-danger">Delete</a>
		        </div>
		   		</div>
		   		
    		 </div>
		
			<br>
			<div class="container" >
				   <div class="col-xs-6 col-sm-6  col-md-6">
				         <div class="form-group has-success">
				            <input type="text" value="" placeholder="Input ID" class="form-control" />
				         </div>
				   </div>
				   
				    <div class="col-xs-6 col-sm-6  col-md-6">
				         <div class="form-group has-success">
				            <input type="text" value="" placeholder="Input Name" class="form-control" />
				         </div>
				   </div>
				   
				
				   <div class="col-xs-6 col-sm-6  col-md-6">
				         <div class="form-group has-success">
				           <textarea wrap="off" class="form-control" >Input Detail</textarea>
				         </div>
				   </div>
			
			</div>	
			
			<div class="container" >
					<div class="col-xs-6 col-sm-8  col-md-3">
				           <a href="#" class="btn  btn-lg btn-info">Add</a>
				    </div>	      
  	   		
  	   		
					 <div class="fileUpload btn btn-default">
					    <span>Upload Picture</span>
					    <input type="file" class="upload" />
					</div>
					
					 <div class="fileUpload btn btn-info">
					    <span>Upload Main Picture</span>
					    <input type="file" class="upload" />
					</div>
					
					<br>
					<br>
					<br>
  	   	
   			</div>
     		 
   
  </body>
</html>