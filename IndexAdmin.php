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
 <
  <body>
  
  	<?php
 	include 'NavAdmin.php';
	
?>
  			
		 <div class="container ">
  			<div class="row ">
	
			 <div class=" ">
				<nav class="thumbnail col-sm-12 col-md-12 col-xs-12">
					<h1 class="text-primary text-center">Administrator</h1>
					<div class="p"> บริษัท สมาร์ท ไอซีที จำกัด</div>
				</nav>
 			 </div> 
 			 </div>
 			 </div>
 			 
   	 
   	 <div class="container">	
  	   		<div class="row">
   			
     		   <div class="col-xs-6 col-sm-3 col-md-3">
       		   <a href="#" class="btn btn-block btn-lg btn-primary">Product</a>
       		   </div>
       		  
             	
          	  <div class="col-xs-6 col-sm-3 col-md-3">
      	      <a href="#" class="btn btn-block btn-lg btn-warning">Activity</a>
     		  </div>	
           			
           	</div>		
    </div><p></p>
    
		    	<div class="container">
		    	<nav class="thumbnail col-sm-12 col-md-12 col-xs-12">
		  			<br>
    				 
						    				<style>
						/*à»ç¹¡ÒÃà«çµ¤èÒ CSS ãËé¡ÑºÇÑ¹»Ñ¨¨ØºÑ¹ ÊÑ§à¡µØ¨Ðà«çµãËéÁÕ¾×é¹ËÅÑ§à»ç¹ÊÕá´§ */
						.now
						{
						  background:red; 
						  color: greenyellow;
						
						}
						.Td_theme
						{
						    height:84px; 
						    width:110px;
						}
						
						</style>
						
						<?php 
						//var_dump($_POST);
						
						
						
						//echo "There was $num days in DEC 2012";
						echo "<br />";
						//echo " " . date("l", mktime(0, 0, 0, 12, 1, 2012));
						$month_set=date("m");
						$day_set=1;
						$year_set=date("Y");
						$now=date("d");
						
						if(isset($_POST['console']))
						{
						   if($_POST['console']=="<<"&&$_POST['month']=="1")
						   {
						        $month_set=12;
						        $year_set=--$_POST['year'];
						   }else if($_POST['console']=="<<")
						            {
						                $month_set=--$_POST['month'];
						                $year_set=$_POST['year'];
						            }else if($_POST['console']==">>"&&$_POST['month']=="12")
						                    {
						                      $month_set=1;
						                      $year_set=++$_POST['year'];  
						                    }else if($_POST['console']==">>")
						                        {
						                            $month_set=++$_POST['month'];
						                            $year_set=$_POST['year'];
						                        }
						}else if(isset($_POST['today']))
						    {
						        $month_set=date("m");
						        $day_set=1;
						        $year_set=date("Y"); 
						    }
						$day_count = cal_days_in_month(CAL_GREGORIAN, $month_set, $year_set); //month//year ¤Ó¹Ç¹ÇèÒà´×Í¹¹Õé»Õ¹ÕéÁÕ¡ÕèÇÑ¹
						$format=date("l", mktime(0, 0, 0, $month_set, $day_set, $year_set));//hour//minute//second//month//day//year ÇÑ¹àÃÔèÁÁÑ¹à»ç¹ÇÑ¹ÍÐäÃæ àªè¹ monday 
						if($format=='Saturday')
						{
						    $day_start=7;
						}else if($format=='Sunday')
						        {
						            $day_start=1;
						        }else if($format=='Monday')
						            {
						                $day_start=2;
						            }else if($format=='Tuesday')
						                {
						                    $day_start=3;
						                }else if($format=='Wednesday')
						                    {
						                        $day_start=4;
						                    }else if($format=='Thursday')
						                        {
						                            $day_start=5;
						                        }else
						                            {
						                               $day_start=6; 
						                            }
						?>
						
						<form method="POST" action="calendar.php">
						<div style="margin-left: 350px;"><?php echo date("F-Y", mktime(0, 0, 0, $month_set, $day_set, $year_set)); // àÍÒÇÑ¹»Ñ¨¨ØºÑ¹ÁÑ¹ÁÒæ ?></div>
						-----------------------------------------------------------
						<input type="hidden" name="month" value="<?php echo $month_set; ?>" />
						<input type="hidden" name="year" value="<?php echo $year_set; ?>" />
						<input type="submit" name="today" value="TODAY" /> 
						<input type="submit" name="console" value="<<">
						<input type="submit" name="console" value=">>">
						------------------------------------------------------------ 
						</form>
						
						 
						<table class="table_theme" border="2px"  >
						<?php 
						   echo "<th> Sunday </th>";//ËÑÇµÒÃÒ§
						   echo "<th> Monday </th>";
						   echo "<th> Tuesday </th>";
						   echo "<th> Wednesday </th>";
						   echo "<th> Thursday </th>";
						   echo "<th> Friday </th>";
						   echo "<th> Saturday </th>";
						   $count=1;
						   $day=1;
						   //$day_count=31;
						   if($day_start>=6&&$day_count>=31)
						   {
						    $row=0;
						   }else if($day_start==1&&$day_count<=28)
						    {
						        $row=2;
						    }else
						        {
						            $row=1;
						        }
						   
						    for($row; $row<=5; $row++)
						    {
						       echo "<tr>";
						       for($col=0; $col<=6; $col++)//·ÓãËéÁÕªèÍ§·Ñé§ËÁ´à¨ç´ªèÍ§
						       {
						        echo '<td class="Td_theme" >';
						        if($day_start<=$count&&$day<=$day_count)
						        {
						            if($month_set==date("m")&&$year_set==date("Y")&&$day==$now)//àÍÒäÇéàª¤à¾×èÍ ·ÓäÎäÅ¤ì
						            {
						             echo "<div class='now'><h4>*NOW</h4></div>";   
						            } 
						            echo $day++;
						        }
						        $count++;
						        echo "</td>";
						       }
						      /* if()
						       {
						        echo "<td></td>";
						       }else if()
						        {
						          echo "<td></td>";  
						        }else if()
						            {
						              echo "<td></td>";  
						            }else if()
						                {
						                  echo "<td></td>";  
						                }else if()
						                    {
						                      echo "<td></td>";  
						                    }else if()
						                        {
						                          echo "<td></td>";  
						                        }else if()
						                            {
						                              echo "<td></td>";  
						                            }
						                            */
						       
						       echo "</tr>";
						        						
						    }
						?>
						</table>
						    				 	
								      	</nav>
		  		 </div>	  				 
	
	
	
	
				   
  </body>
</html>