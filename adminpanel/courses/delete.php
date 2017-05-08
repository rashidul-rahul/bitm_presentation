
<?php
$db = new PDO("mysql:hostname=localhost;dbname=littlestarschool","root", "");
//build query
$query = "DELETE FROM `courses` WHERE `courses`.`id` = ".$_GET['id']."";
echo $query;
$stmt = $db->exec($query);
if($stmt){
    header("location: http://localhost/kid_school/adminpanel/courses/courses.php");
}else{
    echo "Delate Error Contact with Support";
}
?>