<?php
 	include 'conn.php';
	
?>
		<?php	
		$strSQL = "SELECT * FROM employee WHERE e_username = '".mysql_real_escape_string($_POST['txtUsername'])."' 
		and e_password = '".mysql_real_escape_string($_POST['txtPassword'])."'";
		$objQuery = mysql_query($strSQL);
		$objResult = mysql_fetch_array($objQuery);
		
		
		
		if(!$objResult)
		{
			echo "Username and Password Incorrect!";
	}
	else
	{
			
			
			
				header("location:IndexAdmin.php");
			
			
	}
	mysql_close();
?>