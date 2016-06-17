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

?>






<!DOCTYPE html>
<html>
<head>
<?php include("head.php"); ?>
</head>
<body> 



  <div id="templatemo_wrapper">
    
    <?php include("header.php"); ?> 	
                     
   <?php include("menu_header.php"); 
   ?> 	
      
      	  <div id="templatemo_main_top"></div>
          <div id="templatemo_main">
        <body style="background-color:#d7d7d7;margin:auto">

	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
		<li><img src="data1/images/3.jpg" alt="3" title="3" id="wows1_0"/></li>
		<li><a href="http://wowslider.com"><img src="data1/images/1.jpg" alt="joomla slider" title="1" id="wows1_1"/></a></li>
		<li><img src="data1/images/2.jpg" alt="2" title="2" id="wows1_2"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="3"><span><img src="data1/tooltips/3.jpg" alt="3"/>1</span></a>
		<a href="#" title="1"><span><img src="data1/tooltips/1.jpg" alt="1"/>2</span></a>
		<a href="#" title="2"><span><img src="data1/tooltips/2.jpg" alt="2"/>3</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">jquery slider</a> by WOWSlider.com v8.2</div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
	
              
                 This is Teacher Evaluation System Homepage
				 
				 <table>
				 <tr>
				 <td><h3>Paragraph_1</h3><div class="image_wrapper fl_img"><img src="images/flashmo.jpg" alt="image" /></div><p>Agile model
Agile development model is also a type of Incremental model. Software is developed in incremental, rapid cycles. This results in small incremental releases with each release building on previous functionality. Each release is thoroughly tested to ensure software quality is maintained. It is used for time critical applications.  Extreme Programming (XP) is currently one of the most well known agile development life cycle model.


</p></td>
				 <td><h3>Paragraph_2</h3><div class="image_wrapper fl_img"><img src="images/webdesignmo.jpg" alt="image" /></div><p>Disadvantages of Agile model:
•	In case of some software deliverables, especially the large ones, it is difficult to assess the effort required at the beginning of the software development life cycle.
•	There is lack of emphasis on necessary designing and documentation.
•	The project can easily get taken off track if the customer representative is not clear what final outcome that they want.
•	Only senior programmers are capable of taking the kind of decisions required during the development process. Hence it has no place for newbie programmers, unless combined with experienced resources.
</p></td>
				 </tr>
				 				 <tr>
				 <td><h3>Paragraph_3</h3><p>
•	Incremental model?
In incremental model the whole requirement is divided into various builds. Multiple development cycles take place here, making the life cycle a “multi-waterfall” cycle.  Cycles are divided up into smaller, more easily managed modules.  Each module passes through the requirements, design, implementation and testing phases. A working version of software is produced during the first module, so you have working software early on during the software life cycle. Each subsequent release of the module adds function to the previous release. The process continues till the complete system is achieved.
</p></td>
				 <td><h3>Paragraph_4</h3><div class="image_wrapper fl_img"><img src="images/templatemo.jpg" alt="image" /></div><p>Advantages of Incremental model:
•	Generates working software quickly and early during the software life cycle.
•	This model is more flexible – less costly to change scope and requirements.
•	It is easier to test and debug during a smaller iteration.
•	In this model customer can respond to each built.
•	Lowers initial delivery cost.
•	Easier to manage risk because risky pieces are identified and handled during it’d iteration.
</p></td>
				 </tr>
				 				 <tr>
				 <td><h3>Paragraph_5</h3><div class="image_wrapper fl_img"><img src="images/koflash.jpg" alt="image" /></div><p>
Iterative model
An iterative life cycle model does not attempt to start with a full specification of requirements. Instead, development begins by specifying and implementing just part of the software, which can then be reviewed in order to identify further requirements. This process is then repeated, producing a new version of the software for each cycle of the model.
</p></td>
				 <td><h3>Paragraph_6</h3><p>Advantages of Iterative model:
•	In iterative model we can only create a high-level design of the application before we actually begin to build the product and define the design solution for the entire product. Later on we can design and built a skeleton version of that, and then evolved the design based on what had been built.
•	In iterative model we are building and improving the product step by step. Hence we can track the defects at early stages. This avoids the downward flow of the defects.
•	In iterative model we can get the reliable user feedback. When presenting sketches and blueprints of the product to users for their feedback, we are effectively asking them to imagine how the product will work.
•	In iterative model less time is spent on documenting and more time is given for designing.
</p></td>
				 </tr>
				 </table>
				 
				 
				
				
				
				
				
				
              <div class="cleaner"></div>
            
        	<div class="cleaner"></div>
        </div> <!-- end of templatemo_main -->
        <div id="templatemo_main_bottom"></div>
   		
        
<?php include("footer.php"); ?> <!-- end of templatemo_footer -->
    
    </div> 
	<!-- end of wrapper -->



</body>
</html>
