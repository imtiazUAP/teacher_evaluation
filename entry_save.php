<?php include("dbconnect.php"); ?>
<?php
	  mysql_query($sql="INSERT INTO entry (entry_id,course_id,teachers_code,question_1,question_2,question_3,question_4,question_5,question_6,question_7,question_8,question_9,question_10, question_11, question_12,general_comments_on_instructor,question_13,question_14,question_15,general_comments_on_course)VALUES ('','" . $_REQUEST['course_id'] . "','" . $_REQUEST['teachers_code'] . "','" . $_REQUEST['question_1'] . "','" . $_REQUEST['question_2'] . "','" . $_REQUEST['question_3'] . "','" . $_REQUEST['question_4'] . "','" . $_REQUEST['question_5'] . "','" . $_REQUEST['question_6'] . "','" . $_REQUEST['question_7'] . "','" . $_REQUEST['question_8'] . "','" . $_REQUEST['question_9'] . "','" . $_REQUEST['question_10'] . "','" . $_REQUEST['question_11'] . "','" . $_REQUEST['question_12'] . "','" . $_REQUEST['general_comments_on_instructor'] . "','" . $_REQUEST['question_13'] . "','" . $_REQUEST['question_14'] . "','" . $_REQUEST['question_15'] . "','" . $_REQUEST['general_comments_on_course'] . "'
	  )");
	  
	   header ('location: http://localhost/Online_Teacher_Evaluation_System/entry_confirmation.php '); 
mysql_close($con)
?> 