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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("head.php"); ?>
</head>
<body> 


  <div id="templatemo_wrapper">
   <?php include("header.php"); ?> 	
                     
   <?php include("menu_header.php"); ?> 	
       
      
      	  <div id="templatemo_main_top"></div>
          <div id="templatemo_main">
        
		<!--Code starts here-->
		
		
	<table class="hoverTable" width="900" border="1" style=" padding-bottom:40px;padding-left:40px;padding-right:40px;" >
		<tr align="center">
		    <td width="80" bgcolor="#516E7C" style="color:#FFFFFF">Icon</td>
			<td width="50" height="50" bgcolor="#516E7C" style="color:#FFFFFF">Department Code</td>
			<td width="150" bgcolor="#516E7C" style="color:#FFFFFF">Department Name</td>
			<td width="150" bgcolor="#516E7C" style="color:#FFFFFF">Department Rating</td>
		</tr>
				<tr align="center">
		    <td width="80" height="30"><img src="images/flashmo.jpg" alt="image" /></td>
			<td width="50">100</td>
			<td width="150"><a href="teacher_list_cse.php" class="current">Department of Computer Science & Engineering</a></td>
			<td width="150">3.1</td>
		</tr>
						<tr align="center">
		    <td width="80" height="30"><img src="images/flashmo.jpg" alt="image" /></td>
			<td width="50">101</td>
			<td width="150"><a href="teacher_list_civil.php" class="current">Department of Civil Engineering</a></td>
			<td width="150">3.4</td>
		</tr>
						<tr align="center">
		    <td width="80" height="30"><img src="images/flashmo.jpg" alt="image" /></td>
			<td width="50">102</td>
			<td width="150"><a href="teacher_list_archi.php" class="current">Department of Architecture</a></td>
			<td width="150">4.0</td>
		</tr>
						<tr align="center">
		    <td width="80" height="30"><img src="images/flashmo.jpg" alt="image" /></td>
			<td width="50">103</td>
			<td width="150"><a href="teacher_list_eee.php" class="current">Department of Electronics & Electrical Engineering</a></td>
			<td width="150">2.9</td>
		</tr>
						<tr align="center">
		    <td width="80" height="30"><img src="images/flashmo.jpg" alt="image" /></td>
			<td width="50">100</td>
			<td width="150"><a href="teacher_list_law.php" class="current">Department of Law</a></td>
			<td width="150">3.4</td>
		</tr>
								<tr align="center">
		    <td width="80" height="30"><img src="images/flashmo.jpg" alt="image" /></td>
			<td width="50">100</td>
			<td width="150"><a href="teacher_list_english.php" class="current">Department of English</a></td>
			<td width="150">3.4</td>
		</tr>

  	</table>
		
		<!--Code ends here-->
		
		
              
                 
              <div class="cleaner"></div>
            
        	<div class="cleaner"></div>
        </div> <!-- end of templatemo_main -->
        <div id="templatemo_main_bottom"></div>
   		
        
<?php include("footer.php"); ?>  <!-- end of templatemo_footer -->
    
    </div> 
	<!-- end of wrapper -->


</body>
</html>
    