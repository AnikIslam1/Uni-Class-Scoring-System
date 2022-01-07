<?php
include_once 'dbcon.php';
$id=$_GET["id"];
mysqli_query($conn, "DELETE FROM `cse102fall2021` WHERE id=$id");
                                echo "<script>
                                alert('Report DELETED');
                                window.location.href='admin.php';
                                </script>";    
?>


