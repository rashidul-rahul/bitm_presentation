<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Little Star Junior School</title>
    <base href="http://localhost/kid_school/">

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container mainContent">
    <div class="row">
        <div class="col-md-12 ">
            <div class="heading">
                <h1>Little Star Junior School</h1>
            </div>

        </div>
        <div class="row bgcolor">
            <div class="col-md-10 col-md-offset-1">
                <nav class="margintop">
                    <ul class="nav nav-tabs">

                        <li role="presentation"><a href="adminpanel/students/students.php">All Students</a></li>
                        <li role="presentation"><a href="adminpanel/courses/courses.php">Courses</a></li>
                        <li role="presentation"><a href="adminpanel/students/create.php">Add Students</a></li>
                        <li role="presentation" class="active"><a href="adminpanel/courses/create.php">Add Course</a></li>
                        <li role="presentation"><a href="adminpanel/students/assigncourse.php">Assign Course</a></li>
                        <li role="presentation"><a href="adminpanel/adminpanel.php">Admin Panel</a></li>

                    </ul>
                </nav>
            </div>
        </div>
        <div class="margintop back">
            <ul class="nav">
                <li role="presentation"><a href="index.php">Back To Home</a></li>
            </ul>
        </div>
        <div class="row content">
            <div class="col-md-10">
                <form action="http://localhost/kid_school/adminpanel/courses/store.php" method="post">
                    <div class="form-group">
                        <label for="course_name">Course Name</label>
                        <input type="text" name="course_name" class="form-control" id="course_name" placeholder="Course Name">
                    </div>
                    <div class="form-group">
                        <label for="course_code">Course Code</label>
                        <input type="text" name="course_code" class="form-control" id="course_code" placeholder="Course Code">
                    </div>
                    <div class="form-group">
                        <label for="course_details">Course Details</label>
                        <input type="text" name="course_details" class="form-control" id="course_details" placeholder="Course Short Details">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
        <footer>
            &copy; Copyright Rashidul Rahul (All Photo's From Google images)
        </footer>
    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>