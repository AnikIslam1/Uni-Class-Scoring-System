<!doctype html>
<html lang="en">
  <head>
    <?php include_once 'dbcon.php';?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Admin</title>
  </head>
  <body>
 
    <div class="text-center d-flex shadow m-5 p-3"> 
        <form action="" method="POST" style="max-width:960px;margin:auto;">
            <img class="mt-4 mb-4" src="images\ewu.png" alt="">
            <h1 class="h3 mb-3 font-weight-normal">Add Student Information</h1>
            <?php
                    session_start();
                    include_once 'dbcon.php';
                    if(isset($_POST['submit']))
                    {
                        $s_id = $_POST['student_id'];
                        $student_name = $_POST['student_name'];
                        $cgpa = $_POST['cgpa'];
                        $department = $_POST['department'];
                        $midone = $_POST['midone'];
                        $midtwo = $_POST['midtwo'];
                        $finals = $_POST['finals'];
                        $class_test = $_POST['class_test'];
                        $class_part = $_POST['class_part'];
                        $project = $_POST['project'];
                        $total = $_POST['total'];
                        $grade = $_POST['grade'];
                        $grade_point = $_POST['grade_point'];

                        $query1 = mysqli_query($conn, "SELECT * FROM `cse102fall2021` WHERE student_id='$s_id'");
                        if(mysqli_num_rows($query1)>0){
                            echo "<script>
                            alert('Student Already Exist');
                            window.location.href='admin.php';
                            </script>";
                            echo '<span style="color:#FF0000;text-align:center;"><h1 class="h1 font-weight-normal">Student Already Exist</h1></span>';
                        }else{
                            $result = mysqli_query($conn, "INSERT into `cse102fall2021` VALUES (NULL,'$s_id', '$student_name', '$cgpa', '$department', '$midone', '$midtwo', '$finals', '$class_test', '$class_part', '$project', '$total', '$grade', '$grade_point')");
                            if($result)
                        {   
                             echo "<script>
                             alert('Report Inserted');
                             window.location.href='admin.php';
                             </script>";
                            echo '<span style="color:#6A5ACD;text-align:center;"><h1 class="h1 font-weight-normal">Inserted</h1></span>';
                        }
                            
                        else{   
                            echo "<script>
                            alert('Error Submit');
                            window.location.href='admin.php';
                            </script>";
                            }
                            
                        }   
                    }
                    
                    ?>
                    
            <div class="mt-3"><p>Student ID</p>
                <input type="number" name="student_id" class="form-control" placeholder="Student ID" required autofocus>
            </div>
            <div class="mt-3"><p>Student Name</p>
                <input type="text" name="student_name" class="form-control" placeholder="Student Name" required autofocus>
            </div>
            <div class="mt-3"><p>CGPA</p>
                <input type="number" name="cgpa" class="form-control" placeholder="CGPA" required autofocus>
            </div>
            <div class="mt-3"><p>Department</p>
                <input type="text" name="department" class="form-control" placeholder="Department" required autofocus>
            </div>
            <div class="mt-3"><p>Mid ONE Score</p>
                <input type="number" name="midone" class="form-control" placeholder="Mid ONE" required autofocus>
            </div>
            <div class="mt-3"><p>Mid TWO Score</p>
                <input type="number" name="midtwo" class="form-control" placeholder="Mid Two" required autofocus>
            </div>
            <div class="mt-3"><p>Final Score</p>
                <input type="number" name="finals" class="form-control" placeholder="Finals" required autofocus>
            </div>
            <div class="mt-3"><p>Class Test Score</p>
                <input type="number" name="class_test" class="form-control" placeholder="Class Test" required autofocus>
            </div>
            <div class="mt-3"><p>Participation Score</p>
                <input type="number" name="class_part" class="form-control" placeholder="Class Participation" required autofocus>
            </div>
            <div class="mt-3"><p>Project Score</p>
                <input type="number" name="project" class="form-control" placeholder="Projects" required autofocus>
            </div>
            <div class="mt-3"><p>Total Score</p>
                <input type="number" name="total" class="form-control" placeholder="Total" required autofocus>
            </div>
            <div class="mt-3"><p>Grade</p>
                <input type="text" name="grade" class="form-control" placeholder="Grade" required autofocus>
            </div>
            <div class="mt-3"><p>Grade Point</p>
                <input type="number" name="grade_point" class="form-control" placeholder="Grade Point" required autofocus>
            </div>
            <div class="mt-3">
            <button name="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
            </div>
            <div class="mt-3">
                    
        </div>
        </form>
        
        
    </div>

    <div class="d-flex shadow m-5 p-3">
        <div class="container">
                <div class="row">
                <div class="col">
                <nav class="navbar navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand">Modify Section</a>
                        <form class="d-flex">
                        
                        <button class="btn btn-success" onclick=" window.open('http://localhost/result.php','_blank')">Show Section Result</button>
                        </form>
                    </div>
                    </nav>

                </div>
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
                                <td><a href="edit.php?id=<?php echo$rd["id"]; ?>"><button type="button" class="btn btn-warning btn-block">Edit</button></a></td>
                                <td><a href="del.php?id=<?php echo$rd["id"]; ?>"><button type="button"  class="btn btn-danger btn-block">Delete</button></a></td>
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
        

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
