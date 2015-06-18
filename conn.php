<?php
    
	$HOST="localhost"; 
  	$DB_USER="root"; 
 	$DB_PWD="1234"; 
 	$DB_NAME="smict";
  
  $DB_HOST=(!empty($PORT)) ? $HOST.":".$PORT : $HOST;
  
  if(@mysql_connect($DB_HOST,$DB_USER,$DB_PWD)){
	  $conServ=@mysql_select_db($DB_NAME) or die("SQL Error: <br>".mysql_error());	
	  mysql_query("SET NAMES UTF8"); 
  }else{
	  die("SQL Error: <br>".mysql_error());	  
  }
  
  ?>