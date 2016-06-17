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
    
      <?php include("headerindex.php"); ?> 	
                     
   <?php include("menu_headerindex.php"); ?> 	
      
      	  <div id="templatemo_main_top"></div>
          <div id="templatemo_main">
        
		<!--Code starts here-->
		
	
 <form action="sign_up_save.php" method="post"
              enctype="multipart/form-data">
<table align="center">



    <p>
    <tr>
    <td> 
         <label for="name" class="signup_field" data-icon="u">Your Registration: (mandatory)</label></td>
         <td>
         <input id="lastnamesignup" name="reg" required="required" type="text" placeholder="11201099" />
         </td>
         </tr>
    </p>




    <p>
    <tr>
    <td> 
         <label for="name" class="signup_field" data-icon="u">Your Name:</label></td>
         <td>
         <input id="lastnamesignup" name="name" required="required" type="text" placeholder="Falguni Geet" />
         </td>
         </tr>
    </p>

	    <p>
    <tr>
    <td> 
         <label for="name" class="signup_field" data-icon="u">Department:</label></td>
         <td>
         <input id="lastnamesignup" name="department" required="required" type="text" placeholder="CSE Department" />
         </td>
         </tr>
    </p>

    <p> <tr> <td>
         <label for="email" class="signup_field" data-icon="u">Your E Mail:</label> </td>
         <td>
         
         <input id="lastnamesignup" name="email" required="required" type="text" placeholder="example@yahoo.com" />
         </td>
         </tr>
    </p>

	    <p> 
    <tr>
    	<td>
         <label for="Portrait" class="signup_field" data-icon="u">Password:</label></td>
         <td>
         <input id="file" name="password" required="required" type="password" placeholder="your desired password" />
        </td>
     </tr>
    </p>
	
	    <p> <tr> <td>
         <label for="email" class="signup_field" data-icon="u">Batch:</label> </td>
         <td>
         
         <input id="lastnamesignup" name="batch" required="required" type="text" placeholder="33th Batch" />
         </td>
         </tr>
    </p>


<tr>
<td>Semester: (mandatory)</td>
<td>
<select name="semester_id" id="semester_id">
<?php
$query="SELECT DISTINCT semester_id,semester_name FROM semester ORDER BY semester_id";

$rs = mysql_query($query) or die ('Error submitting');
while ($row = mysql_fetch_assoc($rs)) {
    print("<option value=\"" . $row["semester_id"] . "\">" . $row["semester_name"] . "</option>");
}
?>
</select> 
</td>

</tr>



</table>



<br><br>


    <p class="signin_button"> 
	<input type="Submit" value="Register"/>
	</p>

</form>
</div>
		
		<!--Code ends here-->
		
		
              
                 
              <div class="cleaner"></div>
            
        	<div class="cleaner"></div>
         <!-- end of templatemo_main -->
        <div id="templatemo_main_bottom"></div>
        
<?php include("footer.php"); ?>  <!-- end of templatemo_footer -->
    
	<!-- end of wrapper -->



</body>
</html>
	
	
	
	
	