# Teacher Evaluation System Documentation

## Introduction
This project was done as part of an assignment during my University time back in 2013. The Teacher Evaluation System is a web-based application designed to facilitate the evaluation of teaching quality by students. It allows students to rate various aspects of their instructors and courses, providing valuable feedback to educators. This documentation serves as a guide for setting up, using, and understanding the Teacher Evaluation System.

## Features
- **Student Evaluation:** Students can rate instructors and courses based on predefined criteria.
- **Data Visualization:** Evaluation results are displayed using Google Charts, making it easy to interpret and analyze.
- **User Authentication:** Users need to log in to access the evaluation system, ensuring privacy and security.
- **Dynamic Selection:** Dropdown menus dynamically populate with relevant options based on the user's semester and department.
- **Email Integration:** Students can send emails to instructors directly from the system for further communication.

![Teacher Evaluation Form](https://github.com/imtiazUAP/teacher_evaluation/raw/main/images/form.png)

![Teacher Profile](https://github.com/imtiazUAP/teacher_evaluation/raw/main/images/teacher-profile.png)


## Installation
1. **Clone Repository:** Clone the repository to your local machine.
   ```
   git clone https://github.com/imtiazUAP/teacher_evaluation.git
   ```
2. **Database Setup:**
   - Import the `teacher_evaluation.sql` file into your MySQL database.
3. **Configuration:**
   - Update `dbconnect.php` with your MySQL database credentials.
4. **Web Server:**
   - Deploy the project on a web server with PHP support (e.g., Apache, Nginx).

## Usage
1. **Student Evaluation:**
   - Log in with your student credentials.
   - Fill out the evaluation form, rating instructors and courses based on predefined criteria.
   - Submit the form to save your evaluation.
2. **View Evaluation Results:**
   - Instructors can view evaluation results by accessing `single_result.php`.
   - Select the instructor to view their average ratings and comments.
3. **Admin Tasks:**
   - Admins can manage user accounts, departments, and other system settings directly in the database or through additional admin functionalities.

## File Structure
The project directory structure is organized as follows:
```
- contact.php
- css/
  - default.css
  - jquery.ennui.contentslider.css
- data1/
  - images/
    - 1.jpg
    - 2.jpg
    - 3.jpg
  - tooltips/
    - 1.jpg
    - 2.jpg
    - 3.jpg
- Database/
  - teacher_evaluation.sql
- dbconnect.php
- departments.php
- engine1/
  - The Slider engine
- entry.php
- entry_confirmation.php
- entry_save.php
- footer.php
- Form_Fill-Up.php
- head.php
- header.php
- headerindex.php
- home.php
- images/
  - All the necessary images
- index.php
- js/
  - jquery-1.3.1.min.js
  - jquery.easing.1.3.js
  - jquery.ennui.contentslider.js
  - jquery.js
- logout.php
- main_style.css
- menu_header.php
- menu_headerindex.php
- partners.php
- php_sendmail_upload2.php
- README.md
- send_email.php
- send_mail_to_vc.php
- sign_up.php
- sign_up_notification.php
- sign_up_save.php
- single_result.php
- teacher_evaluation/
- teacher_list_archi.php
- teacher_list_civil.php
- teacher_list_cse.php
- teacher_list_eee.php
- teacher_list_english.php
- teacher_list_law.php
```

## Dependencies
- **Google Charts:** Used for visualizing evaluation results in bar charts.
- **PHP:** Server-side scripting language used for dynamic content generation.
- **MySQL:** Database management system used for storing evaluation data.

## Contributing
Contributions to the Teacher Evaluation System project are welcome. You can contribute by:
- Reporting issues or suggesting improvements through GitHub Issues.
- Forking the repository, making changes, and creating pull requests.

## License
The Teacher Evaluation System is open-source software licensed under the [MIT License](LICENSE). You are free to use, modify, and distribute this software for personal or commercial purposes.