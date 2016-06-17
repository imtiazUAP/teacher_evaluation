<?php include("dbconnect.php"); ?>
<?php

	  mysql_query($sql="INSERT INTO student (student_reg,student_name,student_dept,student_email,student_password,student_batch,semester_id)VALUES ('" . $_REQUEST['reg'] . "','" . $_REQUEST['name'] . "','" . $_REQUEST['department'] . "','" . $_REQUEST['email'] . "','" . $_REQUEST['password'] . "','" . $_REQUEST['batch'] . "','" . $_REQUEST['semester_id'] . "')");
  
  
  header ('location: http://localhost/Online_Teacher_Evaluation_System/sign_up_notification.php '); 
mysql_close($con)
?> 