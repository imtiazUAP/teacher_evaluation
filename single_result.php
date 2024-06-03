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
		<?php
		$dbconnect = new dbClass();
		$connection = $dbconnect->getConnection();
		// Prepare the SQL statement
		$strquery = "SELECT entry.entry_id, entry.course_id, entry.teachers_code,
             AVG(entry.question_1) as question_1,
             AVG(entry.question_2) as question_2,
             AVG(entry.question_3) as question_3,
             AVG(entry.question_4) as question_4,
             AVG(entry.question_5) as question_5,
             AVG(entry.question_6) as question_6,
             AVG(entry.question_7) as question_7,
             AVG(entry.question_8) as question_8,
             AVG(entry.question_9) as question_9,
             AVG(entry.question_10) as question_10,
             AVG(entry.question_11) as question_11,
             AVG(entry.question_12) as question_12,
             teachers.*, department.dept_name
             FROM entry
             INNER JOIN teachers ON entry.teachers_code = teachers.teachers_code
             INNER JOIN department ON teachers.dept_id = department.dept_id
             WHERE entry.teachers_code = ?";
		$stmt = $connection->prepare($strquery);
		$stmt->bind_param("s", $_GET["teachers_code"]);
		// Execute the statement
		$stmt->execute();
		$results = $stmt->get_result();
		// Get the number of rows
		$num = $results->num_rows;
		// Fetch the data
		$row = $results->fetch_assoc();
		$teachers_name = $row["teachers_name"];
		$teachers_code = $row["teachers_code"];
		$teachers_contact = $row["teachers_contact"];
		$teachers_email = $row["teachers_email"];
		$teachers_photo = $row["teachers_photo"];
		$dept_name = $row["dept_name"];
		$question_1 = $row["question_1"];
		$question_2 = $row["question_2"];
		$question_3 = $row["question_3"];
		$question_4 = $row["question_4"];
		$question_5 = $row["question_5"];
		$question_6 = $row["question_6"];
		$question_7 = $row["question_7"];
		$question_8 = $row["question_8"];
		$question_9 = $row["question_9"];
		$question_10 = $row["question_10"];
		$question_11 = $row["question_11"];
		$question_12 = $row["question_12"];
		// Close the statement
		$stmt->close();
		?>
		<div id="templatemo_main_top"></div>
		<div id="templatemo_main">
			<div align="center" style=" font-size:18px">Average Rating of this Semester is 4.3 out of 5</div>
			<table>
				<tr>
					<td width="400px">
						<img src="<?php echo $teachers_photo; ?>" alt="Mountain View" style="width:200px;height:228px">
						<br />
						Name: <?php echo $teachers_name; ?>
						<br />
						Teacher Code: <?php echo $teachers_code; ?>
						<br />
						Dept: <?php echo $dept_name; ?>
						<br />
						Contact: <?php echo $teachers_contact; ?>
						<br />
						Email: <?php echo $teachers_email; ?>
						<br />
						<li><a href="send_email.php">Send him a Email</a></li>
					</td>
					<td width="400px">
						<!-- Barchart Starts here -->
						<div id="my_chart" style="width: 400px; height: 500px"></div>
					</td>
				</tr>
			</table>
			<script type="text/javascript" src="https://www.google.com/jsapi"></script>
			<script>
				google.load("visualization", "1", { packages: ["corechart"] });
				google.setOnLoadCallback(drawChart);
				function drawChart() {
					// Create and populate the data table.
					var data = google.visualization.arrayToDataTable([
						['Questions', 'Result out of 5'],
						['1. Instructor was adequately prepared for the class', <?php echo $question_1; ?>],
						['2. Instructor was able to communicate in the class effectively', <?php echo $question_2; ?>],
						['3. Instructor was available and helpful beyond the class time', <?php echo $question_3; ?>],
						['4. Instructor made effective use of teaching aids', <?php echo $question_4; ?>],
						['5. Instructor was abble to hold attention of the students throughout the class', <?php echo $question_5; ?>],
						['6. The exams,quizzes and assignments covered the contents specified in the syllebus', <?php echo $question_6; ?>],
						['7. Instructor motivated me to think more critically and stimulated intellectual curiosity', <?php echo $question_7; ?>],
						['8. Instructor encouraged participation,discussion and questions from students', <?php echo $question_8; ?>],
						['9. Instructor was fair in evaluating and grading the students', <?php echo $question_9; ?>],
						['10. Instructor maintained regular class schedule', <?php echo $question_10; ?>],
						['11. Feedback given on the assignments was effective', <?php echo $question_11; ?>],
						['12. The contents specified in the syllabus for the course were actually covered', <?php echo $question_12; ?>]
					]);
					var options = {
						title: 'Teacher Evaluation Result in Bar Chart...'
					};
					// Create and draw the visualization.
					new google.visualization.BarChart(
						document.getElementById('my_chart')).draw(data, options);
				}
			</script>
			<!-- Barchart Ends here -->
			<table>
				<tr>
					<td>
						<label>1. Instructor was adequately prepared for the class:</label>
					</td>
					<td><?php echo $question_1; ?>
					</td>
				</tr>
				<tr>
					<td>
						<label>2. Instructor was able to communicate in the class effectively</label>
					</td>
					<td><?php echo $question_2; ?>
					</td>
				</tr>
				<tr>
					<td>
						<label>3. Instructor was available and helpful beyond the class time</label>
					</td>
					<td><?php echo $question_3; ?>
					</td>
				</tr>
				<tr>
					<td>
						<label>4. Instructor made effective use of teaching aids</label>
					</td>
					<td><?php echo $question_4; ?>
					</td>
				</tr>
				<tr>
					<td>
						<label>5. Instructor was abble to hold attention of the students throughout the class</label>
					</td>
					<td><?php echo $question_5; ?>
					</td>
				</tr>
				<tr>
					<td>
						<label>6. The exams,quizzes and assignments covered the contents specified in the
							syllebus</label>
					</td>
					<td><?php echo $question_6; ?>
					</td>
				</tr>
				<tr>
					<td>
						<label>7. Instructor motivated me to think more critically and stimulated intellectual
							curiosity</label>
					</td>
					<td><?php echo $question_7; ?>
					</td>
				</tr>
				<tr>
					<td>
						<label>8. Instructor encouraged participation,discussion and questions from students</label>
					</td>
					<td><?php echo $question_8; ?>
					</td>
				</tr>
				<tr>
					<td>
						<label>9. Instructor was fair in evaluating and grading the students</label>
					</td>
					<td><?php echo $question_9; ?>
					</td>
				</tr>
				<tr>
					<td>
						<label>10. Instructor maintained regular class schedule</label>
					</td>
					<td><?php echo $question_10; ?>
					</td>
				</tr>
				<tr>
					<td>
						<label>11. Feedback given on the assignments was effective</label>
					</td>
					<td><?php echo $question_11; ?>
					</td>
				</tr>
				<tr>
					<td>
						<label>12. The contents specified in the syllabus for the course were actually covered</label>
					</td>
					<td><?php echo $question_12; ?>
					</td>
				</tr>
			</table>
			<br />
			<br />
			<div>
				<h3>History:</h1>
					Fall-2011
					<br />
					Spring-2011
					<br />
					Fall-2012
					<br />
					Spring-2012
					<br />
					Fall-2013
					<br />
					Spring-2014
					<br />
			</div>
			<div class="cleaner"></div>
			<div class="cleaner"></div>
		</div> <!-- end of templatemo_main -->
		<div id="templatemo_main_bottom"></div>
		<?php include ("footer.php"); ?> <!-- end of templatemo_footer -->
	</div>
	<!-- end of wrapper -->
</body>

</html>