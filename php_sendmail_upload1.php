   <?php
        session_start();
        include('dbconnect.php');
   ?>
<?php
$b=$_SESSION['username'];
//$c=$_SESSION['userid'];


$userrole = mysql_query("select * from userinfo where username='{$b}'");
$userdata = mysql_fetch_assoc($userrole);
//echo $userdata['admin'];


?>
<html>
<head>
 <?php include("head.php"); ?> 
</head>
<body>
<div id="grad1">
<div class="bodydiv">

<div id="logo" align="left">


	<h1><a href="Home.php">UAPians.Net  </a></h1>
	<p>A Stack of Uap Students    ...UNOFFICIAL...</p>
	</div>





<div class="realbody" style="min-height:2000px">
	<?php

//$connect=mysql_connect("localhost","root","");
//$select_db=mysql_select_db("mylab");

$strquery="SELECT SPortrait,username FROM s_info INNER JOIN userinfo ON s_info.SID=userinfo.SID WHERE username='{$b}'";
$results=mysql_query($strquery);
$num=mysql_numrows($results);


$SPortrait=mysql_result($results,$i,"SPortrait");
$username=mysql_result($results,$i,"username");
?>

	<div id='cssmenu' align="center" style="vertical-align:middle">
	<ul>
			<li style="vertical-align:middle;"><a href='My_Profile.php'><span><img style="width:15px; height:15px; border:1px solid white; vertical-align:middle"src="<?php echo $SPortrait; ?>" alt="Profile Picture"><span> Profile</span></a></li>
			
   		<li><a href='Home.php'><span>Home</span></a></li>
		
		

		
			
   		<li><a href='Student_List.php'><span>Students</span></a></li>

		<li><a href='Employee_List.php'><span>Employees</span></a></li>
   		<li><a href='Blog_List.php'><span>CSE Blog</span></a></li>   


		
   		<li><a href='Blood_List.php'><span>Blood</span></a></li>
		<li><a href='About.php'><span>About</span></a></li>
				
	</ul>



	</div>


<div id="content">
	<div id="colOne">
	
		<div class="box">
		<br>
		<br>
		<div style="text-decoration:none;font-size:24px; color:#FFFFFF; font-weight:bold"><span>You are Logged in as  <?php print $_SESSION['username']?></span></div>
				
		<br>

						<?php 
					if (($userdata[admin] == '3')) {
					?>
					<br>
<a href='php_sendmail_upload1.php'>Send Email</a>
<br>
					<?php
					}
	 				?>

		<a href="Log_Out.php" style="text-decoration:none;font-size:24px; font-weight:bold"><span>Log out</span></a>
		
		<br>
		<br>
		<div>
						<form>
						<input type="text" size="29" placeholder="Search for any page" onKeyUp="showResult(this.value)">
						<div id="livesearch"></div>
						</form>
					</div>			
					<br>
					<div style="font-weight:bold; font-size:16px"><ul><li><a href="send_message_to_your_friend.php">Send a Message...</a></li></ul></div>
			<br>		
		<div id="paragraph_head">
			<h3  align="left" style="color:#FFFFFF;font:Georgia, 'Times New Roman', Times, serif;">Academic Aspects</h3>
		</div>
			<ul class="bottom">
				<li><a href="Employee_List.php">Teachers</a></li>
				<li><a href="Student_List.php">Students</a></li>
				<li><a href="Course_List.php">Courses</a></li>
				<li><a href="Mark_List.php">Results</a></li>
				<li><a href="Reference_List_All.php">References</a></li>
				
			</ul>
		</div>
		
		<br>
		<br>
		
	<div class="box">
		<div id="paragraph_head">
			<h3  align="left" style="color:#FFFFFF;font:Georgia, 'Times New Roman', Times, serif ">Clubs & Social Works</h3>
		</div>.
			<ul class="bottom">
				<li><a href="galary.php">Gallery</a></li>
				<li><a href="Blood_List_All.php">Blood Bank</a></li>
				<li><a href="Programing_Contest_Club.php">Programming Contest Club</a></li>
				<li><a href="Research_Publication_Club.php">Research and Publication Club</a></li>
				<li><a href="Sports_Club.php">Sports Club</a></li>
				<li><a href="Software_Hardware_Club.php">Software and Hardware Club</a></li>
				<li><a href="Cultural_Debating_Club.php">Cultural and Debating Club</a></li>
				<li><a href="Web_Club.php">Web Club</a></li>
			</ul>
	</div>
	
		<br>
		<br>
		

		
	<div class="box">
		<div id="paragraph_head">
			<h3 align="left" style="color:#FFFFFF;font:Georgia, 'Times New Roman', Times, serif ">Contact Us</h3>
		</div>
			<p class="bottom">For any query, or any Information contact with us... <br> Student Management Tools,
			University of Asia Pacific
			Phone:+8801736516583
			E_Mail:emtiaj@yahoo.com
			Website:www.emtiaj.blogspot.com
			<br>
			<br>
			For any Information to Add, Edit or Delete Contact with Admins
			</p>
	</div>
	
		<br>
		<br>
		
		<div id="paragraph_head">
			<h3 align="left" style="color:#FFFFFF;font:Georgia, 'Times New Roman', Times, serif ">Find Us on</h3>
		</div>
		<br>
		<div id="Social_Links" style="display:inline">
			<ul>
			<a href="https://www.facebook.com/pages/Student-Management-Tool/1452237808341753" target="_blank"><li><img src="images/FB_Icon.png" style="height:72; width:72"/></a>
			<a href="https://twitter.com/ILiton" target="_blank"><li><img src="images/Twitter_Icon.png" style="height:75; width:75"/></a>
			<a href="https://plus.google.com/u/0/" target="_blank"><li><img src="images/Google_Icon2.png" style="height:70; width:70"/></a>
			</ul>
		</div>
	</div>





	<form action="php_sendmail_upload2.php" method="post" name="form1" enctype="multipart/form-data">
	<table width="830" border="2" style="padding:100px;">

         <tr>
		<td>Select Mail Contacts:</td>
		<td>
                    <select name="send_mail_option_id" id="send_mail_option_name" selected="">
                <?php

                    $query="SELECT DISTINCT send_mail_option_id, send_mail_option_name FROM send_mail_option";
                    $rs = mysql_query($query) or die ('Error submitting');
                    while ($rows = mysql_fetch_assoc($rs)) {
	            if ($row["send_mail_option_id"] == $rows["send_mail_option_id"])
                    {
                    $selected = 'selected="selected"';
                    }
                    else
                    {
    	            $selected = '';
                    }
                    print("<option value=\"" . $rows["send_mail_option_id"] . "\" ".$selected."  >" . $rows["send_mail_option_name"] . "</option>");
                    }
                ?>
                    </select>
               </td> 
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
</div>
</div>
</div>

		<div class="footer">
		<div class="FooterText">
 		<a href="http://www.emtiaj.blogspot.com" target="_blank">copyright @ www.emtiaj.blogspot.com</a>   |||||
		<a href="http://uap-bd.edu/cse/index.html" target="_blank">copyright @ CSE Department, UAP</a> <br>
		</div>			 
		</div>
</body>
</html>
