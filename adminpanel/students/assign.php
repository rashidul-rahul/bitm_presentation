<?php
$student_id = $_POST['student_id'];
$course_ids = $_POST['course_ids'];
var_dump($course_ids);
foreach($course_ids as $course_id){
   $query = "INSERT INTO `map_course_students` ( `student_id`, `course_id`) VALUES ( '".$_POST['student_id']."', '".$course_id."');";
    //$db->exec($query);
    echo $query;

}
//header("location: http://localhost/kid_school/adminpanel/students/students.php");