<?php
 session_start();
  error_reporting(0);
 include("dbconnect.php");

  ?>
<?php
$b=$_SESSION['student_email'];
//$c=$_SESSION['userid'];


$userrole = mysql_query("select * from student where student_email='{$b}'");
$userdata = mysql_fetch_assoc($userrole);
//echo $userdata['admin'];




if (empty($_SESSION['student_email'])) {
    ?>
    <script language="JavaScript">
        window.location="index.php";
    </script><? } else { ?>
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
        
        	<div id="templatemo_content">
                
                <div class="news_box">
                    <h2>Morbi sed nulla ac est cursus</h2>		
                    <div class="news_info">May 30th in <a href="http://www.templatemo.com" target="_parent">Web Design</a> by <a href="http://www.templatemo.com" target="_parent">George</a></div>
                    
                    <div class="image_wrapper fl_img"><img src="images/templatemo_image_03.jpg" alt="image" /></div>
                    
                    
                    <p align="justify">Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>. Curabitur ullamcorper neque et justo aliquet at pretium orci  scelerisque. Mauris sodales tristique dignissim. Phasellus ut augue  nibh. Aliquam vel libero sit amet mauris posuere ullamcorper  sollicitudin ac eros. Vestibulum auctor euismod mi et tincidunt. Mauris  vitae ipsum diam, sagittis tempor velit.</p>
                    <div class="cleaner"></div>
                    <a href="#">Continue reading...</a> | <a href="subpage.html">Comments (122)</a>
                </div>
                
                <div class="news_box">
                    <h2>Fusce pharetra pharetra venenatis</h2>
                    <div class="news_info">May 28th in <a href="http://www.templatemo.com" target="_parent">Web Templates</a> by <a href="http://www.templatemo.com" target="_parent">Michael</a></div>
                    
                    <div class="image_wrapper fl_img"><img src="images/templatemo_image_04.jpg" alt="image" /></div>
                    
                    <p align="justify">Morbi sed nulla ac est cursus suscipit eu ac lectus. Curabitur  ullamcorper nibh nisi, sed eleifend dolor. Pellentesque adipiscing  sollicitudin sapien nec aliquet. Cras rutrum ullamcorper metus, vitae  consectetur dolor vulputate a. Sed nec eros egestas nisl tincidunt  aliquet at in est. Proin luctus placerat arcu, eget vehicula metus  rhoncus ut. <a href="http://www.flashmo.com" target="_parent">Flash Templates</a></p>
                  <div class="cleaner"></div>
                    <a href="#">Continue reading...</a> | <a href="subpage.html">Comments (248)</a>
                </div>
                
                <div class="news_box">
                    <h2>Sed condimentum ornare ipsum</h2>
                    
                    <div class="news_info">May 16th in <a href="http://www.templatemo.com" target="_parent">Web Bloggers</a> by <a href="http://www.templatemo.com" target="_parent">John</a></div>
                    
                    <div class="image_wrapper fl_img"><img src="images/templatemo_image_05.jpg" alt="image" /></div>
                    
                    <p align="justify">Nam malesuada bibendum metus ac faucibus. Integer semper, felis eget  imperdiet commodo, nunc augue luctus sem, a tincidunt dolor nisl vel  massa. Vivamus interdum, tortor at pellentesque pulvinar, diam quam  blandit nulla, non faucibus nisi metus sit amet neque. Etiam eu ipsum a  arcu sodales consequat sit amet at orci. </p>
                    <div class="cleaner"></div>
                    <a href="#">Continue reading...</a> | <a href="subpage.html">Comments (376)</a>
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
                      <p> Curabitur sem ante, condimentum non, cursus quis, eleifend non, libero. Nunc a nulla. Suspendisse vitae orci a ligula egestas bibendum. Vestibulum ultrices. Pellentesque tempus sapien nec sem commodo ullamcorper.</p>
                     <cite>George - <span>Designer</span></cite>
                </blockquote>
                    
            
            </div>
            
        <div class="cleaner"></div>
        </div> <!-- end of templatemo_main -->
        <div id="templatemo_main_bottom"></div>
   		
        
<?php include("footer.php"); ?> <!-- end of templatemo_footer -->
    
    </div> 
	<!-- end of wrapper -->



</body>
</html>
    <?php
}?>