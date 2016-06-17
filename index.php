<?php
 session_start();
 error_reporting(0);
 include("dbconnect.php");
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
		
		
		<div class="box" align="middle">
		<br>
					
					        <p style="font-weight:bold; font-size:24px">Sign In</p>
        <form  action="" method="post" >
            <div class="tabledv"><div class="registername">Email Address:</div><div class="registerfield"><input type="text" name="loginname" id="loginname" maxlength="30" size="29" value="" autofocus="autofocus"/></div></div>
            <div class="tabledv"><div class="registername">Password:</div><div class="registerfield"><input type="password" name="password" id="password" maxlength="30" size="29" value="" autofocus="autofocus"/></div></div>
            <div class="tabledv"><div class="registername"></div><div class="registerfield"><input name="login" type="submit" value="Log In" /></div>
			</div>
        </form>
		<br />
		<br />
		<br />
		<br />
		<br />
	<h3>Welcome to my Website...
	<br>
	If you don't have an account sign up first
</h3>
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />

		</div>
		

		        <?php
        if (isset($_REQUEST['login'])) {
            $email = $_REQUEST['loginname'];
            $uspass = $_REQUEST['password'];
            $qry = "select * from student where student_email='" . ($email) . "' && student_password='" .($uspass) . "' ";

            $usresult = mysql_query($qry);
            $usdata = mysql_fetch_assoc($usresult);
			//session_regenerate_id();
            $_SESSION['student_email'] = $usdata['student_email'];
			$_SESSION['student_id'] = $usdata['student_id'];
			session_write_close();
		$a=$_SESSION['student_email'];
		print $a;

            if (!empty($_SESSION['student_email'])) {
            ?>
            <script language="JavaScript">
				window.location="home.php";
			</script>
             <?php
            }
        	}
        	?>
		
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
