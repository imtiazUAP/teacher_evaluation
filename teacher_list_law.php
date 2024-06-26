<?php
session_start();
include ("dbconnect.php");
?>
<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <?php include ("head.php"); ?>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Blue Motion Services</title>
  <meta name="keywords" content="blue motion, services, 2-column, icons, free template, website, html css" />
  <meta name="description" content="Blue Motion Template [services page] is provided by templatemo.com for everyone." />
  <link href="templatemo_style.css" rel="stylesheet" type="text/css" />
  <script language="javascript" type="text/javascript">
    function clearText(field) {
      if (field.defaultValue == field.value) field.value = '';
      else if (field.value == '') field.value = field.defaultValue;
    }
  </script>
</head>

<body>
  s
  <div id="templatemo_wrapper">
    <?php include ("header.php"); ?>
    <?php include ("menu_header.php"); ?>
    <div id="templatemo_main_top"></div>
    <div id="templatemo_main">
      <table class="hoverTable" width="900" border="1"
        style=" padding-bottom:40px;padding-left:40px;padding-right:40px;">
        <tr align="center">
          <td width="50" height="50" bgcolor="#516E7C" style="color:#FFFFFF">Teacher Code</td>
          <td width="150" bgcolor="#516E7C" style="color:#FFFFFF">Teacher Name</td>
          <td width="150" bgcolor="#516E7C" style="color:#FFFFFF">Photo</td>
          <td width="80" bgcolor="#516E7C" style="color:#FFFFFF">Rating this Semester</td>
        </tr>
        <?php
        $dbconnect = new dbClass();
        $connection = $dbconnect->getConnection();
        // Prepare the SQL statement
        $strquery = "SELECT * FROM teachers WHERE dept_id = ?";
        $stmt = $connection->prepare($strquery);
        $dept_id = 5;
        $stmt->bind_param("i", $dept_id);
        // Execute the statement
        $stmt->execute();
        $results = $stmt->get_result();
        // Loop through the results
        while ($row = $results->fetch_assoc()) {
          $teachers_id = $row['teachers_id'];
          $teachers_code = $row['teachers_code'];
          $teachers_name = $row['teachers_name'];
          $teachers_photo = $row['teachers_photo'];
          ?>
          <tr align="center">
            <td height="40"><?php echo $teachers_code; ?></td>
            <td>
              <?php echo "<a href='single_result.php?teachers_code=" . $teachers_code . "'>$teachers_name</a>"; ?>
            </td>
            <td width="100"><img src="<?php echo $teachers_photo; ?>" style="height:100px;"></td>
            <td>4.2</td> <!-- Placeholder for teacher rating -->
          </tr>
          <?php
        }
        // Close the statement and connection
        $stmt->close();
        ?>
      </table>
      <div class="cleaner"></div>
      <div class="cleaner"></div>
    </div> <!-- end of templatemo_main -->
    <div id="templatemo_main_bottom"></div>
    <?php include ("footer.php"); ?>
    <!-- end of templatemo_footer -->
  </div>
  <!-- end of wrapper -->
</body>

</html>