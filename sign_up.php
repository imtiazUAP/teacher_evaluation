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
               <form action="sign_up_save.php" method="post" enctype="multipart/form-data">
                    <table align="center">
                         <tr>
                              <td>
                                   <label for="name" class="signup_field" data-icon="u">Your Registration:
                                        (mandatory)</label>
                              </td>
                              <td>
                                   <input id="lastnamesignup" name="reg" required="required" type="text"
                                        placeholder="11201099" />
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <label for="name" class="signup_field" data-icon="u">Your Name:</label>
                              </td>
                              <td>
                                   <input id="lastnamesignup" name="name" required="required" type="text"
                                        placeholder="Imtiaz Ahmed" />
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <label for="name" class="signup_field" data-icon="u">Department:</label>
                              </td>
                              <td>
                                   <input id="lastnamesignup" name="department" required="required" type="text"
                                        placeholder="CSE Department" />
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <label for="email" class="signup_field" data-icon="u">Your E Mail:</label>
                              </td>
                              <td>
                                   <input id="lastnamesignup" name="email" required="required" type="text"
                                        placeholder="example@yahoo.com" />
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <label for="Portrait" class="signup_field" data-icon="u">Password:</label>
                              </td>
                              <td>
                                   <input id="file" name="password" required="required" type="password"
                                        placeholder="your desired password" />
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <label for="email" class="signup_field" data-icon="u">Batch:</label>
                              </td>
                              <td>
                                   <input id="lastnamesignup" name="batch" required="required" type="text"
                                        placeholder="33th Batch" />
                              </td>
                         </tr>
                         <tr>
                              <td>Semester: (mandatory)</td>
                              <td>
                                   <select name="semester_id" id="semester_id">
                                        <?php
                                        $dbconnect = new dbClass();
                                        $query = "SELECT DISTINCT semester_id, semester_name FROM semester ORDER BY semester_id";
                                        $fieldValues = $dbconnect->myQuery($query);
                                        foreach ($fieldValues as $fieldValue) {
                                             print ("<option value=\"" . $fieldValue['semester_id'] . "\">" . $fieldValue['semester_name'] . "</option>");
                                        }
                                        ?>
                                   </select>
                              </td>
                         </tr>
                    </table>
                    <br><br>
                    <p class="signin_button">
                         <input type="Submit" value="Register" />
                    </p>
               </form>
          </div>
          <div class="cleaner"></div>
          <div class="cleaner"></div>
          <div id="templatemo_main_bottom"></div>
          <?php include ("footer.php"); ?>
</body>

</html>