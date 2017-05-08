<?php
$db = new PDO("mysql:hostname=localhost;dbname=littlestarschool","root","");
$student_id = $_POST['student_id'];
$course_ids = $_POST['course_ids'];

//foreach ($course_ids as $course_id) {
//    $query  = "INSERT INTO `map_course_students` (`student_id`, `course_id`) VALUES ('1', '2');";
//    $db->exec($query);
//}
//header("location: http://localhost/kid_school/adminpanel/students/students.php");