/*
SQLyog Ultimate v8.55 
MySQL - 5.0.67-community-nt : Database - teacher_evaluation
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`teacher_evaluation` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `teacher_evaluation`;

/*Table structure for table `course` */

DROP TABLE IF EXISTS `course`;

CREATE TABLE `course` (
  `course_id` int(10) NOT NULL default '0',
  `course_code` varchar(50) default NULL,
  `course_name` varchar(50) default NULL,
  `semester_id` int(10) default NULL,
  `teachers_code` int(10) default NULL,
  PRIMARY KEY  (`course_id`),
  UNIQUE KEY `course_id` (`course_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `course` */

insert  into `course`(`course_id`,`course_code`,`course_name`,`semester_id`,`teachers_code`) values (1,'CSE-101','C',5,102),(2,'CSE-300','Software Development',5,100),(3,'CSE-301','Database Management',5,101),(4,'CSE-103','C++',5,103),(5,'CSE-205','Data Structure',5,104);

/*Table structure for table `department` */

DROP TABLE IF EXISTS `department`;

CREATE TABLE `department` (
  `dept_id` int(10) default NULL,
  `dept_name` varchar(50) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `department` */

insert  into `department`(`dept_id`,`dept_name`) values (1,'Department of Computer Science & Engineering'),(2,'Department of Civil Engineering'),(3,'Department of Architecture'),(4,'Department of Electronics & Electrical Engineering'),(5,'Department of Law');

/*Table structure for table `entry` */

DROP TABLE IF EXISTS `entry`;

CREATE TABLE `entry` (
  `entry_id` int(10) NOT NULL auto_increment,
  `course_id` int(10) default NULL,
  `teachers_code` varchar(10) default NULL,
  `question_1` int(10) default NULL,
  `question_2` int(10) default NULL,
  `question_3` int(10) default NULL,
  `question_4` int(10) default NULL,
  `question_5` int(10) default NULL,
  `question_6` int(10) default NULL,
  `question_7` int(10) default NULL,
  `question_8` int(10) default NULL,
  `question_9` int(10) default NULL,
  `question_10` int(10) default NULL,
  `question_11` int(10) default NULL,
  `question_12` int(10) default NULL,
  `general_comments_on_instructor` tinytext,
  `question_13` int(10) default NULL,
  `question_14` int(10) default NULL,
  `question_15` int(10) default NULL,
  `general_comments_on_course` tinytext,
  `student_id` int(10) default NULL,
  `date` date default NULL,
  `teachers_name` varchar(50) default NULL,
  PRIMARY KEY  (`entry_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `entry` */

insert  into `entry`(`entry_id`,`course_id`,`teachers_code`,`question_1`,`question_2`,`question_3`,`question_4`,`question_5`,`question_6`,`question_7`,`question_8`,`question_9`,`question_10`,`question_11`,`question_12`,`general_comments_on_instructor`,`question_13`,`question_14`,`question_15`,`general_comments_on_course`,`student_id`,`date`,`teachers_name`) values (1,1,'100',2,2,2,2,2,5,5,5,4,4,4,4,'abc',5,4,4,'',NULL,NULL,'Md. Najmus Sadat'),(2,0,'101',5,4,5,4,2,3,1,3,2,2,3,3,'He is the Head of the department .. ekhon buijha lon..',3,3,3,'valo.. valo to..',NULL,NULL,'Aloke Kumar Saha'),(3,102,'102',4,4,4,4,4,4,5,5,5,5,5,1,'omg!',3,3,3,'valo.. besh valo',NULL,NULL,'Nabeel Mohammed'),(4,0,'',0,0,0,0,0,0,0,0,0,0,0,0,'',0,0,0,'',NULL,NULL,''),(5,2,'101',5,4,4,4,4,4,4,4,4,4,4,4,'def',3,3,3,'',NULL,NULL,NULL),(6,3,'100',4,3,5,3,1,5,1,1,1,1,1,1,'def',4,4,2,'',NULL,NULL,NULL),(7,3,'100',4,3,5,3,1,5,1,1,1,1,1,1,'def',4,4,2,'',NULL,NULL,NULL);

/*Table structure for table `semester` */

DROP TABLE IF EXISTS `semester`;

CREATE TABLE `semester` (
  `semester_id` int(10) NOT NULL,
  `semester_name` varchar(50) default NULL,
  PRIMARY KEY  (`semester_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `semester` */

insert  into `semester`(`semester_id`,`semester_name`) values (1,'1st Year 1st semester'),(2,'1st Year 2nd Semester'),(3,'2nd Year 1st Semester'),(4,'2nd Year 2nd Semester'),(5,'3rd Year 1st Semester'),(6,'3rd Year 2nd Semester'),(7,'4th Year 1st Semester'),(8,'4th Year 2nd Semester');

/*Table structure for table `student` */

DROP TABLE IF EXISTS `student`;

CREATE TABLE `student` (
  `student_id` int(10) NOT NULL auto_increment,
  `student_reg` int(10) default NULL,
  `student_name` varchar(50) default NULL,
  `student_dept` varchar(50) default NULL,
  `student_email` varchar(50) default NULL,
  `student_password` varchar(50) default NULL,
  `student_batch` varchar(50) default NULL,
  `semester_id` int(50) default NULL,
  PRIMARY KEY  (`student_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `student` */

insert  into `student`(`student_id`,`student_reg`,`student_name`,`student_dept`,`student_email`,`student_password`,`student_batch`,`semester_id`) values (1,13101021,'Mahfuj Mahi','CSE','mahfuj@yahoo.com ','123456','Spring-2013',5),(2,13101021,'Falguni Mujumder Geet','CSE','geet.falguni@gmail.com','7up','33',5),(5,11301050,'Foikka','CSE','abc@gmail.com','123456','32nd Batch',5);

/*Table structure for table `teachers` */

DROP TABLE IF EXISTS `teachers`;

CREATE TABLE `teachers` (
  `teachers_id` int(10) NOT NULL default '0',
  `teachers_code` varchar(50) default NULL,
  `teachers_name` varchar(50) default NULL,
  `dept_id` int(50) default NULL,
  `teachers_photo` varchar(50) default NULL,
  `teachers_email` varchar(50) default NULL,
  `teachers_contact` tinytext,
  PRIMARY KEY  (`teachers_id`),
  UNIQUE KEY `teachers_id` (`teachers_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `teachers` */

insert  into `teachers`(`teachers_id`,`teachers_code`,`teachers_name`,`dept_id`,`teachers_photo`,`teachers_email`,`teachers_contact`) values (1,'100','Dr. Khan Md. Anwarus Salam',1,'images/salam.jpg',NULL,NULL),(2,'101','Aloke Kumar Saha',1,'images/aloke.jpg',NULL,NULL),(3,'102','Shaila Rahman',1,'images/shaila.jpg',NULL,NULL),(4,'103','Asif Hossain',1,'images/asif.jpg',NULL,NULL),(5,'104','Md. Zaforullah Momtaz',1,'images/zafor.jpg',NULL,NULL),(6,'105','Md. Selim',3,'images/selim.jpg',NULL,NULL),(7,'106','Md. Jabbar',3,'images/jabbar.jpg',NULL,NULL),(8,'107','Mrs. Fatema',4,'images/fatema.jpg',NULL,NULL),(9,'109','Mrs. Kulsum',4,'images/kulsum.jpg',NULL,NULL),(10,'110','Mrs. Nasima',5,'images/nasima.jpg',NULL,NULL),(11,'111','Mrs. Jorina',5,'images/nasima.jpg',NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
