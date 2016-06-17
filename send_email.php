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




if (empty($_SESSION['student_email'])) {
    ?>
    <script language="JavaScript">
        window.location="index.php";
    </script><? } else { ?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blue Motion Services</title>
<meta name="keywords" content="blue motion, services, 2-column, icons, free template, website, html css" />
<meta name="description" content="Blue Motion Template [services page] is provided by templatemo.com for everyone." />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
</head>
<body> 



  <div id="templatemo_wrapper">
    
    <?php include("header.php"); ?> 	
                     
   <?php include("menu_header.php"); ?> 	
      
      	  <div id="templatemo_main_top"></div>
          <div id="templatemo_main">
        <body style="background-color:#d7d7d7;margin:auto">




	<form action="php_sendmail_upload2.php" method="post" name="form1" enctype="multipart/form-data">
	<table width="830" border="2" style="padding:50px;">

         <tr>

	</tr>
 	<tr>
		<td>Email:</td>
		<td><input name="Email" type="text" id="txtSubject"></td>
	</tr>
	<tr>
		<td>Subject:</td>
		<td><input name="txtSubject" type="text" id="txtSubject"></td>
	</tr>
	<tr>
		<td>Message Description:</td>
		<td><textarea name="txtDescription" cols="40" rows="8" id="txtDescription"></textarea></td>
	</tr>
	<tr>
		<td>Sender Name:</td>
		<td><input name="txtFormName" type="text"></td>
	</tr>
	<tr>
	<tr>
		<td>Sender Email:</td>
		<td><input name="txtFormEmail" type="text"></td>
	</tr>
	<tr>
	  <td>Attach file:</td>
	  <td><input name="fileAttach" type="file"></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="Submit" value="Send"></td>
	</tr>
	</table>
	</form>

				
              <div class="cleaner"></div>
            
        	<div class="cleaner"></div>
        </div> <!-- end of templatemo_main -->
        <div id="templatemo_main_bottom"></div>
   		
        
<?php include("footer.php"); ?> <!-- end of templatemo_footer -->
    
    </div> 
	<!-- end of wrapper -->



</body>
</html>
    <?php
}?>