<?php
// connection
$db = new PDO("mysql:hostname=localhost;dbname=littlestarschool","root", "");
//build query

//build query
    $query = "UPDATE `students` SET `first_name` = '" . $_POST['first_name'] . "', `last_name` = '" . $_POST['last_name'] . "', `school_id` = '" . $_POST['school_id'] . "', `fathers_name` = '" . $_POST['fathers_name'] . "', `mothers_name` = '" . $_POST['mothers_name'] . "', `contact_number` = '" . $_POST['contact_number'] . "' WHERE `students`.`id` = " . $_POST['id'] . ";";
    $stmt = $db->exec($query);
    if ($stmt) {
        header("location: http://localhost/kid_school/adminpanel/students/show.php?id=" . $_POST['id'] . "");
    } else {
        echo "Update Error. Please Contact with With Support";

    }
