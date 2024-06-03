<?php
session_start();
include ("dbconnect.php");
?>
<?php
$b = $_SESSION['student_email'];
$dbconnect = new dbClass();
$connection = $dbconnect->getConnection();
$stmt = $connection->prepare("select * from student where student_email='{$b}'");
$stmt->execute();
$result = $stmt->get_result();
$userData = $result->fetch_assoc();
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
			<form action="entry_save.php">
				<table>
					<tr>
						<td>Teachers Name: </td>
						<td>
							<select name="teachers_code" id="teachers_code" selected="">
								<?php
								$stmt = $connection->prepare("SELECT course_id,teachers_name,teachers.teachers_code,teachers.teachers_id FROM teachers INNER JOIN course ON course.teachers_code=teachers.teachers_code WHERE semester_id='$userData[semester_id]'");
								$stmt->execute();
								$teacherResult = $stmt->get_result();
								while ($rows = $teacherResult->fetch_assoc()) {
									if ($row["teachers_code"] == $rows["teachers_code"]) {
										$selected = 'selected="selected"';
									} else {
										$selected = '';
									}
									print ("<option value=\"" . $rows["teachers_code"] . "\" " . $selected . "  >" . $rows["teachers_name"] . "</option>");
								}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Course Code: </td>
						<td>
							<select name="course_id" id="course_id" selected="">
								<?php
								$stmt = $connection->prepare("SELECT course_id,course_code,course_name FROM course WHERE semester_id='$userData[semester_id]'");
								$stmt->execute();
								$courseResult = $stmt->get_result();
								while ($rows = $courseResult->fetch_assoc()) {
									if ($row["course_id"] == $rows["course_id"]) {
										$selected = 'selected="selected"';
									} else {
										$selected = '';
									}
									print ("<option value=\"" . $rows["course_id"] . "\" " . $selected . "  >" . $rows["course_code"] . "</option>");
								}
								?>
							</select>
						</td>
					</tr>
				</table>
				<br />
				<br />
				<p style="color:#0886C1">Part1: On Instructor Performance( A=Strongly agree; B=Agree; C=Neutral;
					D=Disagree; E=Strongly disagree )</p>
				<table>
					<tr>
						<td>
							<label for="female">1. Instructor was adequately prepared for the class </label>
						</td>
						<td style="color:#FF0000">
							<input type="radio" name="question_1" value="5">A
							<input type="radio" name="question_1" value="4">B
							<input type="radio" name="question_1" value="3">C
							<input type="radio" name="question_1" value="2">D
							<input type="radio" name="question_1" value="1">E
						</td>
					</tr>
					<tr>
						<td>
							<label for="female">2. Instructor was able to communicate in the class effectively </label>
						</td>
						<td style="color:#FF0000">
							<input type="radio" name="question_2" value="5">A
							<input type="radio" name="question_2" value="4">B
							<input type="radio" name="question_2" value="3">C
							<input type="radio" name="question_2" value="2">D
							<input type="radio" name="question_2" value="1">E
						</td>
					</tr>
					<tr>
						<td>
							<label for="female">3. Instructor was available and helpful beyond the class time </label>
						</td>
						<td style="color:#FF0000">
							<input type="radio" name="question_3" value="5">A
							<input type="radio" name="question_3" value="4">B
							<input type="radio" name="question_3" value="3">C
							<input type="radio" name="question_3" value="2">D
							<input type="radio" name="question_3" value="1">E
						</td>
					</tr>
					<tr>
						<td>
							<label for="female">4. Instructor made effective use of teaching aids </label>
						</td>
						<td style="color:#FF0000">
							<input type="radio" name="question_4" value="5">A
							<input type="radio" name="question_4" value="4">B
							<input type="radio" name="question_4" value="3">C
							<input type="radio" name="question_4" value="2">D
							<input type="radio" name="question_4" value="1">E
						</td>
					</tr>
					<tr>
						<td>
							<label for="female">5. Instructor was abble to hold attention of the students throughout the
								class </label>
						</td>
						<td style="color:#FF0000">
							<input type="radio" name="question_5" value="5">A
							<input type="radio" name="question_5" value="4">B
							<input type="radio" name="question_5" value="3">C
							<input type="radio" name="question_5" value="2">D
							<input type="radio" name="question_5" value="1">E
						</td>
					</tr>
					<tr>
						<td>
							<label for="female">6. The exams,quizzes and assignments covered the contents specified in
								the syllebus </label>
						</td>
						<td style="color:#FF0000">
							<input type="radio" name="question_6" value="5">A
							<input type="radio" name="question_6" value="4">B
							<input type="radio" name="question_6" value="3">C
							<input type="radio" name="question_6" value="2">D
							<input type="radio" name="question_6" value="1">E
						</td>
					</tr>
					<tr>
						<td>
							<label for="female">7. Instructor motivated me to think more critically and stimulated
								intellectual curiosity </label>
						</td>
						<td style="color:#FF0000">
							<input type="radio" name="question_7" value="5">A
							<input type="radio" name="question_7" value="4">B
							<input type="radio" name="question_7" value="3">C
							<input type="radio" name="question_7" value="2">D
							<input type="radio" name="question_7" value="1">E
						</td>
					</tr>
					<tr>
						<td>
							<label for="female">8. Instructor encouraged participation,discussion and questions from
								students </label>
						</td>
						<td style="color:#FF0000">
							<input type="radio" name="question_8" value="5">A
							<input type="radio" name="question_8" value="4">B
							<input type="radio" name="question_8" value="3">C
							<input type="radio" name="question_8" value="2">D
							<input type="radio" name="question_8" value="1">E
						</td>
					</tr>
					<tr>
						<td>
							<label for="female">9. Instructor was fair in evaluating and grading the students </label>
						</td>
						<td style="color:#FF0000">
							<input type="radio" name="question_9" value="5">A
							<input type="radio" name="question_9" value="4">B
							<input type="radio" name="question_9" value="3">C
							<input type="radio" name="question_9" value="2">D
							<input type="radio" name="question_9" value="1">E
						</td>
					</tr>
					<tr>
						<td>
							<label for="female">10. Instructor maintained regular class schedule </label>
						</td>
						<td style="color:#FF0000">
							<input type="radio" name="question_10" value="5">A
							<input type="radio" name="question_10" value="4">B
							<input type="radio" name="question_10" value="3">C
							<input type="radio" name="question_10" value="2">D
							<input type="radio" name="question_10" value="1">E
						</td>
					</tr>
					<tr>
						<td>
							<label for="female">11. Feedback given on the assignments was effective </label>
						</td>
						<td style="color:#FF0000">
							<input type="radio" name="question_11" value="5">A
							<input type="radio" name="question_11" value="4">B
							<input type="radio" name="question_11" value="3">C
							<input type="radio" name="question_11" value="2">D
							<input type="radio" name="question_11" value="1">E
						</td>
					</tr>
					<tr>
						<td>
							<label for="female">12. The contents specified in the syllabus for the course were actually
								covered </label>
						</td>
						<td style="color:#FF0000">
							<input type="radio" name="question_12" value="5">A
							<input type="radio" name="question_12" value="4">B
							<input type="radio" name="question_12" value="3">C
							<input type="radio" name="question_12" value="2">D
							<input type="radio" name="question_12" value="1">E
						</td>
					</tr>
				</table>
				<br />
				<br />
				<p>General comments on Instructor: </p>
				<textarea name="general_comments_on_instructor" rows="4" cols="80"></textarea>
				<br />
				<br />
				<p style="color:#0886C1">Part2: Organization of the Course( A=Strongly agree; B=Agree; C=Neutral;
					D=Disagree; E=Strongly disagree )</p>
				<table>
					<tr>
						<td>
							<label for="female">13. The course provided an oppotunity to develop relevant learning and
								competencies </label>
						</td>
						<td>
							<input type="radio" name="question_13" value="5">A
							<input type="radio" name="question_13" value="4">B
							<input type="radio" name="question_13" value="3">C
							<input type="radio" name="question_13" value="2">D
							<input type="radio" name="question_13" value="1">E
						</td>
					</tr>
					<tr>
						<td>
							<label for="female">14. Text books/reading metarials used in the course were appropriate
							</label>
						</td>
						<td>
							<input type="radio" name="question_14" value="5">A
							<input type="radio" name="question_14" value="4">B
							<input type="radio" name="question_14" value="3">C
							<input type="radio" name="question_14" value="2">D
							<input type="radio" name="question_14" value="1">E
						</td>
					</tr>
					<tr>
						<td>
							<label for="female">15. Total time allocated for the course was appropriate to cover all the
								contents </label>
						</td>
						<td>
							<input type="radio" name="question_15" value="5">A
							<input type="radio" name="question_15" value="4">B
							<input type="radio" name="question_15" value="3">C
							<input type="radio" name="question_15" value="2">D
							<input type="radio" name="question_15" value="1">E
						</td>
					</tr>
				</table>
				<br />
				<br />
				<p>General comments on Course: </p>
				<textarea name="general_comments_on_instructor" rows="4" cols="80"></textarea>
				<p>
					<input type="Submit" value="Submit" />
				</p>
			</form>
			<br />
			<br />
			<div class="cleaner"></div>
		</div> <!-- end of templatemo_main -->
		<div id="templatemo_main_bottom"></div>
		<?php include ("footer.php"); ?> <!-- end of templatemo_footer -->
	</div>
	<!-- end of wrapper -->
</body>

</html>