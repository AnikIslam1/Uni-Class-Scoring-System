<!DOCTYPE html>
<html>
<head>
<?php include_once 'dbcon.php';?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Result</title>
</head>
<body>
	<header>
    <nav class="navbar navbar-light bg-light">
        
        <div class="container-fluid">
        
        <a class="navbar-brand" href="#">
            <img src="images\ewu.png" alt="" width="250" height="150" class="d-inline-block align-text-center">
        </a>
        <p class="text-center"><h2>East West University</h2></p>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>
	</header>
	<main>
	<div class="text-center d-flex shadow m-5 p-3">
        <div class="container">
            <div class="row">
            <div class="col"><p class="text-center"><h5>Course Details</h5></p></div>
            </div>
            <div class="row">
                <table class="table table-hover table-responsive">
                    <tbody>
                        <tr class="rw">
                            <td class ="bld">Course Code:</td>
                            <td>CSE102</td>
                        </tr>
                        <tr class="rw">
                            <td class ="bld">Course Title:</td>
                            <td>Introduction to Computers II</td> 
                        </tr>
                        <tr class="rw">
                            <td class ="bld">Credit:</td>
                            <td>3.0</td>
                        </tr>
                        <tr class="rw"> 
                            <td class ="bld">Semester:</td>
                            <td>Fall 2021</td>
                        </tr>
                        <tr class="rw">
                            <td class ="bld">Course Instructor:</td>
                            <td>RDA</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div></div>
        <div class="text-center d-flex shadow m-5 p-3">
        <div class="container">
            <div class="row">
            <div class="col"><p class="text-center"><h5>Section Result</h5></p></div>
            </div>
                <div class="container">
                <table class="table table-striped table-hover table-bordered">
                <!-- START code for the header row of the html table -->
                <tr>
                <th>ID</th>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>CGPA</th>
                <th>Department</th>
                <th>Mid 1</th>
                <th>Mid 2</th>
                <th>Final</th>
                <th>Class Test</th>
                <th>Participation</th>
                <th>Project</th>
                <th>Total</th>
                <th>Grade</th>
                <th>Grade Point</th>
                <th></th>
                <th></th>
                </tr>
                <!-- START php code to fetch data from the database -->
                <?php
                $query2 = "SELECT * FROM `cse102fall2021`";
                $readquery = mysqli_query($conn,$query2);
                if ($readquery->num_rows > 0) {
                // code...
                while ($rd = mysqli_fetch_assoc($readquery)) {
                // code...
                $id = $rd['id'];
                $student_id = $rd['student_id'];
                $student_name = $rd['student_name'];
                $cgpa = $rd['cgpa'];
                $department = $rd['department'];
                $midone = $rd['midone'];
                $midtwo = $rd['midtwo'];
                $finals = $rd['finals'];
                $class_test = $rd['class_test'];
                $class_part = $rd['class_part'];
                $project = $rd['project'];
                $total = $rd['total'];
                $grade = $rd['grade'];
                $grade_point = $rd['grade_point'];
                
                ?>
                <!-- Please notice that the two curly brackets } } were not
                closed yet. -->
                <!-- We will close two curly brackets } } after creating
                another row. -->
                <!-- END php code to fetch data from the database -->
                <!-- START code for one row in the html table -->
                <tr>
                <td><?php echo "$id"; ?></td>
                <td><?php echo "$student_id"; ?></td>
                <td><?php echo "$student_name"; ?></td>
                <td><?php echo "$cgpa"; ?></td>
                <td><?php echo "$department"; ?></td>
                <td><?php echo "$midone"; ?></td>
                <td><?php echo "$midtwo"; ?></td>
                <td><?php echo "$finals"; ?></td>
                <td><?php echo "$class_test"; ?></td>
                <td><?php echo "$class_part"; ?></td>
                <td><?php echo "$project"; ?></td>
                <td><?php echo "$total"; ?></td>
                <td><?php echo "$grade"; ?></td>
                <td><?php echo "$grade_point"; ?></td>
                <td><a href="model.php?id=<?php echo$rd["id"]; ?>"><button type="button" class="btn btn-info btn-block">View Result</button></a></td>
                
                </tr>
                <!-- END code for one row in the html table -->
                <!-- START php code to close the two curly brackets -->
                <?php }} ?>
                <!-- END php code to close the two curly brackets -->
                <!-- This makes the row of the table inside the loop. -->
                <!-- So, there will be as many rows as required till the loop
                continues. -->
                
                </table>
                </div>
    
                        
            </div>
        </div>
	</main>
  <footer>
  <div class="container">
            <div class="row">
            <div class="col"><p class="text-center"><h7>xyz</h7></p></div>
            </div>
  </footer>
</body>
</html>