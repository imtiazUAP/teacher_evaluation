<?php
session_start();
include ("dbconnect.php");
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<?php include ("head.php"); ?>
</head>

<body>
	<div id="templatemo_wrapper">
		<?php include ("header.php"); ?>
		<?php include ("menu_header.php"); ?>
		<div id="templatemo_main_top"></div>
		<div id="templatemo_main">
			<table>
				<tr>
					<td>
						<div id="templatemo_content">
							<h2>VC Contact Information</h2>
							<p>Remind! If only the issue is important then you should send a mail to VC...</p>
							<div class="cleaner_h40"></div>
							<div class="col_w250 float_l">
								<h5>Contact VC</h5>
								Dhanmondi 4/A, <br />
								Dhanmondi, 10120<br />
								Dhaka<br />
								<br />
								Tel: XXXXXXXXXXXXXXX<br />
								Fax: XXXXXXXXXXXXXXXXXXXXXXXXX
							</div>
							<div class="cleaner_h50"></div>
						</div><!-- end of content -->
					</td>
					<td>
						<h4>Send a Email to VC:</h4>
						<form action="php_sendmail_upload2.php" method="post" name="form1"
							enctype="multipart/form-data">
							<table style="padding:5px;">
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
									<td><textarea name="txtDescription" cols="35" rows="8"
											id="txtDescription"></textarea></td>
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
					</td>
		</div>
		</tr>
		</table>
		<div class="cleaner"></div>
	</div> <!-- end of templatemo_main -->
	<div id="templatemo_main_bottom"></div>
	<?php include ("footer.php"); ?> <!-- end of templatemo_footer -->
	</div>
	<!-- end of wrapper -->
</body>

</html>