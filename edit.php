<?php include_once 'dbcon.php';?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Admin</title>
  </head>
  <body>
      
    <div class="text-center d-flex shadow m-5 p-3">
        <form action="" method="POST" style="max-width:480px;margin:auto;">
            <img class="mt-4 mb-4" src="images\ewu.png" alt="">
            <h1 class="h3 mb-3 font-weight-normal">Update Student Information</h1>
            <?php
                        
                        $id=$_GET["id"];
                        $update=true;
                        
                        
                        $res=mysqli_query($conn,"SELECT * FROM `cse102fall2021` WHERE id=$id");
                        if(count(array($res))==1)
                        {
                            $rd = mysqli_fetch_array($res);
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
                        }
                        if(isset($_POST['update']))
                        {
                                        $student_id = $_POST['student_id'];
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

                                        $query1 = mysqli_query($conn, "SELECT * FROM `cse102fall2021` WHERE student_id='$student_id'");
                                                    
                                        $result = mysqli_query($conn, "UPDATE `cse102fall2021` SET student_id='$student_id',student_name='$student_name',cgpa='$cgpa',department='$department',midone='$midone',midtwo='$midtwo',finals='$finals',class_test='$class_test',class_part='$class_part',project='$project',total='$total',grade='$grade',grade_point='$grade_point' WHERE id=$id");
                                        if($result)             
                                        echo "<script>
                                        alert('Report UPDATED');
                                        window.location.href='admin.php';
                                        </script>";
                                                      
                        }
                            
                                
                            
                            
                        ?>
            <div class="mt-3"><p>Student ID</p>
                <input type="number" name="student_id" class="form-control" placeholder="Student ID" value="<?php echo $student_id; ?>" required autofocus>
            </div>
            <div class="mt-3"><p>Student Name</p>
                <input type="text" name="student_name" class="form-control" placeholder="Student Name" value="<?php echo $student_name; ?>" required autofocus>
            </div>
            <div class="mt-3"><p>CGPA</p>
                <input type="number" name="cgpa" class="form-control" placeholder="CGPA" value="<?php echo $cgpa; ?>" required autofocus>
            </div>
            <div class="mt-3"><p>Department</p>
                <input type="text" name="department" class="form-control" placeholder="Department" value="<?php echo $department; ?>" required autofocus>
            </div>
            <div class="mt-3"><p>Mid ONE Score</p>
                <input type="number" name="midone" class="form-control" placeholder="Mid ONE" value="<?php echo $midone; ?>" required autofocus>
            </div>
            <div class="mt-3"><p>Mid TWO Score</p>
                <input type="number" name="midtwo" class="form-control" placeholder="Mid Two" value="<?php echo $midtwo; ?>" required autofocus>
            </div>
            <div class="mt-3"><p>Final Score</p>
                <input type="number" name="finals" class="form-control" placeholder="Finals" value="<?php echo $finals; ?>" required autofocus>
            </div>
            <div class="mt-3"><p>Class Test Score</p>
                <input type="number" name="class_test" class="form-control" placeholder="Class Test" value="<?php echo $class_test; ?>" required autofocus>
            </div>
            <div class="mt-3"><p>Participation Score</p>
                <input type="number" name="class_part" class="form-control" placeholder="Class Participation" value="<?php echo $class_part; ?>" required autofocus>
            </div>
            <div class="mt-3"><p>Project Score</p>
                <input type="number" name="project" class="form-control" placeholder="Projects" value="<?php echo $project; ?>" required autofocus>
            </div>
            <div class="mt-3"><p>Total Score</p>
                <input type="number" name="total" class="form-control" placeholder="Total" value="<?php echo $total; ?>" required autofocus>
            </div>
            <div class="mt-3"><p>Grade</p>
                <input type="text" name="grade" class="form-control" placeholder="Grade" value="<?php echo $grade; ?>" required autofocus>
            </div>
            <div class="mt-3"><p>Grade Point</p>
                <input type="number" name="grade_point" class="form-control" placeholder="Grade Point" value="<?php echo $grade_point; ?>" required autofocus>
            </div>
            <div class="mt-3">
            <button name="update" class="btn btn-lg btn-primary btn-block">Update</button>
            </div>
       
        </form>
        
        
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
