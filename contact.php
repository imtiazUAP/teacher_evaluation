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
            <div id="templatemo_content">
                <h2>Contact Information</h2>
                <p> For any kind of inquiry please contact us. </p>
                <div class="cleaner_h40"></div>
                <div class="col_w250 float_l">
                    <h5>Contact Us</h5>
                    Dhanmondi 4/A, <br />
                    Dhanmondi, 10120<br />
                    Dhaka<br />
                    <br />
                    Tel: XXXXXXXXXXXXXXX<br />
                    Fax: XXXXXXXXXXXXXXXXXXXXXXXXX
                </div>
                <div class="col_w250 float_r">
                    <h5>Developer Team</h5>
                    Samita & Zinia, <br />
                    Dhanmondi 4/A, Dhaka<br />
                    Bangladesh<br />
                    <br />
                    Tel: 00000000000000<br />
                    Fax: XXXXXXXXXXXXXXXXXXX
                </div>
                <div class="cleaner_h50"></div>
                <div id="contact_form">
                    <h4>Send us a Feedback:</h4>
                    <form method="post" name="contact" action="#">
                        <label for="author">Name:</label> <input type="text" id="author" name="author"
                            class="required input_field" />
                        <div class="cleaner_h10"></div>
                        <label for="email">Email:</label> <input type="text" id="email" name="email"
                            class="validate-email required input_field" />
                        <div class="cleaner_h10"></div>
                        <label for="phone">Phone:</label> <input type="text" name="phone" id="phone"
                            class="input_field" />
                        <div class="cleaner_h10"></div>
                        <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0"
                            class="required"></textarea>
                        <div class="cleaner_h10"></div>
                        <input type="submit" class="submit_btn" name="submit" id="submit" value="Send" />
                        <input type="reset" class="submit_btn" name="reset" id="reset" value="Reset" />
                    </form>
                </div>
            </div><!-- end of content -->
            <div id="templatemo_sidebar">
                <h2>Our Services</h2>
                <ul class="templatemo_list">
                    <li><a href="#">Morbi sed nulla ac est cursus suscipit</a></li>
                    <li><a href="#">Curabitur ullamcorper nibh nisi sed</a></li>
                    <li><a href="#">Pellentesque adipiscing sollicitudin</a></li>
                    <li><a href="#">Cras rutrum ullamcorper metus vitae</a></li>
                    <li><a href="#">Sed nec eros egestas nisl tincidunt </a></li>
                </ul>
                <div class="button"><a href="services.html">All Services</a></div>
                <div class="cleaner_h40"></div>
                <h2>Testimonial</h2>
                <blockquote>
                    <p> Curabitur sem ante, condimentum non, cursus quis, eleifend non, libero. Nunc a nulla.
                        Suspendisse vitae orci a ligula egestas bibendum. Vestibulum ultrices. Pellentesque tempus
                        sapien nec sem commodo ullamcorper.</p>
                    <cite>George - <span>Designer</span></cite>
                </blockquote>
            </div>
            <div class="cleaner"></div>
        </div> <!-- end of templatemo_main -->
        <div id="templatemo_main_bottom"></div>
        <?php include ("footer.php"); ?> <!-- end of templatemo_footer -->
    </div>
    <!-- end of wrapper -->
</body>

</html>