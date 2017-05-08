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
    </div>
    <div class="row bgcolor">
        <div class="col-md-10 col-md-offset-1">
            <nav class="margintop">
                <ul class="nav nav-tabs">

                    <li role="presentation"><a href="adminpanel/students/students.php">All Students</a></li>
                    <li role="presentation"><a href="adminpanel/courses/courses.php">Courses</a></li>
                    <li role="presentation"><a href="adminpanel/students/create.php">Add Students</a></li>
                    <li role="presentation"><a href="adminpanel/courses/create.php">Add Course</a></li>
                    <li role="presentation"><a href="adminpanel/students/assigncourse.php">Assign Course</a></li>
                    <li role="presentation" class="active"><a href="adminpanel/adminpanel.php">Admin Panel</a></li>

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

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Students</h3>
                </div>
                <div class="panel-body">
                    <p>We Have 300 Students</p>
                    <p><a href="adminpanel/students/students.php">All</a> Student</p>
                    <p><a href="adminpanel/students/create.php">Add</a> Student</p>
                    <p><a href="adminpanel/students/assigncourse.php">Assign</a> Course</p>

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Courses</h3>
                </div>
                <div class="panel-body">
                    <p>We Have 30 Courses</p>
                    <p><a href="adminpanel/courses/courses.php">All</a> Course</p>
                    <p><a href="adminpanel/courses/create.php">Add</a> Course</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row content">
        <div class="col-md-6 ">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Course Teachers</h3>
                </div>
                <div class="panel-body">
                    <p>We Have 30 Teachers</p>
                    <p><a href="adminpanel/teachers/teachears.php">ALL</a> Teachers</p>
                    <p><a href="adminpanel/teachers/create.php">ADD</a> Teachers</p>
                    <p><a href="adminpanel/teachers/assigncourse.php">Assign</a> Course</p>
                </div>
            </div>
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