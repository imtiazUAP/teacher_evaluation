<?php
session_start();
include("dbconnect.php");

if (empty($_SESSION['student_email'])) {
    header("Location: index.php");
    exit;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include("head.php"); ?>
</head>

<body>
    <div id="templatemo_wrapper">
        <?php include("header.php"); ?>
        <?php include("menu_header.php"); ?>
        <div id="templatemo_main_top"></div>
        <div id="templatemo_main">
            <div style="background-color:#d7d7d7;margin:auto">
                <?php
                $strTo = $_POST["Email"];
                $strSubject = $_POST["txtSubject"];
                $strMessage = nl2br($_POST["txtDescription"]);
                $strSid = md5(uniqid(time()));
                $strHeader = "From: " . $_POST["txtFormName"] . "<" . $_POST["txtFormEmail"] . ">\nReply-To: " . $_POST["txtFormEmail"] . "\nX-Mailer: PHP/" . phpversion() . "\n";
                $strHeader .= "MIME-Version: 1.0\n";
                $strHeader .= "Content-Type: multipart/mixed; boundary=\"" . $strSid . "\"\n\n";
                $strHeader .= "This is a multi-part message in MIME format.\n";
                $strHeader .= "--" . $strSid . "\n";
                $strHeader .= "Content-type: text/html; charset=utf-8\n";
                $strHeader .= "Content-Transfer-Encoding: 7bit\n\n";
                $strHeader .= $strMessage . "\n\n";

                if ($_FILES["fileAttach"]["name"] != "") {
                    $strFilesName = $_FILES["fileAttach"]["name"];
                    $strContent = chunk_split(base64_encode(file_get_contents($_FILES["fileAttach"]["tmp_name"])));
                    $strHeader .= "--" . $strSid . "\n";
                    $strHeader .= "Content-Type: application/octet-stream; name=\"" . $strFilesName . "\"\n";
                    $strHeader .= "Content-Transfer-Encoding: base64\n";
                    $strHeader .= "Content-Disposition: attachment; filename=\"" . $strFilesName . "\"\n\n";
                    $strHeader .= $strContent . "\n\n";
                }

                $flgSend = @mail($strTo, $strSubject, null, $strHeader); // @ = No Show Error //
                if ($flgSend) {
                    echo "Mail sent successfully. Thank you!";
                } else {
                    echo "Sorry! Unable to send mail.";
                }
                ?>
            </div>
            <div class="cleaner"></div>
            <div class="cleaner"></div>
        </div> <!-- end of templatemo_main -->
        <div id="templatemo_main_bottom"></div>
        <?php include("footer.php"); ?> <!-- end of templatemo_footer -->
    </div>
    <!-- end of wrapper -->
</body>

</html>
