<?php
//create Connection
$db = new PDO("mysql:hostname=localhost;dbname=littlestarschool","root", "");
//build query
$query = "INSERT INTO `courses` (`name`, `course_code`, `course_details`) VALUES ('".$_POST['course_name']."', '".$_POST['course_code']."', '".$_POST['course_details']."');";
$stmt = $db->exec($query);
if($stmt){
    header("location: http://localhost/kid_school/adminpanel/courses/courses.php");
}else {
    echo "Course Addig Problem Contact With Support";
}