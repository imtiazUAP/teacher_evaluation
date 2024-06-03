<?php
session_start();
include ("dbconnect.php");
?>
<!DOCTYPE html>
<html>

<head>
	<?php include ("head.php"); ?>
</head>

<body>
	<div id="templatemo_wrapper">
		<?php include ("headerindex.php"); ?>
		<?php include ("menu_headerindex.php"); ?>
		<div id="templatemo_main_top"></div>
		<div id="templatemo_main">
			<div class="box" align="middle">
				<br>
				<p style="font-weight:bold; font-size:24px">Sign In</p>
				<form action="" method="post">
					<div class="tabledv">
						<div class="registername">Email Address:</div>
						<div class="registerfield"><input type="text" name="loginname" id="loginname" maxlength="30"
								size="29" value="" autofocus="autofocus" /></div>
					</div>
					<div class="tabledv">
						<div class="registername">Password:</div>
						<div class="registerfield"><input type="password" name="password" id="password" maxlength="30"
								size="29" value="" autofocus="autofocus" /></div>
					</div>
					<div class="tabledv">
						<div class="registername"></div>
						<div class="registerfield"><input name="login" type="submit" value="Log In" /></div>
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
			// Check if the form is submitted
			if (isset($_REQUEST['login'])) {
				$email = $_REQUEST['loginname'];
				$userPasswordword = $_REQUEST['password'];
				// Create an instance of dbClass
				$dbconnect = new dbClass();
				// Get the database connection
				$connection = $dbconnect->getConnection();
				// Prepare the SQL statement
				$stmt = $connection->prepare("SELECT * FROM student WHERE student_email = ? AND student_password = ?");
				$stmt->bind_param("ss", $email, $userPasswordword);
				// Execute the statement
				$stmt->execute();
				// Get the result
				$result = $stmt->get_result();
				// Fetch the data
				$userData = $result->fetch_assoc();
				// Check if user exists
				if ($userData) {
					//session_regenerate_id();
					$_SESSION['student_email'] = $userData['student_email'];
					$_SESSION['student_id'] = $userData['student_id'];
					session_write_close();
					// Redirect to home page
					echo '<script language="JavaScript">window.location="home.php";</script>';
				} else {
					echo "Invalid login credentials.";
				}
				// Close the statement and connection
				$stmt->close();
				$connection->close();
			}
			?>
			<div class="cleaner"></div>
			<div class="cleaner"></div>
		</div> <!-- end of templatemo_main -->
		<div id="templatemo_main_bottom"></div>
		<?php include ("footer.php"); ?> <!-- end of templatemo_footer -->
	</div>
	<!-- end of wrapper -->
</body>

</html>