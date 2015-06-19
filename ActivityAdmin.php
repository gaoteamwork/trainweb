<!DOCTYPE html>
<html >
  <head>
   		
   		 <title>ADMIN SMART ICT</title>
    	<meta name="description" content="Flat UI Kit Free is a Twitter Bootstrap Framework design and Theme, this responsive framework includes a PSD and HTML version."/>

   		 <meta charset="UTF-8" name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

   		 <!-- Loading Bootstrap -->
   		 <link href="dist/css/vendor/bootstrap.min.css" rel="stylesheet">

  		  <!-- Loading Flat UI -->
  		  <link href="dist/css/flat-ui.css" rel="stylesheet">
  		  <link href="docs/assets/css/demo.css" rel="stylesheet">

   		 <link rel="shortcut icon" href="img/favicon.ico">

    
  </head>
  <body>
  	<?php
 	include 'conn.php';
	
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
			 	
			 		$sql = "SELECT * FROM activity";
					$Query = mysql_query($sql);?>
		<div class="col-sm-12 col-md-12 col-xs-12">
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