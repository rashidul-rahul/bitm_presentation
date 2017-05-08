<?php
// connection
$db = new PDO("mysql:hostname=localhost;dbname=littlestarschool","root", "");
//build query

//build query
$query = "UPDATE `courses` SET `name` = '" . $_POST['name'] . "', `course_code` = '" . $_POST['course_code'] . "', `course_details` = '" . $_POST['course_details']  ."' WHERE `courses`.`id` = " . $_POST['id'] . ";";
$stmt = $db->exec($query);
if ($stmt) {
    header("location: http://localhost/kid_school/adminpanel/courses/show.php?id=" . $_POST['id'] . "");
} else {
    echo "Update Error. Please Contact with With Support";

}
