<?php
 session_start();
  error_reporting(0);
 include("dbconnect.php");

  ?>
<?php
$b=$_SESSION['student_email'];
//$c=$_SESSION['userid'];


$userrole = mysql_query("select * from student where student_email='{$b}'");
$userdata = mysql_fetch_assoc($userrole);
//echo $userdata['admin'];
?>
	<!DOCTYPE html>
<html>
<head>
<?php include("head.php"); ?>
</head>
<body> 



  <div id="templatemo_wrapper">
    
   	   <?php include("header.php"); ?> 	
                     
   <?php include("menu_header.php"); ?> 	
      
      	  <div id="templatemo_main_top"></div>
          <div id="templatemo_main">
		  
<p>Your Evaluation Report Successfully Submitted. Thankyou!</p>
		<br />
		<br />
		
        	<div class="cleaner"></div>
        </div> <!-- end of templatemo_main -->
        <div id="templatemo_main_bottom"></div>
   		
        
<?php include("footer.php"); ?> <!-- end of templatemo_footer -->
    
    </div> 
	<!-- end of wrapper -->



</body>
</html>