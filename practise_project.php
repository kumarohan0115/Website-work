<?php

$teacher_use=$_POST['teacher_user'];
$teacher_pass=$_POST['teacher_password'];

$ecoded_pass=bin2hex($teacher_pass);



$connection= mysqli_connect("localhost","root","","shashank") or die("connection failed");

$sql_query= "INSERT INTO teacher_sheet (teacher_id,teacher_name)
VALUES =($teacher_use,$ecoded_pass)";

$result=mysqli_query($connection,$sql_query) or die("i know why ");

mysqli_close($connection);





?>