<?php

$student_id=$_POST[''];
$student_name=$_POST[''];
$student_branch=$_POST[''];
$student_section = $_POST[''];


$connection= mysqli_connect("localhost","root","","shashank") or die("connection failed");

$sql_query= "INSERT INTO student_table (STU_ID,STU_NAME,BRANCH,SECTION)


VALUES = (
    $student_id,
$student_name,
$student_branch,
$student_section
)";


$result=mysqli_query($connection,$mysql_query);

mysqli_close($coonection);


?>