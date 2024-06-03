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
            <h2>Our Partners</h2>
            <p><em> Pellentesque elementum enim a augue. Donec in nisi. Etiam sit amet turpis. Duis nulla diam, posuere
                    ac, varius id, ullamcorper sit amet, libero. Nam sodales, pede vel dapibus lobortis, ipsum diam
                    molestie risus, a vulputate risus nisl pulvinar lacus. Cum sociis natoque penatibus et magnis dis
                    parturient montes, nascetur ridiculus mus. Praesent aliquam velit a magna sodales quis elementum
                    ipsum auctor. <strong>Validate</strong> <a href="http://validator.w3.org/check?uri=referer"
                        rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer"
                        rel="nofollow">CSS</a>.</em></p>
            <div class="cleaner_h30"></div>
            <div class="col_w420 float_l">
                <h2> <a href="http://www.flashmo.com">Flash Templates</a></h2>
                <div class="image_wrapper fl_img"><img src="images/flashmo.jpg" alt="image" /></div>
                <p>Morbi sed nulla ac est cursus suscipit eu ac lectus. Curabitur ullamcorper nibh nisi, sed eleifend
                    dolor. Pellentesque adipiscing sollicitudin sapien nec aliquet. <a href="http://www.flashmo.com"
                        target="_parent">Flash Templates</a></p>
                <div class="button"><a href="http://www.flashmo.com" target="_parent">Visit</a></div>
            </div>
            <div class="col_w420 float_r">
                <h2><a href="http://www.templatemo.com">Website Templates</a></h2>
                <div class="image_wrapper fl_img"><img src="images/templatemo.jpg" alt="image" /></div>
                <p>Proin luctus placerat arcu, eget vehicula metus rhoncus ut. Fusce pharetra pharetra venenatis. Sed
                    condimentum ornare ipsum, nec gravida sem sollicitudin quis.</p>
                <div class="button"><a href="http://www.templatemo.com" target="_parent">Visit</a></div>
            </div>
            <div class="cleaner_h60"></div>
            <div class="col_w420 float_l">
                <h2><a href="http://www.koflash.com">Flash Sites Gallery</a></h2>
                <div class="image_wrapper fl_img"><img src="images/koflash.jpg" alt="image" /></div>
                <p>Vivamus interdum, tortor at pellentesque pulvinar, diam quam blandit nulla, non faucibus nisi metus
                    sit amet neque. Etiam eu ipsum a arcu sodales consequat sit amet at orci.</p>
                <div class="button"><a href="http://www.koflash.com" target="_parent">Visit</a></div>
            </div>
            <div class="col_w420 float_r">
                <h2><a href="www.webdesignmo.com/blog">Web Design Blog</a></h2>
                <div class="image_wrapper fl_img"><img src="images/webdesignmo.jpg" alt="image" /></div>
                <p>Proin luctus placerat arcu, eget vehicula metus rhoncus ut. Fusce pharetra pharetra venenatis. Sed
                    condimentum ornare ipsum, nec gravida sem sollicitudin quis.</p>
                <div class="button"><a href="http://www.webdesignmo.com/blog" target="_parent">Visit</a></div>
            </div>
            <div class="cleaner"></div>
        </div> <!-- end of templatemo_main -->
        <div id="templatemo_main_bottom"></div>
        <?php include ("footer.php"); ?><!-- end of templatemo_footer -->
    </div>
    <!-- end of wrapper -->
</body>

</html>