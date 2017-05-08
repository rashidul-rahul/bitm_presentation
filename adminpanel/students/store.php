<?php
//create Connection
$db = new PDO("mysql:hostname=localhost;dbname=littlestarschool","root", "");
//build query
$query = "INSERT INTO `students` (`first_name`, `last_name`, `school_id`, `fathers_name`, `mothers_name`, `contact_number`) VALUES ('".$_POST['first_name']."', '".$_POST['last_name']."', '".$_POST['school_id']."', '".$_POST['fathers_name']."', '".$_POST['mothers_name']."', '".$_POST['contact']."');";
$stmt = $db->exec($query);
if($stmt){
    header("location: http://localhost/kid_school/adminpanel/students/students.php");
}else {
    echo "Student Addig Problem Contact With Support";
}