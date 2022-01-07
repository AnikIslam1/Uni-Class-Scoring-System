<!DOCTYPE html>
<html>
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
    <?php
                $id=$_GET["id"];
                
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
    ?>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand"><?php echo "$student_id"?></a>
    <form class="d-flex">
      
    <a href="http://localhost/result.php"><button type="button" class="btn btn-info btn-block">Back</button></a>
    </form>
  </div>
</nav>
<div class="text-center d-flex shadow m-5 p-3">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Information</th>
      <th scope="col">Identity</th> 
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">ID</th>
      <td><?php echo "$student_id"?></td>
      
    </tr>
    <tr>
      <th scope="row">Student Name</th>
      <td><?php echo "$student_name"?></td> 
    </tr>
    <tr>
      <th scope="row">Department</th>
      <td><?php echo "$department"?></td> 
      
    </tr>
    <tr>
      <th scope="row">CGPA</th>
      <td><?php echo "$cgpa"?></td>  
    </tr>
  </tbody>
</table>
</div>
<div class="text-center d-flex shadow m-5 p-3">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Criteria</th>
      <th scope="col">Obtained</th> 
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">MID One Score</th>
      <td><?php echo "$midone"?></td>
      
    </tr>
    <tr>
      <th scope="row">Mid Two Score</th>
      <td><?php echo "$midtwo"?></td> 
    </tr>
    <tr>
      <th scope="row">Final Score</th>
      <td><?php echo "$finals"?></td> 
      
    </tr>
    <tr>
      <th scope="row">Class Test Score</th>
      <td><?php echo "$class_test"?></td>  
    </tr>
    <tr>
      <th scope="row">Class Performance</th>
      <td><?php echo "$class_part"?></td>  
    </tr>
    <tr>
      <th scope="row">Project Score</th>
      <td><?php echo "$project"?></td>  
    </tr>
    <tr>
      <th scope="row">Total Score</th>
      <td><?php echo "$total"?></td>  
    </tr>
    <tr>
      <th scope="row">Grade</th>
      <td><?php echo "$grade"?></td>  
    </tr>
    <tr>
      <th scope="row">Grade Point</th>
      <td><?php echo "$grade_point"?></td>  
    </tr>
  </tbody>
</table>
</div>


</body>
</html>